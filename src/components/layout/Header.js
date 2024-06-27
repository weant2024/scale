// src/components/Layout/Header.js

// Importação das bibliotecas necessárias do React e do React Router
import React from 'react';
import { Link } from 'react-router-dom';

// Definição do componente de cabeçalho
function Header() {
  return (
    <header>
      {/* Menu de navegação */}
      <nav>
        <ul>
          {/* Link para a Home do Usuário */}
          <li><Link to="/home_usuario">Home Usuário</Link></li>
          {/* Link para a Home do Gestor */}
          <li><Link to="/home_gestor">Home Gestor</Link></li>
          {/* Link para a Home do Administrador */}
          <li><Link to="/home_admin">Home Admin</Link></li>
        </ul>
      </nav>
    </header>
  );
}

export default Header;
