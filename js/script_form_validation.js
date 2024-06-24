// Adiciona um listener de evento de submissão ao formulário com o ID 'perfilForm'
document.getElementById('perfilForm').addEventListener('submit', function(event) {
    // Impede o comportamento padrão de envio do formulário
    event.preventDefault();
    
    // Obtém os valores dos campos 'nome', 'email' e 'login' do formulário
    const nome = document.getElementById('nome').value;
    const email = document.getElementById('email').value;
    const login = document.getElementById('login').value;

    // Inicializa uma variável de controle de validade dos dados
    let dadosValidos = true;

    // Verifica se o nome é único (simulação com nome 'João' já existente)
    if (nome === 'João') {
        // Exibe a mensagem de erro para o campo 'nome' se o nome já existir
        document.getElementById('nome-error').style.display = 'block';
        // Define dados como inválidos
        dadosValidos = false;
    } else {
        // Oculta a mensagem de erro para o campo 'nome' se o nome for válido
        document.getElementById('nome-error').style.display = 'none';
    }

    // Verifica se o email é único (simulação com email 'joao@example.com' já existente)
    if (email === 'joao@example.com') {
        // Exibe a mensagem de erro para o campo 'email' se o email já existir
        document.getElementById('email-error').style.display = 'block';
        // Define dados como inválidos
        dadosValidos = false;
    } else {
        // Oculta a mensagem de erro para o campo 'email' se o email for válido
        document.getElementById('email-error').style.display = 'none';
    }

    // Verifica se o login é único (simulação com login 'joao123' já existente)
    if (login === 'joao123') {
        // Exibe a mensagem de erro para o campo 'login' se o login já existir
        document.getElementById('login-error').style.display = 'block';
        // Define dados como inválidos
        dadosValidos = false;
    } else {
        // Oculta a mensagem de erro para o campo 'login' se o login for válido
        document.getElementById('login-error').style.display = 'none';
    }

    // Se todos os dados são válidos, submete o formulário
    if (dadosValidos) {
        // Exibe uma mensagem de alerta indicando que o formulário foi enviado com sucesso
        alert('Formulário enviado com sucesso!');
        // Envia o formulário (pode ser via AJAX ou normalmente)
        document.getElementById('perfilForm').submit();
    }
});
