// Importar módulo de login
import './login.js';

// Importar módulo de logout
import './logout.js';

// Importar dados de funcionários e escalas
import { employees } from './employees.js';
import { schedules, isEmployeeScheduledWithin24Hours, isEmployeeScheduledWithinNext24Hours } from './schedules.js';

// Evento disparado quando o documento HTML é completamente carregado
document.addEventListener('DOMContentLoaded', function () {
    const selectFuncionario = document.getElementById('funcionario');

    // Preenche o select de funcionários com as opções simuladas
    employees.forEach(funcionario => {
        const option = document.createElement('option');
        option.value = funcionario.id;
        option.textContent = funcionario.nome;
        selectFuncionario.appendChild(option);
    });

    const formularioEscala = document.getElementById('formulario-escala');
    formularioEscala.addEventListener('submit', function (event) {
        // Previne o envio padrão do formulário
        event.preventDefault();

        // Obtém os valores dos campos do formulário
        const idFuncionario = parseInt(document.getElementById('funcionario').value);
        const data = document.getElementById('data').value;
        const horaInicio = document.getElementById('hora-inicio').value;
        const horaFim = document.getElementById('hora-fim').value;

        // Valida se o funcionário já trabalhou nas últimas 24 horas
        if (isEmployeeScheduledWithin24Hours(idFuncionario, data)) {
            exibirMensagemDeErro('Funcionário já trabalhou nas últimas 24 horas.');
            return;
        }

        // Valida se o funcionário está programado para trabalhar nas próximas 24 horas
        if (isEmployeeScheduledWithinNext24Hours(idFuncionario, data)) {
            exibirMensagemDeErro('Funcionário está programado para trabalhar nas próximas 24 horas.');
            return;
        }

        // Adiciona nova escala
        const novaEscala = {
            idFuncionario: idFuncionario,
            data: data,
            horaInicio: horaInicio,
            horaFim: horaFim
        };

        // Adiciona a nova escala ao array de escalas
        schedules.push(novaEscala);
        console.log('Nova escala adicionada:', novaEscala);

        // Limpa o formulário e mensagens de erro
        formularioEscala.reset();
        limparMensagemDeErro();
    });

    // Função para exibir mensagem de erro
    function exibirMensagemDeErro(mensagem) {
        const mensagemErro = document.getElementById('mensagem-erro');
        mensagemErro.textContent = mensagem;
    }

    // Função para limpar mensagem de erro
    function limparMensagemDeErro() {
        const mensagemErro = document.getElementById('mensagem-erro');
        mensagemErro.textContent = '';
    }
});
