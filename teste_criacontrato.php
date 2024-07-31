<?php 
include "tudo_cima.php";
if ($nivel < 2) {
    header("Location: sem_acesso.php"); 
    exit;
}
?>
<style>
    .form-check-input:checked + .form-check-label {        
        font-weight: bold; /* Opcional: Adicione outras estilizações */
    }
</style>

<?php
if (($nivel > 2 ) && ($tipo_vdl_licenca > 5)) {
?>
<form method="POST" action="" id="clienteForm">
    <div class="form-group">
        <label class="form-label">Vincule ao cliente:</label> </br>   
        <div class="d-flex">         
<?php            
                // Consulta de clientes              
                $query_todos_clientes = "SELECT * FROM cliente";
                    $resultado_todos_clientes = $conn->query($query_todos_clientes);
                    while ($dados_todos_clientes = $resultado_todos_clientes->fetch_assoc()) {
                        $id_todos_clientes = $dados_todos_clientes['id'];
                        $nome_todos_clientes = $dados_todos_clientes['cnpj_cpf'];

                        echo '
                            <div class="form-check">
                               <input class="form-check-input" type="radio" name="cliente" id="cliente' . $id_todos_clientes . '" value="' . $id_todos_clientes . '" ' . (isset($_POST['cliente']) && $_POST['cliente'] == $id_todos_clientes ? 'checked' : '') . ' onclick="document.getElementById(\'clienteForm\').submit();"/>
                                <label class="form-check-label" for="cliente' . $id_todos_clientes . '">' . $nome_todos_clientes . '</label>
                            </div>
                        ';
                    }       
               
?>
        </div>
    </div>

    <div id="selected-clientes">
        <div class="form-group">
            <label class="form-label">Vincule ao(s) profissional(is):</label> </br>
            <?php
            // Verificar se o formulário foi submetido
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['cliente'])) {
                $id_todos_clientes = $_POST['cliente'];

                // Consulta de usuarios
                $query_coleta_usuarios = "SELECT * FROM licenca WHERE id_cliente = '$id_todos_clientes'";
                $resultado_coleta_usuarios = $conn->query($query_coleta_usuarios);
                while ($dados_coleta_usuarios = $resultado_coleta_usuarios->fetch_assoc()) {
                    $id_coleta_usuarios = $dados_coleta_usuarios['id_usuario'];                    

                    $query_validacao_usuario = "SELECT * FROM usuario WHERE id = '$id_coleta_usuarios'";
                    $resultado_validacao_usuario = $conn->query($query_validacao_usuario);
                    while ($dados_validacao_usuario = $resultado_validacao_usuario->fetch_assoc()) {
                        $id_validacao_usuario = $dados_validacao_usuario['id'];
                        $login_validacao_usuario = $dados_validacao_usuario['login'];

                        echo '
                        <div class="selectgroup selectgroup-pills">
                            <label class="selectgroup-item">
                            <input
                                type="checkbox"
                                name="profissionais[]"
                                value="' . $id_validacao_usuario . '"
                                class="selectgroup-input"
                                checked=""
                            />
                            <span class="selectgroup-button">' . $login_validacao_usuario . '</span>                                                                  
                        </div>
                        ';
                    }    
                }
            }
            ?>
        </div>
    </div>
</form>
<?php
 } else {
    echo "Não";
 }
?>

<?php
include "tudo_baixo.php";
?>
