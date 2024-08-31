<?php
include "tudo_cima.php"; 
if ( $nivel < 2 ) 
{
	header("Location: sem_acesso.php"); exit;
}
?>
            
            <!-- INICIA CONTEÚDO --> 

            <script>
                function atualizarLocais() {
                    var idContrato = document.getElementById('contrato').value;
                    var selectLocal = document.getElementById('localdetrabalho');
                    
                    // Limpar opções existentes
                    selectLocal.innerHTML = '<option value="">Carregando...</option>';
                    
                    var xhr = new XMLHttpRequest();
                    xhr.open('POST', 'sec/get_local_trabalho.php', true);
                    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState === 4 && xhr.status === 200) {
                            var locais = JSON.parse(xhr.responseText);
                            
                            // Limpar opções existentes
                            selectLocal.innerHTML = '';
                            
                            if (locais.length > 0) {
                                locais.forEach(function(local) {
                                    var option = document.createElement('option');
                                    option.value = local.id;
                                    option.textContent = local.nome;
                                    selectLocal.appendChild(option);
                                });
                            } else {
                                selectLocal.innerHTML = '<option value="">Nenhum local disponível</option>';
                            }
                        }
                    };
                    xhr.send('id_exibe_contratos=' + encodeURIComponent(idContrato));
                    
                    atualizarProfissionais(); // Atualiza a lista de profissionais ao selecionar o contrato
                }

                function atualizarProfissionais() {
                    var idContrato = document.getElementById('contrato').value;
                    var selectProfissional = document.getElementById('profissional');
                    
                    // Limpar opções existentes
                    selectProfissional.innerHTML = '<option value="">Carregando...</option>';
                    
                    var xhr = new XMLHttpRequest();
                    xhr.open('POST', 'sec/get_profissionais.php', true);
                    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState === 4 && xhr.status === 200) {
                            var profissionais = JSON.parse(xhr.responseText);
                            
                            // Limpar opções existentes
                            selectProfissional.innerHTML = '';
                            
                            if (profissionais.length > 0) {
                                profissionais.forEach(function(profissional) {
                                    var option = document.createElement('option');
                                    option.value = profissional.id;
                                    option.textContent = profissional.nome;
                                    selectProfissional.appendChild(option);
                                });
                            } else {
                                selectProfissional.innerHTML = '<option value="">Nenhum profissional disponível</option>';
                            }
                        }
                    };
                    xhr.send('id_exibe_contratos=' + encodeURIComponent(idContrato));
                }
            </script>

            <div class="form-group form-group-default">
                <label><b>Contrato:</b></label>
                <select class="form-select" id="contrato" name="id_exibe_contratos" onchange="atualizarLocais();">
                    <option value="">Selecione um contrato</option>
                    <?php
                    $query_coleta_contrato = "SELECT id_contrato FROM relacao_cliente WHERE id_usuario = '$idlogado'";
                    $resultado_coleta_contrato = $conn->query($query_coleta_contrato);
                    
                    if ($resultado_coleta_contrato->num_rows > 0) {
                        while ($dados_coleta_contrato = $resultado_coleta_contrato->fetch_assoc()) {
                            $id_coleta_contrato = $dados_coleta_contrato['id_contrato'];
                            
                            // Exibir contratos com status 1
                            $query_exibe_contratos = "SELECT * FROM contrato WHERE id = '$id_coleta_contrato' AND status = 1";
                            $resultado_exibe_contratos = $conn->query($query_exibe_contratos);
                            
                            if ($resultado_exibe_contratos->num_rows > 0) {
                                $dados_exibe_contratos = $resultado_exibe_contratos->fetch_assoc();
                                $id_exibe_contratos = $dados_exibe_contratos['id'];
                                $nome_exibe_contratos = $dados_exibe_contratos['nome'];
                                
                                echo '<option value="' . $id_exibe_contratos . '">' . $nome_exibe_contratos . '</option>';
                            }
                        }
                    } else {
                        echo '<option value="">Nenhum contrato vinculado ao Usuário logado</option>';
                    }
                    ?>
                </select>
            </div>

            <div class="form-group form-group-default">
                <label><b>Local de trabalho:</b></label>
                <select class="form-select" id="localdetrabalho" name="localdetrabalho" onchange="atualizarProfissionais();">
                    <option value="">Selecione um contrato para ver os locais</option>
                </select>
            </div>

            <div class="form-group form-group-default">
                <label><b>Profissional:</b></label>
                <select class="form-select" id="profissional" name="profissional">
                    <option value="">Selecione um local para ver os profissionais</option>
                </select>
            </div>

            <div class="form-group form-group-default">
                <label for="iniciodeexpediente"><b>Início de expediente:</b></label>
                <input type="time" class="form-control" id="iniciodeexpediente" name="iniciodeexpediente">                
            </div>

            <div class="form-group form-group-default">
                <label for="fimdeexpediente"><b>Fim de expediente:</b></label>
                <input type="time" class="form-control" id="fimdeexpediente" name="fimdeexpediente">                
            </div>            

            <!-- <div class="selecionar">
                <div class="nav">
                    <button class="botao" id="botaoexibircalendario">Mostrar Calendário</button>
                </div>
            </div> -->

            <div class="calendar">
                <!-- <div id="calendar" style="display: none;"> -->
                <div id="calendar">
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
                      <button class="botao" onclick="cadastrarDatas()">Cadastrar turnos</button>
                      <!--  <button style="color: green; background-color: transparent; border: none; padding: 5px 10px; margin-top: 20px;" id="botaovalidacaoinfo">+</button> -->
                  </div>
                </div>
                    </br>
                <div id="validacaoinfo">
                  <div id="selected-dates" class="hidden">
                      <!-- As datas selecionadas serão exibidas aqui -->
                  </div>

                  <!-- <div id="formulario-php">
                     O formulário PHP de VALIDAÇÂO sec/cria_coletadados.php será exibido aqui
                  </div> -->
                </div>

            </div>

