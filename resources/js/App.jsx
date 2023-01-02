import React from 'react';
import { createRoot } from 'react-dom/client'
import Home from './component/Home';

export default function App(){
    return(
        <Home/>
    );
}

if(document.getElementById('root')){
    createRoot(document.getElementById('root')).render(<App />)
}