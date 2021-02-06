import {createStore} from 'redux';

function reducer(state =0, action){
    if(action.type === "ADICIONAR"){
        return state +1;
    }else {
        return state;
    }
}

conts store = createStore(
    reducer, 
    window.__REDUX_DEVTOOLS_EXTENSION__&& window.__REDUX_DEVTOOLS_EXTENSION__()
);

export default store;