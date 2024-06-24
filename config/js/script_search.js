function searchByKeyword() {
    const searchInput = document.getElementById('searchInput');
    const searchType = document.getElementById('searchType').value;
    const keyword = searchInput.value.trim().toUpperCase(); // Convertendo para maiúsculas

    const rows = document.querySelectorAll('tbody tr');
    rows.forEach(row => {
        let targetValue = '';
        if (searchType === 'username') {
            targetValue = row.querySelector('td:nth-child(2)').textContent.toUpperCase(); // Username
        } else if (searchType === 'cpf') {
            targetValue = row.querySelector('td:nth-child(3)').textContent.toUpperCase(); // CPF
        }

        if (targetValue.includes(keyword)) {
            row.style.display = ''; // Exibir linha se a informação incluir a palavra-chave
        } else {
            row.style.display = 'none'; // Ocultar linha se a informação não incluir a palavra-chave
        }
    });
}