<script>
    // Adiciona listeners aos selects para chamar enviarDatas() ao alterar o valor
    window.onload = function() {
            document.getElementById('id_exibe_contratos').addEventListener('change', enviarDatas);            
            document.getElementById('localdetrabalho').addEventListener('change', enviarDatas);
            document.getElementById('profissional').addEventListener('change', enviarDatas);
            document.getElementById('iniciodeexpediente').addEventListener('change', enviarDatas);
            document.getElementById('fimdeexpediente').addEventListener('change', enviarDatas);

            generateCalendar(currentMonth, currentYear);
        };
    
    // document.getElementById('botaoexibircalendario').addEventListener('click', function() {
    //     var calendar = document.getElementById('calendar');
    //     var botaoexibircalendario = document.getElementById('botaoexibircalendario');
    //     if (calendar.style.display === 'none' || calendar.style.display === '') {
    //         calendar.style.display = 'block';
    //         botaoexibircalendario.textContent = 'Esconder Calendário';
    //     } else {
    //         calendar.style.display = 'none';
    //         botaoexibircalendario.textContent = 'Mostrar Calendário';
    //     }
    // });   

//     document.getElementById('botaovalidacaoinfo').addEventListener('click', function() {
//       var validacaoinfo = document.getElementById('validacaoinfo');
//       var botaovalidacaoinfo = document.getElementById('botaovalidacaoinfo');
//       if (validacaoinfo.style.display === 'none' || validacaoinfo.style.display === '') {
//           validacaoinfo.style.display = 'block';
//           botaovalidacaoinfo.textContent = 'Atenção +';
//           botaovalidacaoinfo.style.color = 'green'; // Cor de fundo vermelho
//       } else {
//           validacaoinfo.style.display = 'none';
//           botaovalidacaoinfo.textContent = '-';
//           botaovalidacaoinfo.style.color = 'red'; // Cor de fundo verde
//       }
//       botaovalidacaoinfo.style.backgroundColor = 'transparent'; // Remove a cor de fundo do botão
//       botaovalidacaoinfo.style.border = 'none'; // Sem borda
//   });


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
                      const id_exibe_Contratos = document.getElementById('contrato').value;                      
                      const localDeTrabalho = document.getElementById('localdetrabalho').value;
                      const Profissional = document.getElementById('profissional').value;
                      const iniciodeExpediente = document.getElementById('iniciodeexpediente').value;
                      const fimdeExpediente = document.getElementById('fimdeexpediente').value;                      
                      window.location.href = `sec/enviaturno.php?dates=${selectedDatesStr}&contrato=${id_exibe_Contratos}&localdetrabalho=${localDeTrabalho}&profissional=${Profissional}&iniciodeexpediente=${iniciodeExpediente}&fimdeexpediente=${fimdeExpediente}`;
                  } else {
                      alert('Selecione pelo menos uma data!');
                  }
              }

function enviarDatas() {
    const selectedDatesElement = document.getElementById('selected-dates');
    selectedDatesElement.innerHTML = ''; // Limpa qualquer conteúdo anterior

    if (selectedDates.length > 0) {
        const selectedDatesStr = selectedDates.join(',');
        const id_exibe_Contratos = document.getElementById('contrato').value;                      
        const localDeTrabalho = document.getElementById('localdetrabalho').value;
        const Profissional = document.getElementById('profissional').value;
        const iniciodeExpediente = document.getElementById('iniciodeexpediente').value;
        const fimdeExpediente = document.getElementById('fimdeexpediente').value; 
        
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
        xhr.open('POST', 'sec/cria_coletadados.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send(`dates=${selectedDatesStr}&contrato=${id_exibe_Contratos}&localdetrabalho=${localDeTrabalho}&profissional=${Profissional}&iniciodeexpediente=${iniciodeExpediente}&fimdeexpediente=${fimdeExpediente}`);
    } else {
        selectedDatesElement.textContent = 'Nenhuma data selecionada.';
    }
}

// Gera o calendário inicial
generateCalendar(currentMonth, currentYear);

</script>


            <!-- FINALIZA CONTEÚDO -->  

<?php
include "tudo_baixo.php";
?>            