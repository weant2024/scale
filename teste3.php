<?php 
include "tudo_cima.php";
?>
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
    
<?php
include "tudo_baixo.php";
?>