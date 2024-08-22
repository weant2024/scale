<?php
include "tudo_cima.php"; 
?>
            <!-- INICIA CONTEÚDO --> 

    <style>
        h1 {
            text-align: center;
            background-color: #2a2f5b;
            color: #fff;
            padding: 20px;
            margin: 0;
        }

        .conteudo {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 20px;
            overflow-x: auto;
            margin-top: 20px;
        }

        .day {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 15px;
            position: relative;
        }

        .day h2 {
            text-align: center;
            color: #263f5a;
        }

        .day .view-details-button {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            padding: 5px 10px;
            font-size: 14px;
        }

        .day .view-details-button:hover {
            background-color: #45a049;
        }

        .employee {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .employee .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #2a2f5b;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
            font-size: 20px;
            font-weight: bold;
        }

        .employee div {
            display: flex;
            flex-direction: column;
        }

        .employee-name {
            font-weight: bold;
        }

        .employee-schedule {
            color: #555;
        }

        .employee-location {
            color: #777;
        }

        footer {
            text-align: center;
            margin-top: 20px;
            color: #777;
        }

        .button-conteudo {
            text-align: center;
            margin: 20px 0;
        }

        .button {
            padding: 10px 15px;
            margin: 0 5px;
            background-color: #2a2f5b;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #8800ff;
        }

        .navigation-conteudo {
            text-align: center;
            margin: 20px 0;
        }

        /* Estilos permanecem os mesmos */
        .employee-schedule, .employee-location {
            color: #2a2f5b;
            text-decoration: none;
        }

        .employee-schedule:hover, .employee-location:hover {
            color: #8800ff;
        }

        .date-link {   
            color: #2a2f5b;         
            text-decoration: none;
            display: block;
            text-align: center;
            padding: 10px;
        }

        .date-link:hover {   
            color: #8800ff;         
            text-decoration: none;
            display: block;
            text-align: center;
            padding: 10px;
        }
       
    </style>
    <p align="center">
     <b>ESCALA SEMANAL</b>
    </p>


    <div class="navigation-conteudo">
        <button class="button" onclick="showPreviousWeek()">Semana Anterior</button>
        <button class="button" onclick="showNextWeek()">Próxima Semana</button>
    </div>
    <div class="conteudo" id="weekContainer">
        <!-- Conteúdo da semana será gerado dinamicamente -->
    </div>

    <script>
    const daysOfWeek = ['Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado', 'Domingo'];
    let currentWeekStart = new Date();

    // Ajusta a data para a última segunda-feira
    function adjustToMonday(date) {
        const day = date.getDay();
        const difference = (day === 0 ? -6 : 1) - day; // Ajusta para segunda (1) ou domingo (0)
        date.setDate(date.getDate() + difference);
        return date;
    }

    currentWeekStart = adjustToMonday(new Date());

    function getScheduleText() {
        let schedule = "Escala semanal:\n";
        employees.forEach(employee => {
            if (employee.schedule.includes('afastado')) {
                schedule += `${employee.name}: ${employee.schedule}\n`;
            } else {
                schedule += `${employee.name}: ${employee.schedule} | ${employee.location}\n`;
            }
        });
        return schedule;
    }

    function showPreviousWeek() {
        currentWeekStart.setDate(currentWeekStart.getDate() - 7);
        generateWeek();
    }

    function showNextWeek() {
        currentWeekStart.setDate(currentWeekStart.getDate() + 7);
        generateWeek();
    }

    function generateWeek() {
        const weekContainer = document.getElementById('weekContainer');
        weekContainer.innerHTML = '';

        fetch(`sec/get_employee_schedule.php?start_date=${formatDate(currentWeekStart)}&end_date=${formatDate(addDays(currentWeekStart, 6))}`)
            .then(response => response.json())
            .then(data => {
                for (let i = 0; i < 7; i++) {
                    const dayElement = document.createElement('div');
                    dayElement.className = 'day';
                    const dayName = daysOfWeek[i];
                    const date = new Date(currentWeekStart);
                    date.setDate(currentWeekStart.getDate() + i);
                    const dateString = date.toLocaleDateString('pt-BR');
                    const dateLink = `criarturno_link.php?data=${dateString}`;
                    dayElement.innerHTML = `<h2><a href="${dateLink}" class="date-link">${dayName}</a></h2><h2>${dateString}</h2>`;

                    data.forEach(employee => {
                        if (employee.date === dateString) {
                            const employeeElement = document.createElement('div');
                            employeeElement.className = 'employee';
                            const avatar = `<div class="avatar">${employee.name[0]}</div>`;

                            let scheduleLink;
                            if (employee.schedule.includes('afastado')) {
                                scheduleLink = `<a href="editarafastamento_link.php?id=${employee.id}&data=${dateString}" class="employee-schedule">${employee.schedule}</a>`;
                            } else {
                                scheduleLink = `<a href="editarafastamento_link.php?id=${employee.id}&data=${dateString}" class="employee-schedule">${employee.schedule} | ${employee.location}</a>`;
                            }

                            const employeeDetails = `
                                <div>
                                    <span class="employee-name">${employee.name}</span>
                                    ${scheduleLink}
                                </div>`;
                            employeeElement.innerHTML = avatar + employeeDetails;
                            dayElement.appendChild(employeeElement);
                        }
                    });

                    weekContainer.appendChild(dayElement);
                }
            })
            .catch(error => console.error('Error fetching employee schedule:', error));
    }

    function formatDate(date) {
        return date.toISOString().split('T')[0];
    }

    function addDays(date, days) {
        const result = new Date(date);
        result.setDate(result.getDate() + days);
        return result;
    }

    // Inicializar a semana ajustada para segunda-feira
    generateWeek();
</script>


<!-- FINALIZA CONTEÚDO -->  
          </div>
        </div>

<?php
include "tudo_baixo.php"; 
?>