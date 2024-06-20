document.getElementById('login-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Impede o comportamento padrão de submissão do formulário

    

    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;

    // Verificação simulada - substitua por sua lógica de autenticação real
    if (username === 'admin' && password === 'admin') {
        // Se a autenticação for bem-sucedida, redirecione para a página de dashboard
        window.location.href = 'dashboard.html';
    } else {
        alert('Login failed. Please check your username and password.');
    }
});

function formatDate(date) {
    const day = date.getDate().toString().padStart(2, '0');
    const month = (date.getMonth() + 1).toString().padStart(2, '0');
    const year = date.getFullYear();
    return `${day}/${month}/${year}`;
}

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

function printPage() {
    window.print();
}

function sendPage() {
    alert('Função de envio não implementada.');
}


