import React from 'react ';
import { useSelector, useDispatch } from 'react-redux';

function App() {

  const state = useSelector((state) => state.numerosReducer);
  const nome = useSelector((state) => state.nomesReducer);
  const dispatch = useDispatch();

   

  // console.log(state);

  return (
    <div>
      {state}
      <br />
      {nome}
      <br />

      <button onClick={() =>dispatch({type: "ADICIONAR"})}>
        Adicionar
      </button>
      
    </div>
  );
}

export default App;
