import React from 'react'

function Proizvod() {
  return (
    <div className='restoranContainer'>
    <div className='slikaContainer'>
      <img src={restoran.slika} alt="" className='slika'/>
    </div>
    <div className='infoContainer'>
      <h2>{restoran.naziv}</h2>
      <p>Ocena: {restoran.ocena}</p>
      <p>Opis: {restoran.opis}</p>
      <p>Adresa: {restoran.adresa}</p>
      <p>E-mail: {restoran.email}</p>
    </div>
  </div>
  )
}

export default Proizvod