import React from 'react ';
import { useSelector, useDispatch } from 'react-redux';
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
  const frutas = useSelector((state)=> state.frutas);
  const dispatch = useDispatch(); 
// console.log(state);


function adicionarFruta(event){
  event.preventDefault();

  const objFruta={
    nome:inputFutas
  }

  dispatch({type:"ADICIONAR", value: objFruta});

}

  return(
    <div>
      <form onSubmit={adicionarFruta}>

        <input placeholder= "uma fruta ..."
          value={inputFrutas}
          onChange={(event) => setInputFrutas(event.target.value) } />
      </form>

      <button>
        Enviar
      </button>

      {frutas.map((fruta)=>{
        return (
          <li>{fruta.nome}</li>
        )
      })}
    </div>
  );
}

export default App;
