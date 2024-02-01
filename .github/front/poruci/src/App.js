import "./App.css";
import Header from "./komponente/Header";
import Home from "./komponente/Home";
import Footer from "./komponente/Footer";
import { BrowserRouter, Routes, Route } from "react-router-dom";
import { useState, useEffect } from "react";
import SviRestorani from "./komponente/SviRestorani";
import SviProizvodi from "./komponente/SviProizvodi";
import Login from "./komponente/Login";
import Register from "./komponente/Register";
import Korpa from "./komponente/Korpa";
import axios from "axios";

function App() {
  const [brojProizvodaUKorpi, setBrojProizvodaUKorpi] = useState(0);
  const [korisnik, setKorisnik] = useState(localStorage.getItem("Korisnik") || null)

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
    localStorage.removeItem(korisnik)
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
            />
          }
        />
        {/* <Route path="/korpa" element={<Korpa proizvodi={[]} />} /> */}
        {/* <Route path="/korpa" element={<Korpa/>} /> */}
        <Route path="/login" element={<Login setKorisnik={setKorisnik} />} />
        <Route path="/register" element={<Register />} />
      </Routes>
      <Footer />
    </BrowserRouter>
  );
}

export default App;
