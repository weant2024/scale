<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escala de Funcionários</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            background-color: #2a2f5b;
            color: #fff;
            padding: 20px;
            margin: 0;
        }

        .container {
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

        .button-container {
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

        .navigation-container {
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
</head>
<body>
<h1>Escala Semanal</h1>
    <div class="button-container">
        <button class="button" onclick="sendWhatsApp()">Enviar via WhatsApp</button>
        <button class="button" onclick="sendEmail()">Enviar via Email</button>
        <button class="button" onclick="generatePDF()">Gerar PDF</button>
    </div>
    <div class="navigation-container">
        <button class="button" onclick="showPreviousWeek()">Semana Anterior</button>
        <button class="button" onclick="showNextWeek()">Próxima Semana</button>
    </div>
    <div class="container" id="weekContainer">
        <!-- Conteúdo da semana será gerado dinamicamente -->
    </div>
    <div class="button-container">
        <button class="button" onclick="showMonthSchedule()">Mostrar Escala do Mês Completo</button>
    </div>

    <footer>
        <p>&copy; 2024 Weant</p>
    </footer>

    <script>
        const daysOfWeek = ['Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado', 'Domingo'];
        let currentWeekStart = new Date();

        function sendWhatsApp() {
            const schedule = getScheduleText();
            const url = `https://api.whatsapp.com/send?text=${encodeURIComponent(schedule)}`;
            window.open(url, '_blank');
        }

        function sendEmail() {
            const schedule = getScheduleText();
            const subject = "Escala Semanal de Funcionários";
            const body = encodeURIComponent(schedule);
            const mailtoLink = `mailto:?subject=${subject}&body=${body}`;
            window.location.href = mailtoLink;
        }

        function generatePDF() {
            const element = document.getElementById('weekContainer');
            const options = {
                margin: [20, 20, 20, 20],
                filename: 'escala_semanal.pdf',
                image: { type: 'jpeg', quality: 0.95 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'px', format: [2100, 1200], orientation: 'landscape' }
            };

            html2pdf().from(element).set(options).toPdf().get('pdf').then(function(pdf) {
                const title = 'Escala Semanal de Funcionários';
                const pageWidth = pdf.internal.pageSize.getWidth();
                const titleWidth = pdf.getTextWidth(title);
                const titleX = (pageWidth - titleWidth) / 2;
                pdf.setFontSize(22);
                pdf.text(title, titleX, 50);
                pdf.save();
            });
        }

        function getScheduleText() {
            let schedule = "Escala semanal:\n";
            employees.forEach(employee => {
                schedule += `${employee.name}: ${employee.schedule} | ${employee.location}\n`;
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
                                if (employee.motivo_afastamento) {
                                    scheduleLink = `<a href="editarafastamento_link.php?id=${employee.id}&data=${dateString}" class="employee-schedule">${employee.schedule}</a>`;
                                } else {
                                    scheduleLink = `<a href="editarturno_link.php?id=${employee.id}&data=${dateString}" class="employee-schedule">${employee.schedule} | ${employee.location}</a>`;
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

        function showMonthSchedule() {
            alert('Mostrando escala do mês completo...');
        }

        function formatDate(date) {
            return date.toISOString().split('T')[0];
        }

        function addDays(date, days) {
            const result = new Date(date);
            result.setDate(result.getDate() + days);
            return result;
        }

        // Inicializar a semana atual
        generateWeek();
    </script>
</body>
</html>
