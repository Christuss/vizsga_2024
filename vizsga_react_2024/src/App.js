import './App.css';
import Form from './components/Form';
import Lista from './components/Lista';
import 'bootstrap/dist/css/bootstrap.min.css';

function App() {
  return (
    <div className="App container">
      <h1>Kizöldítjük a Földet!</h1>
      <Form/>
      <Lista/>
    </div>
  );
}

export default App;
