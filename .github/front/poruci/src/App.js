import './App.css';
import Header from './komponente/Header';
import Home from './komponente/Home';
import Footer from './komponente/Footer';
import {BrowserRouter, Routes, Route} from 'react-router-dom';
import { useState, useEffect } from 'react';
import axios from 'axios';
import SviRestorani from './komponente/SviRestorani';
import SviProizvodi from './komponente/SviProizvodi';
import Login from './komponente/Login';
import Register from './komponente/Register';


function App() {
  const [restorani, setRestorani] = useState(null);

  useEffect(()=>{
    const fetchData = async () => {
    const response = await axios.get('http://127.0.0.1:8000/api/restorani');
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

      <Route path='/rostilj' element={<SviRestorani restorani={restorani} kategorija='rostilj' />} />
      <Route path='/poslastice' element={<SviRestorani restorani={restorani} kategorija='poslastice' />} />
      <Route path='/pica' element={<SviRestorani restorani={restorani} kategorija='pica' />} />
      
      <Route path="/proizvodi/:restoranId" element={<SviProizvodi />} />

      <Route path='/login' element={<Login/>} />
      <Route path="/register" element={<Register/>} />
      </Routes>
      <Footer/>
    </BrowserRouter>
  );
}

export default App;
