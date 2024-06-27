// Importa a biblioteca React
import React from 'react';

// Define o componente Content como uma função de componente
const Content = ({ children }) => {
    return (
        <div className="content">
            {children}
        </div>
    );
}

// Exporta o componente Content como o padrão do módulo
export default Content;
