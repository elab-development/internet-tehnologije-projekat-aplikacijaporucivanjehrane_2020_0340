import React from 'react'
import Proizvod from './Proizvod'

function Korpa({ proizvodi, korpa,  }) {
  return (
    <div >
        <h2>Vaša korpa:</h2>
        {korpa?.map((p) => (
        <Proizvod proizvod={p} key={p.id} dodajProizvodUKorpu={()=> {}} uKorpi = {0} />
    ))}
    </div>
  )
}

export default Korpa
