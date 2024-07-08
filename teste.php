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
    <link rel="stylesheet" href="assets/css/teste.css" />

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
        <div class="calendar">
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
                <div class="nav">
                    <button onclick="enviarDatas()">Enviar Datas Selecionadas</button>
                </div>
            </footer>
        </div>

        <div id="tooltip" style="display:none; position:absolute; background:#f9f9f9; border:1px solid #ccc; padding:10px; z-index:1000;"></div>

        <script>
            const calendarBody = document.getElementById('calendar-body');
            const monthYear = document.getElementById('month-year');
            const tooltip = document.getElementById('tooltip');
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
                            };

                            // Adiciona eventos de mouseover e mouseout para mostrar/esconder o tooltip
                            cell.addEventListener('mouseover', (e) => showTooltip(e, date, month + 1, year));
                            cell.addEventListener('mouseout', hideTooltip);

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

            function showTooltip(event, day, month, year) {
                const exampleEmployees = [
                    { nome: "Funcionário 1", horario: "08:00 - 17:00" },
                    { nome: "Funcionário 2", horario: "09:00 - 18:00" }
                ];

                tooltip.innerHTML = `<p>Funcionários escalados em ${String(day).padStart(2, '0')}-${String(month).padStart(2, '0')}-${year}:</p>`;
                exampleEmployees.forEach(employee => {
                    tooltip.innerHTML += `<p>${employee.nome} - ${employee.horario}</p>`;
                });

                tooltip.style.display = 'block';
                tooltip.style.left = event.pageX + 10 + 'px';
                tooltip.style.top = event.pageY + 10 + 'px';
            }

            function hideTooltip() {
                tooltip.style.display = 'none';
            }

            function enviarDatas() {
                // Envia as datas selecionadas para o PHP
                if (selectedDates.length > 0) {
                    const selectedDatesStr = selectedDates.join(',');
                    window.location.href = `testeetapanome.php?dates=${selectedDatesStr}`;
                } else {
                    alert('Selecione pelo menos uma data!');
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