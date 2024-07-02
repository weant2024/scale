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
        include "infoescaladata.php";   
            if ("$dataescala" == "$aniversario"){
                echo "<b>Data: </b>$date <font color='red'>Escalado no aniversário</font></br>";
            }
            else {
                echo "<b>Data: </b>$date </br>";
            }  
        $buscaescalahorario = "SELECT * FROM escala WHERE id_usuario='$idusuario' AND dia='$escaladia' AND mes='$escalames' AND ano='$escalaano' AND horarioinicio='$inicioexpediente'"; //faz a busca com as palavras enviadas
        $queryescalahorario = $conn->query($buscaescalahorario);
        $dadosescalahorario = $queryescalahorario->fetch_assoc();
            if (@$queryescalahorario->num_rows < 1) {  
                echo "U:$idusuario H:$inicioexpediente D:$escaladia M:$escalames A:$escalaano</br>";
                echo "<b>Início de expediente:</b> $inicioexpediente</br>";
                echo "<b>Início de intervalo:</b> $iniciointervalo</br>";
                echo "<b>Final de intervalo:</b> $finalintervalo</br>";
                echo "<b>Final de expediente:</b> $finalexpediente</br></br>"; 

                
            }
            else {
                echo "<b>Início de expediente:</b> $inicioexpediente <font color='red'>Já escalado</font></br>";
                echo "<b>Início de intervalo:</b> $iniciointervalo <font color='red'>Já escalado</font></br>";
                echo "<b>Final de intervalo:</b> $finalintervalo <font color='red'>Já escalado</font></br>";
                echo "<b>Final de expediente:</b> $finalexpediente <font color='red'>Já escalado</font></br></br>"; 
            }
    }
}
?>