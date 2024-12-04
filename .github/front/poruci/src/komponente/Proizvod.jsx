import React from 'react'
import { FaPlus, FaMinus } from "react-icons/fa";

function Proizvod({ proizvod, dodajProizvodUKorpu, oduzmiProizvodIzKorpe, uKorpi, kisa }) {
  return (
    <div className='restoranContainer'>
    <div className='slikaContainer'>
      <img src={proizvod.slika} alt="" className='slika'/>
    </div>
    <div className='infoContainer'>
      <h2>{proizvod.naziv}</h2>
      <p>Naziv: {proizvod.naziv_proizvoda}</p>
      
      {kisa === false ?
        <p>Cena: {proizvod.cena}</p>
        :
        <p>Cena: {parseFloat(proizvod.cena) + 100}</p>
      }
      <p>Opis: {proizvod.opis_proizvoda}</p>
      <p>Prilozi: {proizvod.prilozi}</p>

      {uKorpi == 1 ?
        <div>
        {/* <button className="btn" onClick={() => dodajProizvodUKorpu(proizvod)}><FaPlus /></button> */}
        <button className="btn" onClick={() => dodajProizvodUKorpu(proizvod)}><FaPlus /></button>
        <button className="btn" onClick={() => oduzmiProizvodIzKorpe(proizvod)}><FaMinus /></button>
      </div>
      :
      <p style={{ fontWeight: 'bold' }}>Ovaj proizvod je u korpi</p>}
    </div>
  </div>
  )
}

export default Proizvod