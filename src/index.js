// Importa as bibliotecas necessárias do React
import React from 'react';
import ReactDOM from 'react-dom';

// Importa o componente App
import App from './App';

// Importa o arquivo de estilos globais
import './index.css';

// Renderiza o componente App no elemento com ID "root" no DOM
ReactDOM.render(
    <React.StrictMode>
        <App />
    </React.StrictMode>,
    document.getElementById('root')
);
