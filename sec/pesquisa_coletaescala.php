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


                    $query_escalahorario = "SELECT * FROM escala WHERE dia='$escaladia' AND mes='$escalames' AND ano='$escalaano'"; //faz a busca com as palavras enviadas
                            $resultado_escalahorario = $conn->query($query_escalahorario);   
                    


                                
                    if (@$resultado_escalahorario->num_rows > 0) {     
                        echo "</br> $escaladia/$escalames/$escalaano existem $resultado_escalahorario->num_rows turnos </br></br>";  
                        
                        while ($dados_escalahorario = $resultado_escalahorario->fetch_assoc()) {

                            @$id_escalahorario = $dados_escalahorario['id'];
                            @$login_escalahorario = $dados_escalahorario['id_usuario']; 
                            @$login_escalalocaldetrabalho = $dados_escalahorario['id_local'];
                            @$login_escalainiciodeexpediente = $dados_escalahorario['horarioinicio'];
                            @$login_escalainiciodeintervaloexpediente = $dados_escalahorario['intervaloinicio'];
                            @$login_escalafimdeintervaloexpediente = $dados_escalahorario['intervalofim']; 
                            @$login_escalafimdeexpediente = $dados_escalahorario['horariofim']; 

                            $query_usuarioescalado = "SELECT * FROM usuario WHERE id='$login_escalahorario'";
                                $resultado_usuarioescalado = $conn->query($query_usuarioescalado);
                                    $dados_usuarioescalado = $resultado_usuarioescalado->fetch_assoc();
                                        @$nome_usuarioescalado = $dados_usuarioescalado['nome'];
                                        @$login_usuarioescalado = $dados_usuarioescalado['login'];   
                            
                            $query_localescalado = "SELECT * FROM local WHERE id='$login_escalalocaldetrabalho'";
                                $resultado_localescalado = $conn->query($query_localescalado);
                                    $dados_localescalado = $resultado_localescalado->fetch_assoc();
                                        $nome_localescalado = $dados_localescalado['nome'];
                                        
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
?>
                            </a>
<?php
                        }                                                            
                    }
                }    
            }    
        } 
?>           