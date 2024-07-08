<?php
    $buscadomingousuario = "SELECT *
        FROM afastamento
        WHERE id_usuario = 1 AND motivo = 'Folga'
        AND MONTH(STR_TO_DATE(datainicial, '%d/%m/%Y')) = MONTH(CURDATE())
        AND EXISTS (
            SELECT 1
            FROM afastamento a
            WHERE a.id_usuario = afastamento.id_usuario
                AND STR_TO_DATE(a.datainicial, '%d/%m/%Y') <= STR_TO_DATE(afastamento.datafinal, '%d/%m/%Y')
                AND STR_TO_DATE(a.datafinal, '%d/%m/%Y') >= STR_TO_DATE(afastamento.datainicial, '%d/%m/%Y')
                AND (DAYOFWEEK(STR_TO_DATE(a.datainicial, '%d/%m/%Y')) = 1 OR DAYOFWEEK(STR_TO_DATE(a.datafinal, '%d/%m/%Y')) = 1)
        );";
    $querydomingousuario = $conn->query($buscadomingousuario);  
    $dadosdomingousuario = $querydomingousuario->fetch_assoc();
?>
<div class="alertaescalaverde">
    <?php    
        if (@$querydomingousuario->num_rows < 1) {                  
            echo ".Ainda não teve um Domingo de folga no mês atual</br>";                                          
        }
    ?>
</div>