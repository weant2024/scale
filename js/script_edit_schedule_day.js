function editSchedule(day) {
    const newEmployeeName = prompt('Digite o nome do novo funcionário:');
    const newEmployeeHours = prompt('Digite o horário de trabalho do novo funcionário:');

    if (newEmployeeName && newEmployeeHours) {
        if (!employeesSchedule[day]) {
            employeesSchedule[day] = [];
        }
        employeesSchedule[day].push({ name: newEmployeeName, hours: newEmployeeHours });
        saveSchedule();
        alert('Funcionário adicionado com sucesso à escala.');
    } else {
        alert('Por favor, preencha o nome e o horário do funcionário.');
    }
}
