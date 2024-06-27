// Função para exibir os detalhes do funcionário
function showDetails(name) {
    const rows = document.querySelectorAll('#employeeDetails tbody tr');
    rows.forEach(row => {
        if (row.querySelector('td').textContent === name) {
            row.style.display = ''; // Exibe a linha correspondente ao nome
        } else {
            row.style.display = 'none'; // Oculta as outras linhas
        }
    });
}
