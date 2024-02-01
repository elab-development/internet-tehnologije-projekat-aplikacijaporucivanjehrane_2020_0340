import React from "react";
import Proizvod from "./Proizvod";
import axios from "axios";
import { useState, useEffect } from "react";
import { useParams } from "react-router-dom";
import Korpa from "./Korpa";
import useScrollNaVrh from "./useScrollNaVrh";
import DugmeScrollNaVrh from "./DugmeScrollNaVrh";

function SviProizvodi({ brojProizvodaUKorpi, setBrojProizvodaUKorpi }) {
  const [proizvodi, setProizvodi] = useState([]);
  const [korpa, setKorpa] = useState([]);
  const { restoranId } = useParams();
  useScrollNaVrh()
  const dodajProizvodUKorpu = (proizvod) => {
    setBrojProizvodaUKorpi(prevBroj => prevBroj + 1);
    setKorpa([...korpa, proizvod]);
  };

  const oduzmiProizvodIzKorpe = (proizvod) => {
    if (brojProizvodaUKorpi > 0) {
      setBrojProizvodaUKorpi(prevBroj => prevBroj - 1);
    
    }
    let niz = korpa.filter(pr => pr.id != proizvod.id)
    console.log(niz)
    setKorpa(niz)

  };

  useEffect(() => {
    const fetchData = async () => {
      try {
        const response = await axios.get(
          `http://127.0.0.1:8000/api/proizvodi-za-restoran/${restoranId}`
        );
        console.log(response.data.podaci);
        setProizvodi(response.data.podaci);
      } catch (error) {
        console.error("Greška pri dohvatanju proizvoda za restoran:", error);
      }
    };

    fetchData();
  }, [restoranId]);

  return (
    <div>
      {proizvodi?.map((p) => (
        <Proizvod
          proizvod={p}
          key={p.id}
          dodajProizvodUKorpu={dodajProizvodUKorpu}
          oduzmiProizvodIzKorpe={oduzmiProizvodIzKorpe}
          uKorpi = {1}
        />
      ))}
      <DugmeScrollNaVrh />
      <Korpa brojProizvodaUKorpi={brojProizvodaUKorpi} korpa={korpa} />
    </div>
  );
}

export default SviProizvodi;
