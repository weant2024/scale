function removeEmployee(day, index) {
    if (employeesSchedule[day] && employeesSchedule[day][index]) {
        employeesSchedule[day].splice(index, 1);
        saveSchedule();
        alert('Funcionário removido com sucesso da escala.');
    } else {
        alert('Funcionário não encontrado na escala.');
    }
}
