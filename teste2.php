<?php

include "sec/config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {    

    $contratos = isset($_POST['contratos']) ? $_POST['contratos'] : [];

        foreach ($contratos as $contrato) {
            $contratoLimpo = htmlspecialchars(trim($contrato));

            echo "CONTRATO: $contratoLimpo </br>";

        }
        

    $profissionais = isset($_POST['profissionais']) ? $_POST['profissionais'] : [];

        foreach ($profissionais as $profissional) {
            $profissionalLimpo = htmlspecialchars(trim($profissional));

            echo "PROFISSIONAL: $profissionalLimpo </br>";
            
        }
        
} else {
    echo "Nenhum dado foi enviado.";
}

?>