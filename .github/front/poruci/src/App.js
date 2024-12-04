import "./App.css";
import Header from "./komponente/Header";
import Home from "./komponente/Home";
import Footer from "./komponente/Footer";
import { BrowserRouter, Routes, Route } from "react-router-dom";
import { useState } from "react";
import SviRestorani from "./komponente/SviRestorani";
import SviProizvodi from "./komponente/SviProizvodi";
import Login from "./komponente/Login";
import Register from "./komponente/Register";
import Mapa from "./komponente/Mapa";
import VremenskaPrognoza from "./komponente/VremenskaPrognoza";
import UpdateProizvodForma from "./komponente/UpdateProizvodForma";
import ResetPassword from "./komponente/ResetPassword";

function App() {
  const [brojProizvodaUKorpi, setBrojProizvodaUKorpi] = useState(0);
  const [korisnik, setKorisnik] = useState(localStorage.getItem("korisnik") || null)
  const [access_token, setAccess] = useState(localStorage.getItem("access_token") || null)
  const [kisa, setKisa] = useState(false)

  const dodajProizvodUKorpu = () => {
    setBrojProizvodaUKorpi((prevBroj) => prevBroj + 1);
  };
 
  const oduzmiProizvodIzKorpe = () => {
    if (brojProizvodaUKorpi > 0) {
      setBrojProizvodaUKorpi((prevBroj) => prevBroj - 1);
    }
  };
  const odjaviti = () =>{
    setKorisnik(null)
    localStorage.removeItem("korisnik")
    localStorage.removeItem("access_token")
  }
  return (
    <BrowserRouter>
      <Header brojProizvodaUKorpi={brojProizvodaUKorpi} korisnik = {korisnik} odjaviti = {odjaviti}/>
      <Routes>
        <Route path="/" element={<Home />} />

        <Route
          path="/rostilj"
          element={<SviRestorani kategorija="rostilj" />}
        />
        <Route
          path="/poslastice"
          element={<SviRestorani kategorija="poslastice" />}
        />
        <Route path="/pica" element={<SviRestorani kategorija="pica" />} />
        <Route
          path="/proizvodi/:restoranId"
          element={
            <SviProizvodi
              brojProizvodaUKorpi
              dodajProizvodUKorpu={dodajProizvodUKorpu}
              oduzmiProizvodIzKorpe={oduzmiProizvodIzKorpe}
              setBrojProizvodaUKorpi={setBrojProizvodaUKorpi}
              kisa={kisa}
            />
          }
        />
        <Route path="/login" element={<Login setKorisnik={setKorisnik} setAccess={setAccess}/>} />
        <Route path="/reset-password" element={<ResetPassword />} />
        <Route path="/register" element={<Register />} />
        <Route path="/mapa" element={<Mapa/>}/>
        <Route path = "/vreme" element = {<VremenskaPrognoza setKisa = {setKisa}/>}/>
        <Route path = "/csrf" element = {<UpdateProizvodForma access_token={access_token}/>}/>
      </Routes>
      <Footer />
    </BrowserRouter>
  );
}

export default App;
