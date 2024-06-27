import React from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Route, Switch } from 'react-router-dom';
import Header from './components/Layout/Header';
import Footer from './components/Layout/Footer';
import Content from './components/Layout/Content';
import NotFound from './components/NotFound';
import EscalaMensal from './components/Escala/EscalaMensal';
import EscalaSemanal from './components/Escala/EscalaSemanal';
import EscalaPessoal from './components/Escala/EscalaPessoal';
import EscalaContrato from './components/Escala/EscalaContrato';
import EscalaDia from './components/Escala/EscalaDia';
import QuantidadeHorasTrabalhadas from './components/Informacoes/QuantidadeHorasTrabalhadas';
import BancoHoras from './components/Informacoes/BancoHoras';
import Ferias from './components/Informacoes/Ferias';
import AtualizarCadastro from './components/Configuracao/AtualizarCadastro';
import ConfigPersonalizada from './components/Configuracao/ConfigPersonalizada';

function App() {
  return (
    <Router>
      <div className="App">
        <Header />
        <Switch>
          <Route path="/" exact component={Content} />
          <Route path="/escala_mensal" component={EscalaMensal} />
          <Route path="/escala_semanal" component={EscalaSemanal} />
          <Route path="/escala_pessoal" component={EscalaPessoal} />
          <Route path="/escala_contrato" component={EscalaContrato} />
          <Route path="/escala_dia" component={EscalaDia} />
          <Route path="/quanti_horas_trab" component={QuantidadeHorasTrabalhadas} />
          <Route path="/banco_horas" component={BancoHoras} />
          <Route path="/ferias" component={Ferias} />
          <Route path="/atualizar_cadastro" component={AtualizarCadastro} />
          <Route path="/config" component={ConfigPersonalizada} />
          <Route component={NotFound} />
        </Switch>
        <Footer />
      </div>
    </Router>
  );
}

ReactDOM.render(<App />, document.getElementById('app'));

export default App;
