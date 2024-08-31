<?php
    include "config.php";
    include "sec_verifica.php";
    if ( $nivel < 2 ) 
    {
        header("Location: sem_acesso.php"); exit;
    }
        // Verifica se as datas foram passadas na URL
        if (isset($_POST['dates'])) {
            // Sanitiza e obtém as datas
            $datesStr = htmlspecialchars($_POST['dates']);
            $dates = explode(',', $datesStr);
            
            $todas_as_datas_selecionadas = $_POST['dates'];

            // Exibe as datas selecionadas                                    
            foreach ($dates as $date) {             
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


                    $query_escalahorario = "SELECT DISTINCT e.id, e.id_usuario, e.id_afastamento, e.horarioinicio, e.horariofim, e.id_local, e.dia, e.mes, e.ano, r.id_usuario, r.id_cliente
                    FROM escala e
                    JOIN relacao_cliente r ON e.id_usuario = r.id_usuario
                    WHERE r.id_cliente = $id_cliente_vdl_licenca
                    AND dia='$escaladia' AND mes='$escalames' AND ano='$escalaano'"; //faz a busca com as palavras enviadas
                            $resultado_escalahorario = $conn->query($query_escalahorario);   
                    


                                
                    if (@$resultado_escalahorario->num_rows > 0) {     
                                                
                        while ($dados_escalahorario = $resultado_escalahorario->fetch_assoc()) {

                            @$id_escalahorario = $dados_escalahorario['id'];
                            @$login_escalahorario = $dados_escalahorario['id_usuario']; 
                            @$login_escalalocaldetrabalho = $dados_escalahorario['id_local'];
                            @$login_escalainiciodeexpediente = $dados_escalahorario['horarioinicio'];
                            @$login_escalainiciodeintervaloexpediente = $dados_escalahorario['intervaloinicio'];
                            @$login_escalafimdeintervaloexpediente = $dados_escalahorario['intervalofim']; 
                            @$login_escalafimdeexpediente = $dados_escalahorario['horariofim']; 
                            @$login_escalaidafastamento = $dados_escalahorario['id_afastamento'];

                            $query_usuarioescalado = "SELECT * FROM usuario WHERE id='$login_escalahorario'";
                                $resultado_usuarioescalado = $conn->query($query_usuarioescalado);
                                    $dados_usuarioescalado = $resultado_usuarioescalado->fetch_assoc();
                                        @$nome_usuarioescalado = $dados_usuarioescalado['nome'];
                                        @$login_usuarioescalado = $dados_usuarioescalado['login'];   
                            
                            $query_localescalado = "SELECT * FROM local WHERE id='$login_escalalocaldetrabalho'";
                                $resultado_localescalado = $conn->query($query_localescalado);
                                    $dados_localescalado = $resultado_localescalado->fetch_assoc();
                                        @$nome_localescalado = $dados_localescalado['nome'];

                            if ($login_escalaidafastamento == 0) {
                                        
?>
                                <a href='editarturno.php?id=<?php echo "$id_escalahorario"; ?>'>
<?php
                            
                                echo "Nome: $nome_usuarioescalado </br>";  
                                echo "Data: $escaladia/$escalames/$escalaano </br>";   
                                echo "Início de Expediente: $login_escalainiciodeexpediente</br>"; 
                                echo "Início de Intervalo: $login_escalainiciodeintervaloexpediente</br>"; 
                                echo "Fim de Intervalo: $login_escalafimdeintervaloexpediente</br>"; 
                                echo "Fim de Expediente: $login_escalafimdeexpediente</br>"; 
                                echo "Local: $nome_localescalado</br> </br>";
                            }
                            else {
?>
                                    
<?php
                            $query_afastamento = "SELECT * FROM afastamento WHERE id='$login_escalaidafastamento'";
                            $resultado_afastamento = $conn->query($query_afastamento);
                                // $dados_afastamento = $resultado_afastamento->fetch_assoc();
                                //     $motivo_afastamento = $dados_afastamento['motivo'];
                                //     $datainicial_afastamento = $dados_afastamento['datainicial'];
                                //     $datafinal_afastamento = $dados_afastamento['datafinal'];
?>
                                    <table class="legenda">                
                                    <tr>
                                        <?php 
                                        echo "<th>Nome</th>";
                                        echo "<th>Motivo</th>";
                                        echo "<th>Data Inicial</th>";
                                        echo "<th>Data Final</th>";
                                        ?>          
                                    </tr>
                                    <?php      
                                    while ($dados_afastamento = $resultado_afastamento->fetch_assoc()) {                                 
                                    ?>              
                                    <tr>  
                                        <?php    
                                        echo '<td><a href="editarcontrato.php?id=' . $dados_usuarioescalado['id'] . '">' . $dados_usuarioescalado['nome'] . '</a></td>';
                                        echo '<td>' . $dados_afastamento['motivo'] . '</td>';
                                        echo '<td>' . $dados_afastamento['datainicial'] . '</td>';
                                        echo '<td>' . $dados_afastamento['datafinal'] . '</td>';
                                        ?>                      
                                    </tr> 
                                    <?php               
                                    }
                                    ?>  
                                    </table>
                                    <div class="record-count" align="right">
                                    <?php 
                                    $num_rows = $resultado_afastamento->num_rows;
                                    echo "<p><b>$num_rows registros</b></p>";
                                    ?>
                                    </div>                                                          
                                    
<?php

                            }
?>
                            </a>
<?php
                        }                                                            
                    }
                }    
            }    
        } 
?>           