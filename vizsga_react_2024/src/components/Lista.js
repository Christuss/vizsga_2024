import DataService from "../DataService";
import { useState } from "react";

function Lista() {
  const DS = new DataService();
  DS.get('http://localhost:8000/api/bejegyzesek/1', listaBeallit);
  const [lista, setLista] = useState([]);

  function listaBeallit(iras) {
    setLista(iras);
  }

  return (
    <div className="Lista">
      <table className="table">
        <thead>
          <tr>
            <th>Osztály</th>
            <th>Tevékenység</th>
            <th>Pont</th>
            <th>Státusz</th>

          </tr>
        </thead>
        <tbody>
          {lista.map((elem) =>
            <tr>
              <td>{elem.osztaly_id}</td>
              <td>{elem.tevekenyseg_nev}</td>
              <td>{elem.pontszam}</td>
              <td>{elem.allapot}</td>
            </tr>
            
          )}

        </tbody>
      </table>
    </div>
  );
}

export default Lista;
