<?php 
include "tudo_cima.php";
if ($nivel < 2) {
    header("Location: sem_acesso.php"); exit;
}
?>

<p align="center">
 <b>PESQUISAR AFASTAMENTO</b>
</p>

<style>
  .container {
    flex: 1;
    width: 80%;
    margin: auto;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
  }

  .search-form {
    margin-bottom: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .search-form select, .search-form input[type="text"], .search-form input[type="submit"] {
    padding: 10px;
    margin: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
  }

  .search-form select {
    width: 150px;
  }

  .search-form input[type="text"] {
    flex: 1;
  }

  .search-form input[type="submit"] {
    background-color: #1f283e;
    color: white;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  .search-form input[type="submit"]:hover {
    background-color: #6861CE;
  }

  table.legenda {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
  }

  table.legenda th, table.legenda td {
    border: 1px solid #ddd;
    padding: 12px;
    text-align: left;
  }

  table.legenda th {
    background-color: #1f283e;
    color: white;
  }

  table.legenda tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  table.legenda tr:nth-child(odd) {
    background-color: #ffffff;
  }

  .record-count {
    text-align: right;
    margin-top: 10px;
  }
</style>

<div class="search-form">
  <form action="" method="post" style="display: flex; width: 100%;">
    <select name="filtro">
      <option value="nome">Nome</option>  
      <option value="motivo">Motivo</option>     
      <option value="data">Data</option>   
    </select>                
    <input type="text" name="palavra" id="palavra"/> 
    <input type="submit" Value="Pesquisar"/>
  </form>               
</div>

<?php
$filtro = isset($_POST['filtro']) ? $_POST['filtro'] : '';
$busca = isset($_POST['palavra']) ? $_POST['palavra'] : '';

// Escapa as variáveis para evitar injeção de SQL
$filtro = $conn->real_escape_string($filtro);
$busca = $conn->real_escape_string($busca);

// Função para converter data do formato DD/MM/AAAA para AAAA-MM-DD
function formatDate($date) {
  $parts = explode('/', $date);
  if (count($parts) == 3) {
    return $parts[2] . '-' . $parts[1] . '-' . $parts[0]; // Converte para YYYY-MM-DD
  }
  return '';
}

// Base da consulta para obter usuários com afastamento
$busca_query = "SELECT u.*, a.motivo, a.datainicial, a.datafinal
                FROM usuario u
                JOIN afastamento a ON u.id = a.id_usuario";

// Adiciona a condição de filtro, se necessário
if (!empty($filtro) && !empty($busca)) {
  if ($filtro == 'nome') {
    $busca_query .= " WHERE u.nome LIKE '%$busca%'";
  } elseif ($filtro == 'motivo') {
    $busca_query .= " WHERE a.motivo LIKE '%$busca%'";
  } elseif ($filtro == 'data') {
    $data_formatada = formatDate($busca);
    if ($data_formatada) {
      $busca_query .= " WHERE STR_TO_DATE('$data_formatada', '%Y-%m-%d') BETWEEN STR_TO_DATE(a.datainicial, '%d/%m/%Y') AND STR_TO_DATE(a.datafinal, '%d/%m/%Y')";
    }
  }
}

$busca_query .= " ORDER BY u.id DESC";

$result = $conn->query($busca_query);

if ($result->num_rows < 1) {
  echo "<p>Nenhum registro encontrado.</p>";
} else {
?>
<div id="croll-container">
  <table class="legenda">
    <tr>
      <th>Nome</th>
      <th>Motivo</th>
      <th>Data</th>
    </tr>
    <?php
    while ($dados = $result->fetch_assoc()) {
      $query_afastamento = "SELECT * FROM afastamento WHERE id_usuario = " . $dados['id'] . "";
        $result_afastamento = $conn->query($query_afastamento);
          $dados_afatasmento = $result_afastamento->fetch_assoc();

      echo '<tr>';
      echo '<td><a href="editarafastamento.php?id=' . $dados_afatasmento['id'] . '">' . $dados['nome'] . '</a></td>';
      echo '<td>' . $dados['motivo'] . '</td>';
      echo '<td>' . $dados['datainicial'] . ' até ' . $dados['datafinal'] . '</td>';
      echo '</tr>';
    }
    ?>
  </table>
</div>

<div class="record-count">
  <?php 
  $num_rows = $result->num_rows;
  echo "<p><b>$num_rows registros</b></p>";
  ?>
</div>

<?php
} 
?>

<!-- FINALIZA CONTEÚDO -->  

<?php
include "tudo_baixo.php";
?>
