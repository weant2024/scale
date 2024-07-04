<?php
include "sec/config.php"; 
include "sec/sec_verifica.php";
if ( $nivel < 2 ) 
{
	header("Location: sem_acesso.php"); exit;
}
?>
<html lang="br">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Inicial</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport"/>
    <link rel="icon" href="assets/img/kaiadmin/favicon_1.ico" type="image/x-icon"/>

    <style>
    /* Estilos para a tabela */
    table.custom-table {
        width: 40%;
        border-collapse: collapse;
        margin: 0 auto; /* Centraliza a tabela na tela */
        margin-bottom: 20px; /* Espaçamento abaixo da tabela */
        background-color: #1f283e;
        color: #ffffff;
    }
    table.custom-table th, table.custom-table td {
        border: 1px solid #dddddd;
        padding: 8px;
        text-align: left;
    }
    table.custom-table th {
        background-color: #2a2f5b; /* Cor de fundo do cabeçalho */
        color: #ffffff;
    }

    /* Estilos para os inputs */
    table.custom-table input[type="text"] {
        width: 100%;
        padding: 8px;
        box-sizing: border-box;
        border: 1px solid #dddddd;
        background-color: #f0f0f0;
    }

    /* Estilos para as mensagens informativas */
    .info-message {
        border-radius: 8px;
        background-color: rgba(70,130,180,0.7);
        padding: 10px;
        margin-bottom: 20px; /* Espaçamento abaixo da mensagem */
        font-weight: bold;
        font-family: Verdana, Geneva, sans-serif;
        font-size: 14px;
        color: #ffffff;
        text-align: center;
    }
