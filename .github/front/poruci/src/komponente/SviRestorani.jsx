import React from 'react'
import Restoran from './Restoran';
import { useState, useEffect } from 'react';
import axios from 'axios';
import { Link } from 'react-router-dom';

function SviRestorani({ kategorija }) {
  const [restorani, setRestorani] = useState([]);

    useEffect(() => {
      let kategorija_id = 0;

      if (kategorija === 'rostilj') {
        kategorija_id = 1;
      } else if (kategorija === 'poslastice') {
        kategorija_id = 2;
      } else if (kategorija === 'pica') {
        kategorija_id = 3;
      }

    const fetchData = async () => {
      try {
        const response = await axios.get(`http://127.0.0.1:8000/api/restorani-za-kategoriju/${kategorija_id}`);
        console.log(response.data.podaci);
        setRestorani(response.data.podaci);
      } catch (error) {
        console.error('Greška pri dohvatanju restorana za kategoriju:', error);
      }
    };

    fetchData();
  }, [kategorija]);
  // const filtriraniRestorani = restorani?.filter(r => r.kategorija_naziv.toLowerCase() === kategorija.toLowerCase());
  // console.log(filtriraniRestorani);
  return (
    <div>
      {restorani?.map((r) => (
        <Link to={`/proizvodi/${r.id}`} key={r.id}>
        <Restoran restoran={r} />
      </Link>
    
   
        //<Restoran restoran={r} key={r.id} />
      ))}
    </div>
  
  
    // <div >
    //     {restorani?.map((r) => (
    //     <Restoran restoran={r} key={r.id} />
    // ))}
    // </div>
  )
}

export default SviRestorani