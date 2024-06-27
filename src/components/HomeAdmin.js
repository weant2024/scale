// Importa a biblioteca React
import React from 'react';
// Importa o componente Link do React Router DOM para navegação entre páginas
import { Link } from 'react-router-dom';

// Importa o arquivo de estilos CSS específico para este componente
import '../css/styles_home_admin.css';

// Define o componente HomeAdmin
const HomeAdmin = () => {
    return (
        <div className="home-admin">
            {/* Cabeçalho */}
            <header>
                {/* Div para a logo e o nome da empresa */}
                <div className="logo">
                    <img src="/imagens/logo.png" alt="Logo WEANT" />
                    <span>WEANT</span>
                </div>
                {/* Menu de navegação */}
                <nav>
                    <ul>
                        {/* Link para a página do Usuário */}
                        <li><Link to="/home_usuario">Página do Usuário</Link></li>
                        {/* Link para a página do Gestor */}
                        <li><Link to="/home_gestor">Página do Gestor</Link></li>
                        <li><Link to="/home_admin">Home</Link></li>
                    </ul>
                </nav>
            </header>

            {/* Conteúdo principal */}
            <main>
                {/* Seção de introdução */}
                <section id="introducao">
                    <h2>Bem-vindo à Home do Administrador</h2>
                    <p>Aqui você encontrará informações relevantes para administradores.</p>
                </section>

                {/* Outras seções e conteúdo específico para administradores */}
            </main>

            {/* Rodapé */}
            <footer>
                <p>&copy; 2024 WEANT. Todos os direitos reservados.</p>
            </footer>
        </div>
    );
}

// Exporta o componente HomeAdmin como padrão do módulo
export default HomeAdmin;
