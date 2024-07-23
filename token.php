<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendário com Usuários</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: #333;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        h1 {
            background-color: #2a2f5b;
            color: #fff;
            padding: 20px;
            margin: 0;
        }

        .container {
            padding: 20px;
        }

        .input-container {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 10px;
            align-items: center;
        }

        button {
            background-color: #2a2f5b;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #8800ff;
        }

        input[type="text"], input[type="date"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 150px;
            box-sizing: border-box;
            transition: background-color 0.3s;
        }

        input[type="text"]:hover, input[type="date"]:hover {
            background-color: #8800ff;
            color: #fff;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
            background-color: #fff;
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
    <div class="container">
        <div class="input-container">
            <input type="date" id="startDateInput" placeholder="Início (DD/MM/AAAA)" />
            <input type="date" id="endDateInput" placeholder="Fim (DD/MM/AAAA)" />
            <button id="addRemoveButton" onclick="handleAddRemove()">Adicionar Intervalo Personalizado</button>
            <button onclick="updateDateRange()">Atualizar Intervalo</button>
        </div>

        <table id="calendarTable">
            <!-- O conteúdo da tabela será gerado pelo JavaScript -->
        </table>
    </div>

    <script>
        let dateRanges = [];
        const users = ['Usuário 1', 'Usuário 2', 'Usuário 3'];

        function getToday() {
            const today = new Date();
            return today.toLocaleDateString('pt-BR');
        }

        function getDatesInRange(ranges) {
            let dates = new Set();
            ranges.forEach(range => {
                let start = new Date(range.start.split('-').join('/'));
                let end = new Date(range.end.split('-').join('/'));
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

        function handleAddRemove() {
            const startDateInput = document.getElementById('startDateInput').value;
            const endDateInput = document.getElementById('endDateInput').value;
            const button = document.getElementById('addRemoveButton');
            if (startDateInput && endDateInput) {
                const exists = dateRanges.some(range => range.start === startDateInput && range.end === endDateInput);
                if (exists) {
                    removeCustomDateRange(startDateInput, endDateInput);
                    button.textContent = "Adicionar Intervalo Personalizado";
                } else {
                    addCustomDateRange(startDateInput, endDateInput);
                    button.textContent = "Remover Intervalo Personalizado";
                }
            } else {
                alert('Intervalo de datas inválido.');
            }
        }

        function addCustomDateRange(start, end) {
            dateRanges.push({ start, end });
            generateCalendar();
        }

        function removeCustomDateRange(start, end) {
            dateRanges = dateRanges.filter(range => range.start !== start || range.end !== end);
            generateCalendar();
        }

        function updateDateRange() {
            const startDateInput = document.getElementById('startDateInput').value;
            const endDateInput = document.getElementById('endDateInput').value;
            
            if (startDateInput && endDateInput) {
                const index = dateRanges.findIndex(range => range.start === startDateInput);
                if (index !== -1) {
                    dateRanges[index] = { start: startDateInput, end: endDateInput };
                    generateCalendar();
                } else {
                    alert('Intervalo de datas não encontrado.');
                }
            } else {
                alert('Dados inválidos.');
            }
        }

        function initializeCalendar() {
            const { start, end } = getCurrentWeek();
            dateRanges.push({ start, end });
            generateCalendar();
        }

        function getCurrentWeek() {
            const today = new Date();
            const start = new Date(today);
            start.setDate(today.getDate() - today.getDay());
            const end = new Date(start);
            end.setDate(start.getDate() + 6);

            return { start: start.toLocaleDateString('pt-BR'), end: end.toLocaleDateString('pt-BR') };
        }

        initializeCalendar();

        document.getElementById('startDateInput').addEventListener('input', updateButtonState);
        document.getElementById('endDateInput').addEventListener('input', updateButtonState);

        function updateButtonState() {
            const startDateInput = document.getElementById('startDateInput').value;
            const endDateInput = document.getElementById('endDateInput').value;
            const button = document.getElementById('addRemoveButton');
            if (startDateInput && endDateInput) {
                const exists = dateRanges.some(range => range.start === startDateInput && range.end === endDateInput);
                button.textContent = exists ? "Remover Intervalo Personalizado" : "Adicionar Intervalo Personalizado";
            }
        }
    </script>
</body>
</html>
