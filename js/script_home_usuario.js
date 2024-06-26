document.addEventListener('DOMContentLoaded', function() {
    // Oculta todas as seções ao carregar a página
    document.querySelectorAll('main section').forEach(section => {
        section.style.display = 'none';
    });

    // Exibe a seção de introdução por padrão
    document.getElementById('introducao').style.display = 'block';

    // Função para navegação suave ao clicar nos links âncora
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault(); // Previne o comportamento padrão do link

            // Obtém o alvo da âncora (ID da seção)
            const targetId = this.getAttribute('href').substring(1);

            // Rola suavemente até a seção correspondente
            document.getElementById(targetId).scrollIntoView({
                behavior: 'smooth' // Comportamento de rolagem suave
            });
        });
    });

    // Função para exibir as informações correspondentes ao clicar no submenu
    document.querySelectorAll('.submenu a').forEach(submenuAnchor => {
        submenuAnchor.addEventListener('click', function(e) {
            e.preventDefault(); // Previne o comportamento padrão do link

            // Oculta todas as seções
            document.querySelectorAll('main section').forEach(section => {
                section.style.display = 'none'; // Esconde a seção
            });

            // Obtém o ID da seção correspondente ao submenu clicado
            const sectionId = this.getAttribute('data-section-id');

            // Exibe a seção correspondente
            document.getElementById(sectionId).style.display = 'block'; // Mostra a seção
        });
    });
});
