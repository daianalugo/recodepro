import React from 'react ';
import { useSelector } from 'react-redux';
// import { useSelector, useDispatch } from 'react-redux';

// function App() {

//   const state = useSelector((state) => state.numerosReducer);
//   const nome = useSelector((state) => state.nomesReducer);
//   const dispatch = useDispatch();

   

  // console.log(state);

//   return (
//     <div>
//       {state}
//       <br />
//       {nome}
//       <br />

//       <button onClick={() =>dispatch({type: "ADICIONAR"})}>
//         Adicionar
//       </button>
      
//     </div>
//   );
// }



function App(){
  const [inputFrutas, setInputFrutas] = React.useState("");

  //redux
  const frutas = useSelector((state)=> state.frutas)
console.log(state);

  return(
    <div>
      <form>

        <input placeholder= "uma fruta ..."
          value={inputFrutas}
          onChange={(event) => setInputFrutas(event.target.value) } />

      </form>

      {frutas.map((fruta)=>{
        return (
          <li>{fruta.nome}</li>
        )
      })}
    </div>
  );
}

export default App;
