<?php
include "sec_verifica.php";

    if (($nivel > 2 ) && ($tipo_vdl_licenca > 5)){
        $query_todos_clientes = "SELECT * FROM cliente";
            $resultado_todos_clientes = $conn->query($query_todos_clientes);
                while ($dados_todos_clientes = $resultado_todos_clientes->fetch_assoc()) {
                    $id_todos_clientes = $dados_todos_clientes['id'];
                    $nome_todos_clientes = $dados_todos_clientes['cnpj_cpf'];

                        echo '
                        <div class="selectgroup selectgroup-pills">
                            <label class="selectgroup-item">
                            <input
                                type="checkbox"
                                name="profissionais[]"
                                value="' . $id_todos_clientes . '"
                                class="selectgroup-input"
                                checked=""
                            />
                            <span class="selectgroup-button">' . $nome_todos_clientes . '</span>                                                                  
                        </div>
                    ';
                }        
    } else {
        $query_validacao_licenca = "SELECT * FROM licenca WHERE id_usuario = '$idlogado'";
            $resultado_validacao_licenca = $conn->query($query_validacao_licenca);
                if ($resultado_validacao_licenca->num_rows > 0){
                    $dados_validacao_licenca = $resultado_validacao_licenca->fetch_assoc();        
                    $id_validacao_licenca = $dados_validacao_licenca['id']; 
                    $id_cliente_validacao_licenca = $dados_validacao_licenca['id_cliente']; 
        
                    $query_coleta_usuarios = "SELECT * FROM licenca WHERE id_cliente = '$id_cliente_validacao_licenca'";
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
    }
?>