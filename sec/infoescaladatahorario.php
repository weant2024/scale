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

        $buscausuarioescalado = "SELECT * FROM usuario WHERE id='$idusuario'";
        $queryusuarioescalado = $conn->query($buscausuarioescalado);
        $buscausuarioescalado = $queryusuarioescalado->fetch_assoc();
        $nomeusuarioescalado = $buscausuarioescalado['nome'];
        $loginusuarioescalado = $buscausuarioescalado['login'];

            echo "</br><b>Data: </b>$dataescalacompleta </br>";
            echo "<b>Início de expediente:</b> $inicioexpediente</br>";
            echo "<b>Início de intervalo:</b> $iniciointervalo</br>";
            echo "<b>Final de intervalo:</b> $finalintervalo</br>";
            echo "<b>Final de expediente:</b> $finalexpediente</br>";
        ?>
        <div class="alertaescalavermelho">
        <?php
        
            if (@$queryescalahorario->num_rows > 0) {                  
                echo "$loginusuarioescalado está escalado</br>";                                          
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
        <div class="alertaescalavermelho">
        <?php  

            if ("$dataescala" == "$aniversario"){
                echo "Escalado no aniversário</br>";                  
            }            
        ?>
        </div>
        <?php
    }
}
?>
