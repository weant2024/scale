<?php
include "config.php";
include "sec_verifica.php";
if ( $nivel < 2 ) 
{
	header("Location: sec_tipo.php"); exit;
}


$id_escala = $_POST['id_escala'];

$data = $_POST['data'];
list($escaladia, $escalames, $escalaano) = explode("/", $data);

$id_usuarioescalado = $_POST['profissional'];
$id_contrato = $_POST['id_exibe_contratos'];
$localdetrabalho = $_POST['localdetrabalho'];


$horario = date('H:i:s');
$dia = date('d');
$mes = date('m');
$ano = date('Y');
$semana = date('w');
$operador = $_SESSION["UsuarioLogin"];

$inicioexpediente = $_POST['iniciodeexpediente'];
$fimdeexpediente = $_POST['fimdeexpediente'];

// Converter os horários para objetos DateTime
$inicio = new DateTime($inicioexpediente);
$fim = new DateTime($fimdeexpediente);

// Calcular a diferença de tempo
$intervaloTotal = $inicio->diff($fim);

// Encontrar o meio do expediente
$meioExpediente = clone $inicio;
$meioExpediente->add(new DateInterval('PT' . (($intervaloTotal->h * 60 + $intervaloTotal->i) / 2) . 'M'));

// Calcular o início e fim do intervalo de 15 minutos
$inicioIntervalo = clone $meioExpediente;
$fimIntervalo = clone $meioExpediente;
$inicioIntervalo->sub(new DateInterval('PT7M30S')); // Subtrai 7 minutos e 30 segundos
$fimIntervalo->add(new DateInterval('PT7M30S')); // Adiciona 7 minutos e 30 segundos

// Formatar os horários para exibição
$inicioIntervaloFormatado = $inicioIntervalo->format('H:i');
$fimIntervaloFormatado = $fimIntervalo->format('H:i');
            

switch ($mes){

case 1: $mes = "Janeiro"; break;
case 2: $mes = "Fevereiro"; break;
case 3: $mes = "Março"; break;
case 4: $mes = "Abril"; break;
case 5: $mes = "Maio"; break;
case 6: $mes = "Junho"; break;
case 7: $mes = "Julho"; break;
case 8: $mes = "Agosto"; break;
case 9: $mes = "Setembro"; break;
case 10: $mes = "Outubro"; break;
case 11: $mes = "Novembro"; break;
case 12: $mes = "Dezembro"; break;

}


switch ($semana) {

case 0: $semana = "Domingo"; break;
case 1: $semana = "Segunda"; break;
case 2: $semana = "Terça"; break;
case 3: $semana = "Quarta"; break;
case 4: $semana = "Quinta"; break;
case 5: $semana = "Sexta"; break;
case 6: $semana = "Sábado"; break;

}

// $query_escala = "SELECT * FROM escala WHERE id='$id_escala'";
//     $resultado_escala = $conn->query($query_escala);
//         $dados_escala = $resultado_escala->fetch_assoc();
//             $id_usuario_escala = $dados_escala['id_usuario'];
?>

                        <?php

                        // Preparando a primeira query
                        $query = "UPDATE escala SET id_usuario=?, id_contrato=?, id_local=?, horarioinicio=?, intervaloinicio=?, intervalofim=?, horariofim=?, operador=? WHERE id=?";
                        $stmt = $conn->prepare($query);

                        if ($stmt === false) {
                            die('Prepare failed: ' . htmlspecialchars($conn->error));
                        }

                        $stmt->bind_param(
                            'iiisssssi', 
                            $id_usuarioescalado, 
                            $id_contrato,
                            $localdetrabalho,
                            $inicioexpediente, 
                            $inicioIntervaloFormatado, 
                            $fimIntervaloFormatado, 
                            $fimdeexpediente, 
                            $operador, 
                            $id_escala
                        );

                        if ($stmt->execute() === false) {
                            die('Execute failed: ' . htmlspecialchars($stmt->error));
                        } else {
                            echo "Registro atualizado com sucesso.";
                        }

                        $stmt->close();
                        
                        // Preparando a segunda query
                        $query1 = "INSERT INTO registroescala (id_usuario, id_escala, id_contrato, id_local, horarioinicio, intervaloinicio, intervalofim, horariofim, dia, mes, ano, loghorario, logdia, logsemana, logmes, logano, operador) 
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

                        $stmt1 = $conn->prepare($query1);

                        if ($stmt1 === false) {
                            die('Erro na preparação da query1: ' . $conn->error);
                        }

                        $stmt1->bind_param("iiiisssssssssssss", $id_usuarioescalado, $id_escala, $id_contrato, $localdetrabalho, $inicioexpediente, $inicioIntervaloFormatado, $fimIntervaloFormatado, $fimdeexpediente, $escaladia, $escalames, $escalaano, $horario, $dia, $semana, $mes, $ano, $operador);

                        if (!$stmt1->execute()) {
                            die('Erro na execução da query1: ' . $stmt1->error);
                        }
                                                
                        $stmt1->close();

                        
                        ?> 

<?php

$msg = "Turno alterado com sucesso!";
echo "<script>alert( '$msg' );; window.location = '../pesquisaescala.php';</script>";                
?>




