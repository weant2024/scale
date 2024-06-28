<?php
// Consulta SQL usando MySQLi
$id = 1; // Supondo que você queira buscar o pagamento com id=1
$query = "SELECT * FROM pagamento WHERE id='$id'";
$result = $conn->query($query);

// Verificar se a consulta retornou resultados
if ($result->num_rows > 0) {
    // Extrair dados usando fetch_assoc()
    $dados5 = $result->fetch_assoc();

    // Atribuir valores às variáveis
    $idregistropagamento = $dados5['id'];
    $diasativo = $dados5['diasativo'];
    $hoariopag = $dados5['horario'];
    $diapag = $dados5['dia'];
    $semanapag = $dados5['semana'];
    $mespag = $dados5['mes'];
    $anopag = $dados5['ano'];

    // Convertendo o nome do mês para número
    switch ($mespag) {
        case "Janeiro":
            $mespag = 1;
            break;
        case "Fevereiro":
            $mespag = 2;
            break;
        case "Março":
            $mespag = 3;
            break;
        case "Abril":
            $mespag = 4;
            break;
        case "Maio":
            $mespag = 5;
            break;
        case "Junho":
            $mespag = 6;
            break;
        case "Julho":
            $mespag = 7;
            break;
        case "Agosto":
            $mespag = 8;
            break;
        case "Setembro":
            $mespag = 9;
            break;
        case "Outubro":
            $mespag = 10;
            break;
        case "Novembro":
            $mespag = 11;
            break;
        case "Dezembro":
            $mespag = 12;
            break;
        default:
            // Se o nome do mês não for reconhecido, deixe como está
            break;
    }
    
    $data = "$diapag-$mespag-$anopag"; 
    $dataexpirar = date('d/m/Y', strtotime("+$diasativo days",strtotime($data)));
    
    // Define os valores a serem usados
    $data_inicial = date("d/m/Y");
    $data_final = $dataexpirar;
    // Cria uma função que retorna o timestamp de uma data no formato DD/MM/AAAA
    function geraTimestamp($data) {
    $partes = explode('/', $data);
    return mktime(0, 0, 0, $partes[1], $partes[0], $partes[2]);
    }

    // Usa a função criada e pega o timestamp das duas datas:
    $time_inicial = geraTimestamp($data_inicial);
    $time_final = geraTimestamp($data_final);
    // Calcula a diferença de segundos entre as duas datas:
    $diferenca = $time_final - $time_inicial; // 19522800 segundos
    // Calcula a diferença de dias
     $dias = (int)floor( $diferenca / (60 * 60 * 24)); 

    // Exibir a data de expiração
    //echo "Data de expiração: $dataexpirar";
} else {
    echo "Nenhum resultado encontrado para o ID: $id";
}

// Fechar conexão
$conn->close();
?>