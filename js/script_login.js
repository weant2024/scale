// Seleciona o formulário de login pelo seu ID
document.getElementById('login-form').addEventListener('submit', function (event) {
    // Previne o comportamento padrão do envio do formulário para que possamos validar os dados primeiro
    event.preventDefault();

    // Obtém os valores dos campos de nome de usuário e senha
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // Verifica se os campos de nome de usuário e senha não estão vazios
    if (username === '' || password === '') {
        alert('Por favor, preencha ambos os campos de nome de usuário e senha.');
        return; // Interrompe o envio do formulário se os campos estiverem vazios
    }

    // Cria um objeto FormData para facilitar o envio dos dados do formulário
    const formData = new FormData();
    formData.append('username', username);
    formData.append('password', password);

    // Faz uma requisição assíncrona usando fetch para enviar os dados ao servidor
    fetch('process_login.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json()) // Converte a resposta do servidor para JSON
    .then(data => {
        // Verifica se a autenticação foi bem-sucedida
        if (data.success) {
            // Redireciona para o dashboard se o login for bem-sucedido
            window.location.href = 'dashboard.html';
        } else {
            // Exibe uma mensagem de erro se a autenticação falhar
            alert('Usuário ou senha incorretos');
        }
    })
    .catch(error => {
        // Exibe uma mensagem de erro se houver um problema com a requisição
        console.error('Erro na requisição:', error);
        alert('Ocorreu um erro ao processar sua solicitação. Por favor, tente novamente.');
    });
});
