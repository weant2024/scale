<?php
include "config.php";
include "sec_verifica.php";
if ( $nivel < 2 ) 
{
	header("Location: sec_tipo.php"); exit;
}

$id_cliente = $_GET['cliente'];

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receber e sanitizar o nome do contrato
    $contrato = isset($_POST['contrato']) ? htmlspecialchars($_POST['contrato']) : '';

     // Query para contrato
     $query_contrato = "INSERT INTO contrato (nome) 
     VALUES (?)";
     
         $stmt_contrato = $conn->prepare($query_contrato);
     
             if ($stmt_contrato === false) {
                 die('Erro na preparação da query: ' . $conn->error);
             }
     
                 $stmt_contrato->bind_param("s", $contrato);
     
                     if (!$stmt_contrato->execute()) {
                         die('Erro na execução da query: ' . $stmt_contrato->error);
                     }
 
                         $retorno_idcontrato = $stmt_contrato->insert_id;

    // Receber os profissionais selecionados
    $profissionais = isset($_POST['profissionais']) ? $_POST['profissionais'] : [];

    // Sanitizar e processar os IDs dos profissionais
    $profissionais = array_map('intval', $profissionais);

    // Receber os locais dinamicamente
    $locais = [];
    foreach ($_POST as $key => $value) {
        if (strpos($key, 'local') === 0) {
            $locais[$key] = htmlspecialchars($value);
        }
    }


    $query_validacao_licenca = "SELECT * FROM licenca WHERE id_usuario = '$id'";
    $resultado_validacao_licenca = $conn->query($query_validacao_licenca);
        $dados_validacao_licenca = $resultado_validacao_licenca->fetch_assoc();  
            $id_cliente_validacao_licenca = $dados_validacao_licenca['id_cliente']; 
       
    // Query para relação de profissionais x cliente x contrato    
    foreach ($profissionais as $profissional) {

        $query_ricc = "INSERT INTO relacao_cliente (id_cliente, id_contrato, id_usuario) 
            VALUES (?, ?, ?)";
            
                $stmt_ricc = $conn->prepare($query_ricc);
            
                    if ($stmt_ricc === false) {
                        die('Erro na preparação da query: ' . $conn->error);
                    }
            
                        $stmt_ricc->bind_param("iii", $id_cliente_validacao_licenca, $retorno_idcontrato, $profissional);
            
                            if (!$stmt_ricc->execute()) {
                                die('Erro na execução da query: ' . $stmt_ricc->error);
                            }
                            
    }

    
    foreach ($locais as $local => $valor_local) {

        // Query para contrato
        $query_local = "INSERT INTO local (nome, id_contrato) 
        VALUES (?,?)";
        
            $stmt_local = $conn->prepare($query_local);
        
                if ($stmt_local === false) {
                    die('Erro na preparação da query: ' . $conn->error);
                }
        
                    $stmt_local->bind_param("si", $valor_local, $retorno_idcontrato);
        
                        if (!$stmt_local->execute()) {
                            die('Erro na execução da query: ' . $stmt_local->error);
                        }
    }

    $msg = "Contrato criado com sucesso!";
    echo "<script>alert( '$msg ' );; window.location = '../criarcontrato.php';</script>";
}

?>