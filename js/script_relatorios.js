// Função para gerar o relatório com base nos dados selecionados
function generateReport() {
    // Obtém o nome do funcionário selecionado
    const employeeName = document.getElementById('employeeName').value;

    // Dados fictícios de relatório para demonstração
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

    // Atualiza os campos do relatório na página
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
function exportToPDF() {
    // Verifica se a biblioteca jsPDF está disponível
    if (typeof window.jspdf !== 'undefined') {
        const { jsPDF } = window.jspdf;
        const doc = new jsPDF();

        // Adiciona informações ao PDF
        doc.text("Relatório de Funcionário", 20, 20);
        doc.text("Nome: " + document.getElementById('reportName').innerText, 20, 30);
        doc.text("Horário de Entrada: " + document.getElementById('reportEntrada').innerText, 20, 40);
        doc.text("Horário de Saída: " + document.getElementById('reportSaida').innerText, 20, 50);
        doc.text("Horário de Intervalo: " + document.getElementById('reportintervalo').innerText, 20, 60);
        doc.text("Horas Trabalhadas: " + document.getElementById('reportHorasTrabalhadas').innerText, 20, 70);
        doc.text("Horas de Pausa: " + document.getElementById('reportHorasPausa').innerText, 20, 80);
        doc.text("Horas Trabalhadas na Semana: " + document.getElementById('reportHorasSemana').innerText, 20, 90);
        doc.text("Banco de Horas: " + document.getElementById('reportBancoHoras').innerText, 20, 100);

        // Salva o PDF com nome específico
        doc.save('relatorio_funcionario.pdf');
    } else {
        // Caso a biblioteca jsPDF não esteja disponível
        alert("Biblioteca jsPDF não encontrada. Não é possível exportar para PDF.");
    }
}
