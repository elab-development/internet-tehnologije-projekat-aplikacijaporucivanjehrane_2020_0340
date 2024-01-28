import React from 'react'
import Restoran from './Restoran'

function SviRestorani({ restorani }) {
  return (
    <div >
        {restorani?.map((r) => (
        <Restoran restoran={r} key={r.id} />
    ))}
    </div>
  )
}

export default SviRestorani