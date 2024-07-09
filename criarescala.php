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

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/plugins.min.css" />
    <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />
    <link rel="stylesheet" href="assets/css/calendario.css" />

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
                        <a class="dropdown-item" href="meu_perfil.php">Meu perfil</a>
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

            <div class="form-group form-group-default">
              <label><b>Nome:</b></label>
              <select class="form-select" id="nome" name="nome">
                  <?php
                      // Preenche o dropdown com os usuários
                      $query_usuarios = "SELECT * FROM usuario ORDER BY login ASC";
                      $result_usuarios = $conn->query($query_usuarios);
                      if ($result_usuarios->num_rows > 0) {
                          while($row = $result_usuarios->fetch_assoc()) {
                              echo '<option value="' . $row["id"] . '">' . $row["nome"] . '</option>';
                          }
                      } else {
                          echo '<option value="">Nenhum usuário encontrado</option>';
                      }
                  ?>
              </select>
            </div>

            <div class="form-group form-group-default">
                <label for="horarioexpediente"><b>Horário de expediente:</b></label>
                <select class="form-select" id="horarioexpediente" name="horarioexpediente">
                    <option value="01-07">01h as 07h</option>
                    <option value="07-13">07h as 13h</option>
                    <option value="13-19">13h as 19h</option>
                    <option value="19-01">19h as 01h</option>
                </select>
            </div>

            <div class="form-group form-group-default">
                <label for="localdetrabalho"><b>Local:</b></label>
                <select class="form-select" id="localdetrabalho" name="localdetrabalho">
                    <option value="TJ">TJ</option>
                    <option value="FC2">FC2</option>
                </select>
            </div>

            <div class="selecionar">
                <div class="nav">
                    <button class="botao" id="botaoexibircalendario">Mostrar Calendário</button>
                </div>
            </div>

            <div class="calendar">
                <div id="calendar" style="display: none;">
                    <header>
                        <h2 id="month-year">Julho 2024</h2>
                        <div class="nav">
                            <button onclick="prevMonth()">Anterior</button>
                            <button onclick="nextMonth()">Próximo</button>
                        </div>
                    </header>
                    <table>
                        <thead>
                            <tr>
                                <th>Dom</th>
                                <th>Seg</th>
                                <th>Ter</th>
                                <th>Qua</th>
                                <th>Qui</th>
                                <th>Sex</th>
                                <th>Sáb</th>
                            </tr>
                        </thead>
                        <tbody id="calendar-body">
                            <!-- Os dias do calendário serão gerados aqui -->
                        </tbody>
                    </table>
                    <footer>
                        
                    </footer>
                </div>

                <div class="selecionar">
                  <div class="nav">
                      <button class="botao" onclick="cadastrarDatas()">Cadastrar escala</button>
                      <button style="color: green; background-color: transparent; border: none; padding: 5px 10px; margin-top: 20px;" id="botaovalidacaoinfo">+</button>
                  </div>
                </div>

                <div id="validacaoinfo">
                  <div id="selected-dates" class="hidden">
                      <!-- As datas selecionadas serão exibidas aqui -->
                  </div>

                  <div id="formulario-php" class="hidden">
                      <!-- O formulário PHP será exibido aqui -->
                  </div>
                </div>

            </div>

<script>
    // Adiciona listeners aos selects para chamar enviarDatas() ao alterar o valor
    window.onload = function() {
            document.getElementById('nome').addEventListener('change', enviarDatas);
            document.getElementById('horarioexpediente').addEventListener('change', enviarDatas);
            document.getElementById('localdetrabalho').addEventListener('change', enviarDatas);
            generateCalendar(currentMonth, currentYear);
        };
    
    document.getElementById('botaoexibircalendario').addEventListener('click', function() {
        var calendar = document.getElementById('calendar');
        var botaoexibircalendario = document.getElementById('botaoexibircalendario');
        if (calendar.style.display === 'none' || calendar.style.display === '') {
            calendar.style.display = 'block';
            botaoexibircalendario.textContent = 'Esconder Calendário';
        } else {
            calendar.style.display = 'none';
            botaoexibircalendario.textContent = 'Mostrar Calendário';
        }
    });   

    document.getElementById('botaovalidacaoinfo').addEventListener('click', function() {
      var validacaoinfo = document.getElementById('validacaoinfo');
      var botaovalidacaoinfo = document.getElementById('botaovalidacaoinfo');
      if (validacaoinfo.style.display === 'none' || validacaoinfo.style.display === '') {
          validacaoinfo.style.display = 'block';
          botaovalidacaoinfo.textContent = 'Atenção +';
          botaovalidacaoinfo.style.color = 'green'; // Cor de fundo vermelho
      } else {
          validacaoinfo.style.display = 'none';
          botaovalidacaoinfo.textContent = '-';
          botaovalidacaoinfo.style.color = 'red'; // Cor de fundo verde
      }
      botaovalidacaoinfo.style.backgroundColor = 'transparent'; // Remove a cor de fundo do botão
      botaovalidacaoinfo.style.border = 'none'; // Sem borda
  });


