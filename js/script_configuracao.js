document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('configForm');
    const feedbackSuccess = document.querySelector('.feedback.success');
    const feedbackError = document.querySelector('.feedback.error');

    form.addEventListener('submit', async function (event) {
        event.preventDefault();

        // Limpar feedbacks anteriores
        feedbackSuccess.classList.add('hidden');
        feedbackError.classList.add('hidden');

        // Validar o formulário
        const name = form.querySelector('#name').value.trim();
        const email = form.querySelector('#email').value.trim();
        const password = form.querySelector('#password').value.trim();

        if (!name || !email || !password) {
            alert('Por favor, preencha todos os campos.');
            return;
        }

        // Simular envio assíncrono
        try {
            // Aqui você pode fazer uma requisição AJAX para enviar os dados ao servidor
            // Por enquanto, vamos apenas simular um tempo de espera
            await simulateAsyncRequest();

            // Exibir feedback de sucesso
            feedbackSuccess.classList.remove('hidden');
            form.reset();
        } catch (error) {
            // Exibir feedback de erro
            feedbackError.classList.remove('hidden');
        }
    });

    // Função para simular envio assíncrono
    function simulateAsyncRequest() {
        return new Promise((resolve, reject) => {
            setTimeout(() => {
                const success = Math.random() < 0.8; // 80% de chance de sucesso

                if (success) {
                    resolve();
                } else {
                    reject(new Error('Erro ao processar o pedido.'));
                }
            }, 2000); // Tempo de espera de 2 segundos
        });
    }
});
