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
