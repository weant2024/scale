<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendário com Usuários</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h1>Calendário de Usuários</h1>

    <button onclick="addCustomDateRange()">Adicionar Intervalo Personalizado</button>
    <button onclick="removeCustomDateRange()">Remover Intervalo Personalizado</button>
    <button onclick="updateDateRange()">Atualizar Intervalo</button>

    <input type="text" id="startDateInput" placeholder="Início (DD/MM/AAAA)" />
    <input type="text" id="endDateInput" placeholder="Fim (DD/MM/AAAA)" />
    <input type="text" id="oldStartDateInput" placeholder="Início Antigo (DD/MM/AAAA)" />

    <table id="calendarTable">
        <!-- O conteúdo da tabela será gerado pelo JavaScript -->
    </table>

    <script>
        // Dados exemplo
        let dateRanges = [];
        const users = ['Usuário 1', 'Usuário 2', 'Usuário 3'];

        function getToday() {
            const today = new Date();
            return today.toLocaleDateString('pt-BR');
        }

        function getDatesInRange(ranges) {
            let dates = new Set();
            ranges.forEach(range => {
                let start = new Date(range.start.split('/').reverse().join('/'));
                let end = new Date(range.end.split('/').reverse().join('/'));
                while (start <= end) {
                    dates.add(start.toLocaleDateString('pt-BR'));
                    start.setDate(start.getDate() + 1);
                }
            });
            return Array.from(dates).sort();
        }

        function generateCalendar() {
            const table = document.getElementById('calendarTable');
            let dates = getDatesInRange(dateRanges);
            let headerRow = '<tr><th>Usuários</th>';
            dates.forEach(date => {
                headerRow += `<th>${date}</th>`;
            });
            headerRow += '</tr>';
            table.innerHTML = headerRow;

            users.forEach(user => {
                let row = `<tr><td>${user}</td>`;
                dates.forEach(() => {
                    row += '<td></td>'; // Células vazias para o conteúdo dos usuários
                });
                row += '</tr>';
                table.innerHTML += row;
            });
        }

        function addCustomDateRange() {
            const startDateInput = document.getElementById('startDateInput').value;
            const endDateInput = document.getElementById('endDateInput').value;
            if (startDateInput && endDateInput) {
                dateRanges.push({ start: startDateInput, end: endDateInput });
                generateCalendar();
            } else {
                alert('Intervalo de datas inválido.');
            }
        }

        function removeCustomDateRange() {
            const startDateInput = document.getElementById('startDateInput').value;
            const endDateInput = document.getElementById('endDateInput').value;
            if (startDateInput && endDateInput) {
                dateRanges = dateRanges.filter(range => range.start !== startDateInput || range.end !== endDateInput);
                generateCalendar();
            } else {
                alert('Intervalo de datas não encontrado.');
            }
        }

        function updateDateRange() {
            const oldStartDateInput = document.getElementById('oldStartDateInput').value;
            const newStartDateInput = document.getElementById('startDateInput').value;
            const newEndDateInput = document.getElementById('endDateInput').value;
            
            if (oldStartDateInput && newStartDateInput && newEndDateInput) {
                const index = dateRanges.findIndex(range => range.start === oldStartDateInput);
                if (index !== -1) {
                    dateRanges[index] = { start: newStartDateInput, end: newEndDateInput };
                    generateCalendar();
                } else {
                    alert('Intervalo de datas não encontrado.');
                }
            } else {
                alert('Dados inválidos.');
            }
        }

        // Inicializar o calendário com a semana atual
        function initializeCalendar() {
            const { start, end } = getCurrentWeek();
            dateRanges.push({ start, end });
            generateCalendar();
        }

        function getCurrentWeek() {
            const today = new Date();
            const start = new Date(today);
            start.setDate(today.getDate() - today.getDay()); // Ajusta para o início da semana
            const end = new Date(start);
            end.setDate(start.getDate() + 6); // Adiciona 7 dias (6 + 1)

            return { start: start.toLocaleDateString('pt-BR'), end: end.toLocaleDateString('pt-BR') };
        }

        // Inicializar o calendário
        initializeCalendar();
    </script>
</body>
</html>
