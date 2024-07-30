// Função para criar o calendário
function criarCalendario(dias) {
    const calendarDiv = document.getElementById('calendar');
    calendarDiv.innerHTML = ''; // Limpa o calendário existente
    const table = document.createElement('table');
    
    // Cabeçalho com as datas
    const thead = document.createElement('thead');
    const headerRow = document.createElement('tr');
    const emptyCell = document.createElement('th');
    headerRow.appendChild(emptyCell);

    dias.forEach(dia => {
        const th = document.createElement('th');
        th.textContent = formatarData(dia);
        headerRow.appendChild(th);
    });

    thead.appendChild(headerRow);
    table.appendChild(thead);

    // Corpo com os usuários e horários
    const tbody = document.createElement('tbody');

    usuarios.forEach(usuario => {
        const row = document.createElement('tr');
        const userCell = document.createElement('td');
        userCell.textContent = usuario;
        row.appendChild(userCell);

        dias.forEach(dia => {
            const cell = document.createElement('td');
            // Aqui você pode adicionar a lógica para preencher os horários
            cell.textContent = obterHorario(usuario, dia);
            row.appendChild(cell);
        });

        tbody.appendChild(row);
    });

    table.appendChild(tbody);
    calendarDiv.appendChild(table);
}

// Função para formatar a data no formato DD/MM/AAAA
function formatarData(dateString) {
    const [year, month, day] = dateString.split('-');
    return `${day}/${month}/${year}`;
}

// Função de exemplo para obter o horário
function obterHorario(usuario, dia) {
    // Aqui você pode adicionar a lógica para consultar o banco de dados
    return '09:00 - 17:00'; // Exemplo fixo
}

// Função para obter os dias entre duas datas
function obterDiasEntre(startDate, endDate) {
    const dias = [];
    let currentDate = new Date(startDate);
    const end = new Date(endDate);

    while (currentDate <= end) {
        dias.push(currentDate.toISOString().split('T')[0]);
        currentDate.setDate(currentDate.getDate() + 1);
    }

    return dias;
}

// Função para obter a data de hoje e os próximos 6 dias
function obterDiasIniciais() {
    const hoje = new Date();
    const dias = [];
    for (let i = 0; i < 7; i++) {
        const data = new Date(hoje);
        data.setDate(hoje.getDate() + i);
        dias.push(data.toISOString().split('T')[0]);
    }
    return dias;
}

// Função para atualizar o calendário com base no intervalo de datas
function atualizarCalendario() {
    const startDate = document.getElementById('start-date').value;
    const endDate = document.getElementById('end-date').value;

    if (startDate && endDate) {
        const dias = obterDiasEntre(startDate, endDate);
        criarCalendario(dias);
    } else {
        alert('Por favor, selecione as datas inicial e final.');
    }
}

// Chama a função para criar o calendário ao carregar a página com um intervalo de datas padrão
window.onload = () => {
    const diasIniciais = obterDiasIniciais();
    criarCalendario(diasIniciais);
};
