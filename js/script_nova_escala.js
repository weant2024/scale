// Simulação de dados de funcionários (pode ser obtido dinamicamente de um banco de dados)
const employees = [
    { id: 1, name: 'Funcionário A' },
    { id: 2, name: 'Funcionário B' },
    { id: 3, name: 'Funcionário C' },
    { id: 4, name: 'Funcionário D' }
    // Adicione mais funcionários conforme necessário
];

// Simulação de escalas já criadas (pode ser obtido dinamicamente de um banco de dados)
let schedules = [];

// Evento disparado quando o documento HTML é completamente carregado
document.addEventListener('DOMContentLoaded', function () {
    const employeeSelect = document.getElementById('employee');

    // Preenche o select de funcionários com as opções simuladas
    employees.forEach(employee => {
        const option = document.createElement('option');
        option.value = employee.id;
        option.textContent = employee.name;
        employeeSelect.appendChild(option);
    });

    const scheduleForm = document.getElementById('schedule-form');
    scheduleForm.addEventListener('submit', function (event) {
        // Previne o envio padrão do formulário
        event.preventDefault();

        // Obtém os valores dos campos do formulário
        const employeeId = parseInt(document.getElementById('employee').value);
        const date = document.getElementById('date').value;
        const startTime = document.getElementById('startTime').value;
        const endTime = document.getElementById('endTime').value;

        // Valida se o funcionário já trabalhou nas últimas 24 horas
        if (isEmployeeScheduledWithin24Hours(employeeId, date)) {
            displayErrorMessage('Funcionário já trabalhou nas últimas 24 horas.');
            return;
        }

        // Valida se o funcionário está programado para trabalhar nas próximas 24 horas
        if (isEmployeeScheduledWithinNext24Hours(employeeId, date)) {
            displayErrorMessage('Funcionário está programado para trabalhar nas próximas 24 horas.');
            return;
        }

        // Adiciona nova escala
        const newSchedule = {
            employeeId: employeeId,
            date: date,
            startTime: startTime,
            endTime: endTime
        };

        // Adiciona a nova escala ao array de escalas
        schedules.push(newSchedule);
        console.log('Nova escala adicionada:', newSchedule);

        // Limpa o formulário e mensagens de erro
        scheduleForm.reset();
        clearErrorMessage();
    });

    // Função para verificar se o funcionário já está agendado dentro das últimas 24 horas
    function isEmployeeScheduledWithin24Hours(employeeId, date) {
        // Código da função omitido para reduzir tamanho do exemplo
    }

    // Função para verificar se o funcionário está agendado para as próximas 24 horas
    function isEmployeeScheduledWithinNext24Hours(employeeId, date) {
        // Código da função omitido para reduzir tamanho do exemplo
    }

    // Função para exibir mensagem de erro
    function displayErrorMessage(message) {
        const errorMessage = document.getElementById('error-message');
        errorMessage.textContent = message;
    }

    // Função para limpar mensagem de erro
    function clearErrorMessage() {
        const errorMessage = document.getElementById('error-message');
        errorMessage.textContent = '';
    }
});