const calendarBody = document.getElementById('calendar-body');
const monthYear = document.getElementById('month-year');
let today = new Date();
let currentMonth = today.getMonth(); // Mês atual
let currentYear = today.getFullYear(); // Ano atual
let selectedDates = [];

function generateCalendar(month, year) {
    // Limpa o calendário
    calendarBody.innerHTML = '';

    // Número de dias no mês
    const daysInMonth = new Date(year, month + 1, 0).getDate();
    const firstDay = new Date(year, month, 1).getDay();

    // Atualiza o cabeçalho do mês e ano
    const monthNames = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
    monthYear.innerHTML = `${monthNames[month]} ${year}`;

    // Cria as células do calendário
    let date = 1;
    for (let i = 0; i < 6; i++) {
        const row = document.createElement('tr');

        for (let j = 0; j < 7; j++) {
            const cell = document.createElement('td');
            if (i === 0 && j < firstDay) {
                cell.innerHTML = '';
            } else if (date > daysInMonth) {
                break;
            } else {
                cell.innerHTML = date;
                cell.classList.add('day');
                const formattedDate = `${String(date).padStart(2, '0')}-${String(month + 1).padStart(2, '0')}-${year}`; // Formato dd-mm-yyyy

                // Marca a célula como selecionada se a data estiver no array de datas selecionadas
                if (selectedDates.includes(formattedDate)) {
                    cell.classList.add('selected');
                }

                // Adiciona ou remove a classe 'selected' ao clicar para marcar/desmarcar a seleção
                cell.onclick = () => {
                    if (cell.classList.contains('selected')) {
                        cell.classList.remove('selected');
                        selectedDates = selectedDates.filter(d => d !== formattedDate);
                    } else {
                        cell.classList.add('selected');
                        selectedDates.push(formattedDate);
                    }
                    enviarDatas(); // Chama a função enviarDatas() sempre que uma data é marcada/desmarcada
                };

                date++;
            }
            row.appendChild(cell);
        }
        calendarBody.appendChild(row);
    }
}

function prevMonth() {
    currentMonth--;
    if (currentMonth < 0) {
        currentMonth = 11;
        currentYear--;
    }
    generateCalendar(currentMonth, currentYear);
}

function nextMonth() {
    currentMonth++;
    if (currentMonth > 11) {
        currentMonth = 0;
        currentYear++;
    }
    generateCalendar(currentMonth, currentYear);
}

function cadastrarDatas() {
                  // Envia as datas selecionadas para o PHP
                  if (selectedDates.length > 0) {
                      const selectedDatesStr = selectedDates.join(',');
                      const nome = document.getElementById('nome').value;
                      const horarioExpediente = document.getElementById('horarioexpediente').value;
                      const localDeTrabalho = document.getElementById('localdetrabalho').value;
                      window.location.href = `sec/enviaescala.php?dates=${selectedDatesStr}&id=${nome}&horarioexpediente=${horarioExpediente}&localdetrabalho=${localDeTrabalho}`;
                  } else {
                      alert('Selecione pelo menos uma data!');
                  }
              }

function enviarDatas() {
    const selectedDatesElement = document.getElementById('selected-dates');
    selectedDatesElement.innerHTML = ''; // Limpa qualquer conteúdo anterior

    if (selectedDates.length > 0) {
        const selectedDatesStr = selectedDates.join(',');
        const nome = document.getElementById('nome').value;
        const horarioExpediente = document.getElementById('horarioexpediente').value;
        const localDeTrabalho = document.getElementById('localdetrabalho').value;

        // Envia as datas selecionadas via AJAX
        const xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    // Exibe o formulário PHP na mesma página
                    const formularioPhp = document.getElementById('formulario-php');
                    formularioPhp.innerHTML = xhr.responseText;
                } else {
                    console.error('Erro ao processar requisição.');
                }
            }
        };
        xhr.open('POST', 'sec/escala_coletadados.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send(`dates=${selectedDatesStr}&nome=${nome}&horarioexpediente=${horarioExpediente}&localdetrabalho=${localDeTrabalho}`);
    } else {
        selectedDatesElement.textContent = 'Nenhuma data selecionada.';
    }
}

// Gera o calendário inicial
generateCalendar(currentMonth, currentYear);

</script>


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
