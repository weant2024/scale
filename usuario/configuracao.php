<!DOCTYPE html>
<?php
include "../sec/config.php"; 
include "../sec/sec_verifica.php";
if ( $nivel < 3 ) 
{
	header("Location: ../sec/sec_tipo.php"); exit;
}
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurações</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f1f1f1;
        }

        .container {
            display: flex;
        }

        .sidebar {
            width: 250px;
            background-color: white;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
            padding: 20px 0;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar li {
            padding: 15px 20px;
            cursor: pointer;
        }

        .sidebar li:hover {
            background-color: #f1f1f1;
        }

        .main-content {
            flex: 1;
            padding: 20px;
            background-color: #fff;
        }

        .search-bar {
            display: flex;
            justify-content: center;
            padding: 10px 0;
        }

        .search-bar input {
            width: 100%;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        .settings-section {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .settings-section h2 {
            margin-top: 0;
        }

        .user-info {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .user-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #d9534f;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            margin-right: 20px;
        }

        .user-details {
            flex: 1;
        }

        .user-name {
            margin: 0;
            font-weight: bold;
        }

        .user-email {
            margin: 5px 0 0 0;
            color: #777;
        }

        .sync-button {
            background-color: #4285f4;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        .sync-button:hover {
            background-color: #357ae8;
        }

        .settings-links {
            list-style: none;
            padding: 0;
        }

        .settings-links li {
            padding: 10px 0;
            border-bottom: 1px solid #f1f1f1;
            cursor: pointer;
        }

        .settings-links li:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <ul>
                <li><a href="form.html"><i class="fas fa-user"></i> Usuários</a></li>
            </ul>
        </aside>
        <main class="main-content">
            <section class="settings-section">
                <div class="user-info">
                    <div class="user-avatar">F</div>
                    <div class="user-details">
                        <p class="user-name"><?php echo $nomelogado ?></p>
                        <p class="user-email">Conectado como <?php echo $usuariologado ?></p>
                    </div>
                </div>
                <ul class="settings-links">
                    <p><strong>Nome:</strong> <?php echo $nomelogado ?></p>
                    <p><strong>Login:</strong> <?php echo $usuariologado?></p>
                    <p><strong>CPF: (!corrigir código e BD porque está MATRICULA!)</strong> <?php echo $matriculalogado ?></p>
                    <p><strong>Telefone:</strong> <?php echo $telefonelogado ?></p>
                    <p><strong>Endereço:</strong> (!Verificar necessidade!)</p>
                    <p><strong>Email:</strong> <?php echo $emaillogado ?></p>
                    <p><strong>Data de Nascimento:</strong> (!Verificar necessidade!)</p>
                </ul>
            </section>
        </main>
    </div>
    <script>
        // This script is currently empty, but you can add interactivity as needed.
    </script>
</body>
</html>



