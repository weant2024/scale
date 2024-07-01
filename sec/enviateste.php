<?php
// Verifica se as datas foram passadas na URL
if (isset($_GET['dates'])) {
    // Sanitiza e obtém as datas
    $datesStr = htmlspecialchars($_GET['dates']);
    $dates = explode(',', $datesStr);

    // Exibe as datas selecionadas
    echo "<h1>Datas Selecionadas:</h1>";
    foreach ($dates as $date) {
        echo "<p>$date</p>";
    }
}    
$totalDates = count($dates);

echo "$totalDates datas selecionadas";
?>    