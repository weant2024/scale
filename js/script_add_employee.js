function addEmployee() {
    const day = prompt('Digite o dia da semana para adicionar o funcionário:');
    if (day && employeesSchedule[day]) {
        editSchedule(day);
    } else {
        alert('Dia da semana inválido ou escala não encontrada.');
    }
}
