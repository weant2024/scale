<?php
$buscaescala = "SELECT * FROM escala WHERE id_usuario='$idusuario'"; //faz a busca com as palavras enviadas
$queryescala = $conn->query($buscaescala);
$dadosescala = $queryescala->fetch_assoc();

foreach ($dates as $date) {
    // Exibe as datas selecionadas
    $allItems = array();
                    
    // Tenta separar cada data usando '-' como delimitador
    $separatedData = explode('-', $date);

    //Verifica se a data está no formato correto (dia-mes-ano)
    if (count($separatedData) == 3) {
        $escaladia = $separatedData[0];
        $escalames = $separatedData[1];
        $escalaano = $separatedData[2];            
            
        // Adiciona os itens separados ao array $allItems
        $allItems[] = array('dia' => $escaladia, 'mes' => $escalames, 'ano' => $escalaano);

        $dataescala = "$escaladia-$escalames";  
        $dataescalacompleta = "$escaladia/$escalames/$escalaano";      
        $dataescalatratada = "$escalaano-$escalames-$escaladia";  
        include "infoescaladata.php";   
            
        $buscaescalaafastamento = "SELECT * FROM afastamento WHERE id_usuario = '$idusuario' AND '$dataescalacompleta' BETWEEN datainicial AND datafinal;";
        $queryescalaafastamento = $conn->query($buscaescalaafastamento);  
        $dadosescalaafastamento = $queryescalaafastamento->fetch_assoc();    
        @$afastamentomotivo = $dadosescalaafastamento['motivo'];
        @$afastamentodatainicial = $dadosescalaafastamento['datainicial'];    
        @$afastamentodatafinal = $dadosescalaafastamento['datafinal'];                 
                
                
        $buscaescalahorario = "SELECT * FROM escala WHERE dia='$escaladia' AND mes='$escalames' AND ano='$escalaano' AND horarioinicio='$inicioexpediente'"; //faz a busca com as palavras enviadas
        $queryescalahorario = $conn->query($buscaescalahorario);
        $dadosescalahorario = $queryescalahorario->fetch_assoc();  
        @$loginescalahorario = $dadosescalahorario['id_usuario'];    

        $buscausuarioescalado = "SELECT * FROM usuario WHERE id='$loginescalahorario'";
        $queryusuarioescalado = $conn->query($buscausuarioescalado);
        $buscausuarioescalado = $queryusuarioescalado->fetch_assoc();
        @$nomeusuarioescalado = $buscausuarioescalado['nome'];
        @$loginusuarioescalado = $buscausuarioescalado['login'];

            echo "</br><b>Data: </b>$dataescalacompleta </br>";
            echo "<b>Início de expediente:</b> $inicioexpediente</br>";
            echo "<b>Início de intervalo:</b> $iniciointervalo</br>";
            echo "<b>Final de intervalo:</b> $finalintervalo</br>";
            echo "<b>Final de expediente:</b> $finalexpediente</br>";           
        ?>
        <div class="alertaescalavermelho">
        <?php
        
            if (@$queryescalahorario->num_rows > 0) {                  
                echo "$loginusuarioescalado já está escalado nesta data e horário</br>";                                          
            }

        ?>
        </div>
        <div class="alertaescalavermelho">
        <?php    

            if ($queryescalaafastamento->num_rows > 0){
                echo " $afastamentomotivo entre $afastamentodatainicial e $afastamentodatafinal</br>";
            } 

        ?>
        </div>
        <div class="alertaescalaverde">
        <?php  

            if ("$dataescala" == "$aniversario"){
                echo "Escalado no aniversário</br>";                  
            }            
        ?>
        </div>

        <div class="alertaescalavermelho">
            <?php            
                $busca7dias = "
                SET @nova_data = '$dataescalatratada';
                WITH DateSeries AS (
                    SELECT
                        id_usuario,
                        DATE(CONCAT_WS('-', ano, LPAD(mes, 2, '0'), LPAD(dia, 2, '0'))) AS data
                    FROM
                        escala
                    WHERE
                        id_usuario = $idusuario
                    UNION ALL
                    SELECT
                        $idusuario AS id_usuario, -- Associando a nova data ao usuário especificado
                        @nova_data AS data
                ),
                OrderedDates AS (
                    SELECT
                        id_usuario,
                        data,
                        LEAD(data, 1) OVER (PARTITION BY id_usuario ORDER BY data) AS next_day_1,
                        LEAD(data, 2) OVER (PARTITION BY id_usuario ORDER BY data) AS next_day_2,
                        LEAD(data, 3) OVER (PARTITION BY id_usuario ORDER BY data) AS next_day_3,
                        LEAD(data, 4) OVER (PARTITION BY id_usuario ORDER BY data) AS next_day_4,
                        LEAD(data, 5) OVER (PARTITION BY id_usuario ORDER BY data) AS next_day_5,
                        LEAD(data, 6) OVER (PARTITION BY id_usuario ORDER BY data) AS next_day_6
                    FROM
                        DateSeries
                )
                SELECT
                    id_usuario,
                    data AS primeiro_dia,
                    DATE_ADD(data, INTERVAL 6 DAY) AS ultimo_dia
                FROM
                    OrderedDates
                WHERE
                    next_day_1 = DATE_ADD(data, INTERVAL 1 DAY)
                    AND next_day_2 = DATE_ADD(data, INTERVAL 2 DAY)
                    AND next_day_3 = DATE_ADD(data, INTERVAL 3 DAY)
                    AND next_day_4 = DATE_ADD(data, INTERVAL 4 DAY)
                    AND next_day_5 = DATE_ADD(data, INTERVAL 5 DAY)
                    AND next_day_6 = DATE_ADD(data, INTERVAL 6 DAY);
                ";

                // Executa a query e verifica erros
                $resultadobusca7dias = $conn->multi_query($busca7dias);

                // Avança para o próximo conjunto de resultados
                $conn->next_result();
                $resultadobusca7dias = $conn->store_result();

                if ($resultadobusca7dias->num_rows > 0) {
                    // Loop através dos resultados
                    while($row7dias = $resultadobusca7dias->fetch_assoc()) {
                        $primeirodiabusca7dias = $row7dias['primeiro_dia'];
                        $ultimodiabusca7dias = $row7dias['ultimo_dia'];                      
                        
                        // Exemplo de uso das variáveis
                        echo "Escalado 7 dias seguidos, entre $primeirodiabusca7dias a $ultimodiabusca7dias</br>";                           
                    }
                }
            ?>            
        </div>

        <?php
    }
}
?>
