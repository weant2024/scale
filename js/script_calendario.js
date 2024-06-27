// Dados dos funcionários escalados
const employeesScheduleKey = 'employeesSchedule';
const defaultEmployeesSchedule = {
    1: [{ name: 'Ana Silva', hours: '08:00 - 17:00' }],
    2: [{ name: 'João Souza', hours: '09:00 - 18:00' }],
    3: [{ name: 'Maria Oliveira', hours: '08:00 - 17:00' }, { name: 'Carlos Pereira', hours: '10:00 - 19:00' }],
    // ... adicionar mais dados conforme necessário
};

// Função para exibir os detalhes da escala ao clicar em um dia do calendário
function showDetails(day) {
    const modal = document.querySelector('.modal');
    const modalDate = document.getElementById('modalDate');
    const employeeList = document.getElementById('employeeList');

    modalDate.innerText = `${day}/06/2024`;
    employeeList.innerHTML = '';

    const schedule = JSON.parse(localStorage.getItem(employeesScheduleKey)) || defaultEmployeesSchedule;

    if (schedule[day]) {
        schedule[day].forEach((employee) => {
            const li = document.createElement('li');
            li.innerText = `${employee.name} - ${employee.hours}`;
            employeeList.appendChild(li);
        });
    } else {
        const li = document.createElement('li');
        li.innerText = 'Nenhum funcionário escalado.';
        employeeList.appendChild(li);
    }

    modal.style.display = 'block';
}

// Função para fechar o modal
function closeModal() {
    const modal = document.querySelector('.modal');
    modal.style.display = 'none';
}

// Evento de carregamento da página para armazenar os dados em localStorage
window.addEventListener('DOMContentLoaded', () => {
    const schedule = JSON.parse(localStorage.getItem(employeesScheduleKey)) || defaultEmployeesSchedule;
    localStorage.setItem(employeesScheduleKey, JSON.stringify(schedule));
});
