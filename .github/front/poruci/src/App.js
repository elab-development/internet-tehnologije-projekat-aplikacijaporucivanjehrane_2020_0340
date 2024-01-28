import './App.css';
import Header from './komponente/Header';
import Home from './komponente/Home';
import Footer from './komponente/Footer';
import {BrowserRouter, Routes, Route} from 'react-router-dom';
import { useState, useEffect } from 'react';
import axios from 'axios';
import SviRestorani from './komponente/SviRestorani';


function App() {
  const [restorani, setRestorani] = useState(null);
  

  useEffect(()=>{
    const fetchData = async () => {
    const response = await axios.get('./restoraniData.json');
    console.log(response.data.restorani);
    setRestorani(response.data.restorani);
    }

   fetchData();
  }, [])


  return (
    <BrowserRouter className="body">
      <Header/>
      <Routes>
        <Route path='/' element = {
          <Home/>
        }/>

      <Route path='/rostilj' element = {
          <SviRestorani restorani={restorani}/>
        }/>
      
      </Routes>
      <Footer/>
    </BrowserRouter>
  );
}

export default App;
