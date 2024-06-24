// modal.js

// Função para fechar o modal
export function fecharModal() {
    const modal = document.querySelector('.modal');
    if (modal) {
        // Se o modal existir, oculta definindo o estilo de display para 'none'
        modal.style.display = 'none';
    }
}

// Função para criar um modal com o conteúdo fornecido
export function criarModal(modalContent) {
    // Cria um elemento div para representar o modal
    const modal = document.createElement('div');
    modal.classList.add('modal'); // Adiciona a classe 'modal' ao modal

    // Define o conteúdo HTML do modal com base no argumento fornecido
    modal.innerHTML = modalContent;

    // Retorna o modal criado
    return modal;
}
