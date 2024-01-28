import React from 'react'
import Proizvod from './Proizvod'

function SviProizvodi({ proizvodi }) {
  return (
    <div >
        {proizvodi?.map((p) => (
        <Proizvod proizvod={p} key={p.id} />
    ))}
    </div>
  )
}

export default SviProizvodi