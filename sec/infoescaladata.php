<?php

$nascimento = $dados['nascimento'];
// Divide a string em partes separadas por "/"
$partesnascimento = explode("/", $nascimento);
// Pega o dia e o mês
$dianascimento = $partesnascimento[0];
$mesnascimento = $partesnascimento[1];
// Combina o dia e o mês em uma nova string
$aniversario = "$dianascimento-$mesnascimento";

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

} else {
    $msgerro = "Formato de data inválido: $date<br>";            
    echo "$msg'";
}        

?>