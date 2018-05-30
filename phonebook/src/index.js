import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import './semantic/dist/semantic.min.css';
//import App from './App';
import Phonebook from './components/Phonebook';
import registerServiceWorker from './registerServiceWorker';


ReactDOM.render(<Phonebook />, document.getElementById('root'));
registerServiceWorker();
