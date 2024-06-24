// Função para formatar a data
function formatDate(date) {
    const day = date.getDate().toString().padStart(2, '0');
    const month = (date.getMonth() + 1).toString().padStart(2, '0');
    const year = date.getFullYear();
    return `${day}/${month}/${year}`;
}

// Função para atualizar o intervalo de datas exibido no cabeçalho
function updateDateRange() {
    const startDateInput = document.getElementById('start-date');
    const endDateInput = document.getElementById('end-date');

    const startDate = new Date(startDateInput.value);
    const endDate = new Date(endDateInput.value);

    if (!isNaN(startDate) && !isNaN(endDate) && startDate <= endDate) {
        const formattedStartDate = formatDate(startDate);
        const formattedEndDate = formatDate(endDate);
        document.getElementById('date-range').textContent = `${formattedStartDate} - ${formattedEndDate}`;
    } else {
        alert('Por favor, selecione datas válidas e certifique-se de que a data inicial seja anterior ou igual à data final.');
    }
}

// Função para imprimir a página
function printPage() {
    window.print();
}

// Função para enviar a página
function sendPage() {
    alert('Função de envio não implementada.');
}

// Função para pesquisar por nome de usuário ou CPF
function searchByKeyword() {
    const searchInput = document.getElementById('searchInput');
    const searchType = document.getElementById('searchType').value;
    const keyword = searchInput.value.trim().toLowerCase();

    const rows = document.querySelectorAll('tbody tr');
    rows.forEach(row => {
        let targetValue = '';
        if (searchType === 'username') {
            targetValue = row.querySelector('td:nth-child(2)').textContent.toLowerCase(); // Username
        } else if (searchType === 'cpf') {
            targetValue = row.querySelector('td:nth-child(3)').textContent.toLowerCase(); // CPF
        }

        if (targetValue.includes(keyword)) {
            row.style.display = ''; // Exibir linha se a informação incluir a palavra-chave
        } else {
            row.style.display = 'none'; // Ocultar linha se a informação não incluir a palavra-chave
        }
    });
}

// Event listener para o botão de atualização de datas
document.getElementById('updateDateBtn').addEventListener('click', updateDateRange);

// Event listener para o botão de impressão
document.getElementById('printBtn').addEventListener('click', printPage);

// Event listener para o botão de envio
document.getElementById('sendBtn').addEventListener('click', sendPage);

// Event listener para o botão de pesquisa
document.getElementById('searchButton').addEventListener('click', searchByKeyword);
