// src/App.js

// Importação das bibliotecas necessárias do React e do React Router
import React from 'react';
import { BrowserRouter as Router, Route, Switch } from 'react-router-dom';

// Importação dos componentes necessários
import Header from './components/Layout/Header'; // Componente do cabeçalho
import Footer from './components/Layout/Footer'; // Componente do rodapé
import HomeUsuario from './components/HomeUsuario'; // Componente da página Home do Usuário
import HomeGestor from './components/HomeGestor'; // Componente da página Home do Gestor
import HomeAdmin from './components/HomeAdmin'; // Componente da página Home do Administrador
import NotFound from './components/NotFound'; // Componente de página não encontrada

// Definição do componente principal da aplicação
function App() {
  return (
    <Router>
      <div className="App">
        {/* Renderização do cabeçalho */}
        <Header />

        {/* Configuração das rotas */}
        <Switch>
          <Route path="/" exact component={HomeUsuario} /> {/* Rota para a página inicial */}
          <Route path="/home_usuario" component={HomeUsuario} /> {/* Rota para a página Home do Usuário */}
          <Route path="/home_gestor" component={HomeGestor} /> {/* Rota para a página Home do Gestor */}
          <Route path="/home_admin" component={HomeAdmin} /> {/* Rota para a página Home do Administrador */}
          <Route component={NotFound} /> {/* Rota para página não encontrada */}
        </Switch>

        {/* Renderização do rodapé */}
        <Footer />
      </div>
    </Router>
  );
}

export default App;
