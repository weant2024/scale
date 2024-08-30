<?php
include "tudo_cima.php"; 
?>
            <!-- INICIA CONTEÚDO -->   
        
            <?php
              include "escala_semanal.php";
            ?>

            
              ID USUÁRIO: <?php echo "$idlogado </br>";?>
              NOME USUÁRIO: <?php echo "$nomelogado </br>";?>
              TIPO LICENCA USUÁRIO: <?php echo "$tipo_vdl_licenca </br>";?>
              ID CLIENTE: <?php echo "$id_cliente_vdl_licenca </br>";?>
              NOME CLIENTE: <?php echo "$nome_cliente_vdl_cliente </br>";?>  
                    

            <!-- FINALIZA CONTEÚDO -->  
          </div>
        </div>

<?php
include "tudo_baixo.php"; 
?>