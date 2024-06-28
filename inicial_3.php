<!DOCTYPE html>
<?php
include "sec/config.php"; 
include "sec/sec_verifica.php";
if ( $nivel < 3 ) 
{
	header("Location: sec/sec_tipo.php"); exit;
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escala Noc - Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link rel="stylesheet" href="css/home.css">
</head>

<body>

<div class="container-fluid">
        <div class="row">
            <div class="col-md-3 sidebar" id="sidebar">
                <div class="user-info">
                    <!-- Adicione nome de usuário e imagem aqui -->
                </div>
                <ul>
                    <li><a href="usuario.html"><i class="fas fa-user"></i> Usuário</a></li>
                    <li><a href="editar_escala.html"><i class="fas fa-calendar-alt"></i> Editar escala</a></li>
                    <li><a href="nova_escala.html"><i class="fas fa-plus"></i> Nova escala</a></li>
                    <li><a href="calendario.html"><i class="fas fa-calendar"></i> Calendário</a></li>
                    <li><a href="funcionarios.html"><i class="fas fa-users"></i> Funcionários</a></li>
                    <li><a href="relatorios.html"><i class="fas fa-file-alt"></i> Relatórios</a></li>
                    <li><a href="auditoria.html"><i class="fas fa-search"></i> Auditoria</a></li>
                    <li><a href="configuracao.html"><i class="fas fa-cog"></i> Configuração</a></li>
                    <li><a href="sair.html"><i class="fas fa-sign-out-alt"></i> Sair</a></li>
                </ul>
            </div>
            <main class="col-md-9">
                <div class="container">
                    <h2>Tabela de Escalas</h2>
                    <table id="table-escalas" class="table table-striped table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>Horários</th>
                                <th>Segunda</th>
                                <th>Terça</th>
                                <th>Quarta</th>
                                <th>Quinta</th>
                                <th>Sexta</th>
                                <th>Sábado</th>
                                <th>Domingo</th>
                            </tr>
                        </thead>
                        <tbody id="escalas-body">
                            <!-- Conteúdo da tabela será preenchido dinamicamente -->
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>

<a href="usuario/inicialusuario.php">Inicial Usuário</a>

</body>
</html>