</style>



    <!-- Fonts and icons -->
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["assets/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/plugins.min.css" />
    <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />
    <link rel="stylesheet" href="assets/css/usuarios.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="assets/css/demo.css" />
  </head>
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a class="logo">
              <img
                src="assets/img/kaiadmin/logo_light.png"
                alt="navbar brand"
                class="navbar-brand"
                height="20"
              />
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
              <li class="nav-item active">
                <a href="inicial.php">
                  <i class="fas fa-home"></i>
                  <p>Inicial</p>
                </a>
              </li>

              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#escala">
                  <i class="fas fa-table"></i>
                  <p>Escala</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="escala">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="criarescala.php">
                        <span class="sub-item">Criar Scala</span>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <span class="sub-item">Editar Scala</span>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <span class="sub-item">Excluir Scala</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#observabilidade">
                  <i class="far fa-chart-bar"></i>
                  <p>Observabilidade</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="observabilidade">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="#">
                        <span class="sub-item">Zabbix</span>
                      </a>

                    </li>
                    <li>
                      <a href="#">
                        <span class="sub-item">Grafana</span>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <span class="sub-item">ITSM</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#configuracoes">
                  <i class="fas fa-bars"></i>
                  <p>Configurações</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="configuracoes">
                  <ul class="nav nav-collapse">
                    <li>
                      <a data-bs-toggle="collapse" href="#subnav1">
                        <span class="sub-item">Usuários</span>
                        <span class="caret"></span>
                      </a>
                      <div class="collapse" id="subnav1">
                        <ul class="nav nav-collapse subnav">
                          <li>
                            <a href="criarusuario.php">
                              <span class="sub-item">Criar Usuários</span>
                            </a>
                          </li>
                          <li>
                            <a href="pesquisarusuario.php">
                              <span class="sub-item">Editar Usuários</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li>
                      <a data-bs-toggle="collapse" href="#subnav2">
                        <span class="sub-item">Logs</span>
                        <span class="caret"></span>
                      </a>
                      <div class="collapse" id="subnav2">
                        <ul class="nav nav-collapse subnav">
                          <li>
                            <a href="registrousuario.php">
                              <span class="sub-item">Auditoria</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li>
                      <a href="#">
                        <span class="sub-item">Documentações</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>  

            </ul>
          </div>
        </div>
      </div>
      <!-- End Sidebar -->

      <div class="main-panel">
        <div class="main-header">
          <div class="main-header-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark">
              <a href="index.html" class="logo">
                <img
                  src="assets/img/kaiadmin/logo_light.svg"
                  alt="navbar brand"
                  class="navbar-brand"
                  height="20"
                />
              </a>
              <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                  <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                  <i class="gg-menu-left"></i>
                </button>
              </div>
              <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
              </button>
            </div>
            <!-- End Logo Header -->
          </div>
          <!-- Navbar Header -->
          <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
            <div class="container-fluid">
              <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                <li class="nav-item topbar-user dropdown hidden-caret">
                  <a
                    class="dropdown-toggle profile-pic"
                    data-bs-toggle="dropdown"
                    href="#"
                    aria-expanded="false"
                  >
                    <div class="avatar-sm">
                      <img
                        src="assets/img/profile.jpg"
                        alt="..."
                        class="avatar-img rounded-circle"
                      />
                    </div>
                    <span class="profile-username">                      
                      <span class="fw-bold"><?php echo $usuariologado ?></span>
                    </span>
                  </a>
                  <ul class="dropdown-menu dropdown-user animated fadeIn">
                    <div class="dropdown-user-scroll scrollbar-outer">
                      <li>
                        <a class="dropdown-item" href="#">Meu perfil</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                      </li>
                    </div>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>
          <!-- End Navbar -->
        </div>

        <div class="container">
          <div class="page-inner">  
            <!-- INICIA CONTEÚDO -->   

            <?php

              $id = $_GET['id'];

              $sqlc = "SELECT * FROM registrousuario WHERE id='$id'"; //faz a busca com as palavras enviadas
              $result = $conn->query($sqlc);
              $dados = $result->fetch_assoc();

              $login = $dados["login"];
              $senha = $dados["senha"];
              $nome = $dados["nome"];
              $cpf = $dados["cpf"];
              $nascimento = $dados["nascimento"];              
              $email = $dados["email"];
              $nivelusuario = $dados["nivel"];
              $ativousuario = $dados["ativo"];
              $gerasenha = $dados["gerasenha"];
              $horario = $dados["horario"];
              $dia = $dados["dia"];
              $semana = $dados["semana"];
              $mes = $dados["mes"];
              $ano =$dados["ano"];
              $operador = $dados["operador"];

            ?>

<div align="center" style="margin-top: 20px; background-color: #f0f0f0; padding: 20px;">
    <style>
        .custom-table {
            width: 100%;
            background-color: #1f283e;
            color: #ffffff;
            border-collapse: collapse;
        }
        .custom-table td {
            padding: 10px;
            text-align: right;
        }
        .custom-table td:first-child {
            background-color: #1f283e;
            width: 20%;
        }
        .custom-table td:nth-child(2) {
            background-color: #f0f0f0;
            color: #1f283e;
            width: 80%;
            padding: 10px;
        }
        .custom-table input[type="text"] {
            width: calc(100% - 16px);
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #dddddd;
            background-color: #f0f0f0;
        }
        .info-message {
            border-radius: 8px;
            background-color: rgba(70, 130, 180, 0.7);
            padding: 5px;
            margin-top: 10px;
            color: #ffffff;
            font-weight: bold;
            font-family: Verdana, Geneva, sans-serif;
            font-size: 12px;
        }
        .info-message b {
            color: #ffffff;
        }
    </style>

    <table border="1" width="40%" class="custom-table">
        <tbody>
            <tr>
                <td width="20%"><font color="#FFFFFF"><b>ID</b></font></td>
                <td width="80%" align="left"><?php echo $dados['id_usuario']; ?></td>
            </tr>
            <tr>
                <td width="20%"><font color="#FFFFFF"><b>Login</b></font></td>
                <td width="80%" align="left"><input type="text" readonly name="login" size="50" id="login" value="<?php echo $dados["login"]; ?>"></td>
            </tr>
            <tr>
                <td width="20%"><font color="#FFFFFF"><b>Senha</b></font></td>
                <td width="80%" align="left"><?php echo $criptografada; ?></td>
            </tr>
            <tr>
                <td width="20%"><font color="#FFFFFF"><b>Nome</b></font></td>
                <td width="80%" align="left"><input type="text" readonly name="nome" size="50" id="nome" value="<?php echo $dados["nome"]; ?>"></td>
            </tr>
            <tr>
                <td width="20%"><font color="#FFFFFF"><b>RG</b></font></td>
                <td width="80%" align="left"><input type="text" readonly name="cpf" size="50" id="rg" value="<?php echo $dados["cpf"]; ?>"></td>
            </tr>
            <tr>
                <td width="20%"><font color="#FFFFFF"><b>Email</b></font></td>
                <td width="80%" align="left"><input type="text" readonly name="email" size="50" id="email" value="<?php echo $dados["email"]; ?>"></td>
            </tr>
            <tr>
                <td width="20%"><font color="#FFFFFF"><b>Telefone</b></font></td>
                <td width="80%" align="left"><input type="text" readonly name="telefone" size="50" id="telefone" class="inputcssn" title="Digite o celular" maxlength="16" onKeyPress="Mascaracelular(this); return SomenteNumero(event);" value="<?php echo $dados["telefone"]; ?>"></td>
            </tr>
            <tr>
                <td width="20%"><font color="#FFFFFF"><b>Nível</b></font></td>
                <td width="80%" align="left">
                    <?php
                        if ($nivelusuario == 1) {
                            echo "Usuário";
                        } elseif ($nivelusuario == 2) {
                            echo "Gestor";
                        } elseif ($nivelusuario == 3) {
                            echo "Admin";
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td width="20%"><font color="#FFFFFF"><b>Status</b></font></td>
                <td width="80%" align="left">
                    <?php
                        if ($ativousuario == 1) {
                            echo "Ativo";
                        } elseif ($ativousuario == 0) {
                            echo "Desativado";
                        }
                    ?>
                </td>
            </tr> 
        </tbody>
    </table>

    <?php
    if ($gerasenha == 1) {
        echo "<div class='info-message'>FOI GERADA UMA NOVA SENHA PELO OPERADOR</div>";
    } elseif ($gerasenha == 2) {
        echo "<div class='info-message'>FOI GERADA UMA NOVA SENHA PELO USUÁRIO</div>";
    } elseif ($gerasenha == 3) {
        echo "<div class='info-message'>FOI CRIADO O USUÁRIO</div>";
    } elseif ($gerasenha == 4) {
        echo "<div class='info-message'>FOI ALTERADO O USUÁRIO</div>";
    }
    ?>

    <table width="640px" cellpadding="2px" cellspacing="2px" border="0">
        <tr>
            <td align="left"><b>Data:</b><?php echo " $horario, $dia de $mes de $ano";?></td>
            <td align="right"><b>Operador:</b><?php echo " $operador";?></td>
        </tr> 	
    </table>
</div>




            <!-- FINALIZA CONTEÚDO -->  
          </div>
        </div>

        <footer class="footer">
          <div class="container-fluid d-flex justify-content-between">
            <div class="copyright">
              2024, v1.0.0
            </div>
            <div>
              Desenvolvido por
              <a target="_blank" href="index.php">WeAnt</a>.
            </div>
          </div>
        </footer>
      </div>

    </div>
    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Chart JS -->
    <script src="assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
    <script src="assets/js/plugin/jsvectormap/world.js"></script>

    <!-- Sweet Alert -->
    <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Kaiadmin JS -->
    <script src="assets/js/kaiadmin.min.js"></script>
    
  </body>
</html>
