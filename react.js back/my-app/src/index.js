import React from 'react';
import ReactDOM from 'react-dom';
import App from './App';

import {Provider} from 'react-redux';
import store from './store';

// import {combineReducers, createStore} from 'redux';
// import {Provider} from 'react-redux';

// function numerosReducer(state = 0, action){
//   if(action.type === "ADICIONAR"){
//     return state +1;
//   }
//   else{
//     return state;
//   }
// }


// Function nomesReducer(state = "Daiana", action){
//   if(action.type === "TEXTO"){
//     return state;
//   }else {
//     return state;
//   }
// }

// const reducers = combineReducers({numerosReducer, nomesReducer})
// const store = createStore(
//   reducers,
//   window.__REDUX_DEVTOOLS_EXTENSION__&& window.__REDUX_DEVTOOLS_EXTENSION__()
//   );

// ReactDOM.render( 
//   <Provider store={store}>
//     <App />
//   </Provider>,  
//   document.getElementById('root')
// );



ReactDOM.render( 
  Provider>  
    <App />
    </Provider>,
  document.getElementById('root')
);

