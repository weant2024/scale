<?php
$horarioexpediente = $_POST['horarioexpediente'];
switch ($horarioexpediente) {
    case "01-07":
        $inicioexpediente = "01:00:00";
        $iniciointervalo = "04:00:00";
        $finalintervalo = "04:15:00";
        $finalexpediente = "07:00:00";
        break;
    case "07-13":
        $inicioexpediente = "07:00:00";
        $iniciointervalo = "10:00:00";
        $finalintervalo = "10:15:00";
        $finalexpediente = "13:00:00";
        break;
    case "13-19":
        $inicioexpediente = "13:00:00";
        $iniciointervalo = "16:00:00";
        $finalintervalo = "16:15:00";
        $finalexpediente = "19:00:00";
        break;
    case "19-01":
        $inicioexpediente = "19:00:00";
        $iniciointervalo = "21:00:00";
        $finalintervalo = "21:15:00";
        $finalexpediente = "01:00:00";
        break;
    default:
        // Caso nenhum dos valores seja correspondido
        // Defina um comportamento padrão aqui, se necessário
        break;
}

$idusuario = $_POST['nome'];       
$localdetrabalho = $_POST['localdetrabalho'];                          

$busca = "SELECT * FROM usuario WHERE id='$idusuario'"; //faz a busca com as palavras enviadas
$query = $conn->query($busca);
$dados = $query->fetch_assoc();

$nome = $dados['nome'];
?>