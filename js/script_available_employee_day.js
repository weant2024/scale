function isAvailable(employee, day) {
    return employeesSchedule[day] && employeesSchedule[day].some(emp => emp.name === employee.name);
}
