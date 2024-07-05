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

    <!-- JS Files -->
    <script src="assets/js/usuarios.js"></script>

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

              $sqlc = "SELECT * FROM usuario WHERE id='$id'"; //faz a busca com as palavras enviadas
              $query = $conn->query($sqlc);
              $dados = $query->fetch_assoc();

              $login = $dados["login"];           
              $nome = $dados["nome"];
              $cpf = $dados["cpf"];
              $telefone = $dados["telefone"];
              $nascimento = $dados["nascimento"];  
              $genero = $dados["genero"];             
              $email = $dados["email"];
              $cargo = $dados["cargo"];
              $departamento = $dados["departamento"];
              $nivelusuario = $dados["nivel"];
              $ativousuario = $dados["ativo"];
              $horario = $dados["horario"];
              $dia = $dados["dia"];
              $semana = $dados["semana"];
              $mes = $dados["mes"];
              $ano = $dados["ano"];
              $operador = $_SESSION["UsuarioLogin"];

              $sqlc1 = "SELECT * FROM usuario WHERE operador='$operador'"; //faz a busca com as palavras enviadas
              $query1 = $conn->query($sqlc1);
              $dados1 = $query1->fetch_assoc();
            ?>

            <form method="POST" action='sec/atualizarusuario.php?id=<?php echo $dados['id']; ?>)'>
                <div class="form-group">
                    <label for="id"><b>ID:</b></label>
                    <?php echo $id;?>
                </div>

                <div class="form-group">
                    <label for="login"><b>Login:</b></label>
                    <input type="text" name="login" id="login" class="form-control" Value="<?php echo $login;?>"/>
                </div>

                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" class="form-control" Value="<?php echo $nome;?>"/>
                </div>

                <div class="form-group">
                    <label for="cpf">CPF:</label>
                    <input type="text" name="cpf" id="cpf" class="form-control" Value="<?php echo $cpf;?>"/>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" name="email" id="email" class="form-control" Value="<?php echo $email;?>"/>
                </div>

                <div class="form-group">
                    <label for="telefone">Celular:</label>
                    <input type="text" name="telefone" id="telefone" class="form-control" placeholder="xx xxxxx-xxxx" Value="<?php echo $telefone;?>"/>
                </div>

                <div class="form-group">
                    <label for="nascimento">Data de Nascimento:</label>
                    <input type="text" name="nascimento" id="nascimento" class="form-control" Value="<?php echo $nascimento;?>"/>
                </div>

                <div class="form-group">
                    <label for="genero">Gênero:</label>
                    <select class="form-select form-control" id="defaultSelect" name="genero">
                    <option <?php if ( $genero == "Masculino" ) 
                            {
                            echo "selected";
                            }
                            else 
                            {
                            echo "";
                            }
                            ?> value="Masculino">Masculino</option>
                    <option <?php if ( $genero == "Feminino" ) 
                            {
                            echo "selected";
                            }
                            else 
                            {
                            echo "";
                            }
                            ?> value="Feminino">Feminino</option>
                    <option <?php if ( $genero == "Não definido" ) 
                            {
                            echo "selected";
                            }
                            else 
                            {
                            echo "";
                            }
                            ?> value="Não definido">Não definido</option> 
                    </select>  
                </div>

                <div class="form-group">
                    <label for="nivelusuario">Nível:</label>
                    <select name="nivelusuario" id="nivelusuario" class="form-control">
                    <option <?php if ( $nivelusuario == "1" ) 
                            {
                            echo "selected";
                            }
                            else 
                            {
                            echo "";
                            }
                            ?> value="1">Usuário</option>
                    <option <?php if ( $nivelusuario == "2" ) 
                            {
                            echo "selected";
                            }
                            else 
                            {
                            echo "";
                            }
                            ?> value="2">Gestor</option>
                    <option <?php if ( $nivelusuario == "3" ) 
                            {
                            echo "selected";
                            }
                            else 
                            {
                            echo "";
                            }
                            ?> value="3">Admin</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="ativousuario">Status:</label>
                    <select name="ativousuario" id="ativousuario" class="form-control">
                    <option <?php if ( $ativousuario == "1" ) 
                            {
                            echo "selected";
                            }
                            else 
                            {
                            echo "";
                            }
                            ?> value="1">Ativo</option>
                    <option <?php if ( $ativousuario == "0" ) 
                            {
                            echo "selected";
                            }
                            else 
                            {
                            echo "";
                            }
                            ?> value="0">Desativado</option>
                    </select>
                </div> 

                    <div class="form-group" align="center">                                   
                      <button class="botao" type="submit">EDITAR USUÁRIO</button>
            </form>
                      <button class="botao" onclick="redirectTo('sec/enviarsenhausuario.php', <?php echo $dados['id']; ?>)">GERAR NOVA SENHA</button>
                      <button class="botao" onclick="redirectTo('afastamentousuario.php', <?php echo $dados['id']; ?>)">CADASTRAR AFASTAMENTO</button>                         
                    </div>
            </div>

	            <br />

                <b>HISTÓRICO DO USUÁRIO</b>
            
              <table class="legenda" width="100%" border="0">
                <tr>	
                  <td><b>Operador</b></td> 			
                  <td><b>Horário</b></td>
                  <td><b>Dia</b></td>
                  <td><b>Mês</b></td>
                  <td><b>Ano</b></td>                  
                </tr>
                <?php

                  $search = @$_POST['search'];
                  $search1 = @$_POST['search1'];
                  $search2 = @$_POST['search2'];


                  $busca_query1 = "SELECT * FROM registrousuario WHERE login='$login' ORDER BY id DESC";//faz a busca com as palavras enviadas
                  $result = $conn->query($busca_query1);


                  if (empty($result)) { //Se nao achar nada, lança essa mensagem
                      echo "Nenhum registro encontrado.";
                  }

                  // quando existir algo em '$busca_query' ele realizará o script abaixo.
                  while ($dados1 = $result->fetch_assoc()) {

                ?>

                <tr>		
                  <td><?php echo '<a href="exibirregistrousuario.php?id=' . $dados1['id'] . '"> '. $dados1['operador'] . '<br /></a>';?></td>       
                  <td><?php echo "$dados1[horario]";?></td>
                  <td><?php echo "$dados1[dia]";?></td>	
                  <td><?php echo "$dados1[mes]";?></td>
                  <td><?php echo "$dados1[ano]";?></td>                  	
                </tr>
                <?php
                }
                ?>
                <br /> 
              </table>              
            
            <?php
            if (@$result->num_rows > 0) { 
            ?> 
            <table class="legenda" width="100%">
              <tr>
                <td align="right">
                  <?php 
                    $num_rows = @$result->num_rows;
                    echo "<b>$num_rows registros</b>";
                  ?>
                </td>
              </tr>  
            </table>
            <?php
            }
            ?>
          
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
