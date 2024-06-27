// Espera que o documento esteja totalmente carregado antes de executar o script
document.addEventListener('DOMContentLoaded', () => {
    // Seleciona todos os links de navegação que possuem o atributo data-section-id
    const navLinks = document.querySelectorAll('nav ul li a[data-section-id]');

    // Adiciona um evento de clique a cada link de navegação
    navLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            // Previne o comportamento padrão do link (navegação)
            e.preventDefault();

            // Obtém o ID da seção a ser exibida a partir do atributo data-section-id
            const sectionId = link.getAttribute('data-section-id');
            showSection(sectionId);
        });
    });

    // Função para exibir a seção correspondente e esconder as outras
    function showSection(sectionId) {
        // Seleciona todas as seções principais
        const sections = document.querySelectorAll('main section');

        // Esconde todas as seções
        sections.forEach(section => {
            section.style.display = 'none';
        });

        // Exibe a seção correspondente ao ID fornecido
        const targetSection = document.getElementById(sectionId);
        if (targetSection) {
            targetSection.style.display = 'block';
        }
    }

    // Exibe a seção inicial (pode ser ajustada conforme necessário)
    showSection('introducao');
});
