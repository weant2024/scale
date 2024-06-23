// report.js

// Função para gerar o relatório com base nos dados selecionados
export function generateReport() {
    const employeeName = document.getElementById('employeeName').value;

    const reportData = {
        name: employeeName,
        entrada: "08:00",
        saida: "17:00",
        intervalo: "12:00 - 13:00",
        horasTrabalhadas: 8,
        horasPausa: 1,
        horasSemana: 40,
        bancoHoras: 5
    };

    document.getElementById('reportName').innerText = reportData.name;
    document.getElementById('reportEntrada').innerText = reportData.entrada;
    document.getElementById('reportSaida').innerText = reportData.saida;
    document.getElementById('reportintervalo').innerText = reportData.intervalo;
    document.getElementById('reportHorasTrabalhadas').innerText = reportData.horasTrabalhadas;
    document.getElementById('reportHorasPausa').innerText = reportData.horasPausa;
    document.getElementById('reportHorasSemana').innerText = reportData.horasSemana;
    document.getElementById('reportBancoHoras').innerText = reportData.bancoHoras;
}

// Função para exportar o relatório em PDF
export function exportToPDF() {
    if (typeof window.jspdf !== 'undefined') {
        const { jsPDF } = window.jspdf;
        const doc = new jsPDF();

        doc.text("Relatório de Funcionário", 20, 20);
        doc.text("Nome: " + document.getElementById('reportName').innerText, 20, 30);
        doc.text("Horário de Entrada: " + document.getElementById('reportEntrada').innerText, 20, 40);
        doc.text("Horário de Saída: " + document.getElementById('reportSaida').innerText, 20, 50);
        doc.text("Horário de Intervalo: " + document.getElementById('reportintervalo').innerText, 20, 60);
        doc.text("Horas Trabalhadas: " + document.getElementById('reportHorasTrabalhadas').innerText, 20, 70);
        doc.text("Horas de Pausa: " + document.getElementById('reportHorasPausa').innerText, 20, 80);
        doc.text("Horas Trabalhadas na Semana: " + document.getElementById('reportHorasSemana').innerText, 20, 90);
        doc.text("Banco de Horas: " + document.getElementById('reportBancoHoras').innerText, 20, 100);

        doc.save('relatorio_funcionario.pdf');
    } else {
        alert("Biblioteca jsPDF não encontrada. Não é possível exportar para PDF.");
    }
}
