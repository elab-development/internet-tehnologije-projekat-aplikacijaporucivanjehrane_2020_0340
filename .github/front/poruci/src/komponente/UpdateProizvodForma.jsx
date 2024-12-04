import React, { useState, useEffect } from "react";

function UpdateProizvodForma({ access_token }) {
    
  const [proizvod, setProizvod] = useState({
    id: "",
    naziv_proizvoda: "",
    cena: "",
    opis_proizvoda: "",
    kategorija_id: "",
    restoran_id: "",
    prilozi: "",
    slika: "",
  });

   const [csrfToken, setCsrfToken] = useState("");

   useEffect(() => {
     // Dohvati CSRF token iz kolačića i postavi ga u state
     const token = document.head.querySelector('meta[name="csrf-token"]');
     if (token) {
         setCsrfToken(token.content);
     } else {
         console.error('CSRF token kolačić nije pronađen!');
     }
 }, []);

  const handleSubmit = async (e) => {
    e.preventDefault();

    try {
      console.log('Pristupni token:', access_token ? access_token : 'N/A');
      const response = await fetch(
        `http://127.0.0.1:8000/api/proizvodi/${proizvod.id}`,
        {
          method: "PUT",
          headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": csrfToken,
            'Authorization': `Bearer ${access_token}`
          },
          body: JSON.stringify(proizvod),
        }
      );

      const data = await response.json();
      console.log(response)
      console.log(data);
    } catch (error) {
      console.error("Greška prilikom slanja zahteva:", error);
    }
  };

  return (
    <div className="container mt-5">
      <form onSubmit={handleSubmit}>
        <div className="form-group">
          <label htmlFor="id">ID proizvoda</label>
          <input
            type="text"
            name="id"
            className="form-control"
            value={proizvod.id}
            onChange={(e) => setProizvod({ ...proizvod, id: e.target.value })}
            required
          />
        </div>

        <div className="form-group">
          <label htmlFor="naziv_proizvoda">Naziv proizvoda</label>
          <input
            type="text"
            name="naziv_proizvoda"
            className="form-control"
            value={proizvod.naziv_proizvoda}
            onChange={(e) =>
              setProizvod({ ...proizvod, naziv_proizvoda: e.target.value })
            }
            required
          />
        </div>

        <div className="form-group">
          <label htmlFor="cena">Cena</label>
          <input
            type="text"
            name="cena"
            className="form-control"
            value={proizvod.cena}
            onChange={(e) => setProizvod({ ...proizvod, cena: e.target.value })}
            required
          />
        </div>

        <div className="form-group">
          <label htmlFor="opis_proizvoda">Opis proizvoda</label>
          <input
            type="text"
            name="opis_proizvoda"
            className="form-control"
            value={proizvod.opis_proizvoda}
            onChange={(e) =>
              setProizvod({ ...proizvod, opis_proizvoda: e.target.value })
            }
            required
          />
        </div>

        <div className="form-group">
          <label htmlFor="kategorija_id">Kategorija ID</label>
          <input
            type="text"
            name="kategorija_id"
            className="form-control"
            value={proizvod.kategorija_id}
            onChange={(e) =>
              setProizvod({ ...proizvod, kategorija_id: e.target.value })
            }
            required
          />
        </div>

        <div className="form-group">
          <label htmlFor="restoran_id">Restoran ID</label>
          <input
            type="text"
            name="restoran_id"
            className="form-control"
            value={proizvod.restoran_id}
            onChange={(e) =>
              setProizvod({ ...proizvod, restoran_id: e.target.value })
            }
            required
          />
        </div>

        <div className="form-group">
          <label htmlFor="prilozi">Prilozi</label>
          <input
            type="text"
            name="prilozi"
            className="form-control"
            value={proizvod.prilozi}
            onChange={(e) =>
              setProizvod({ ...proizvod, prilozi: e.target.value })
            }
            required
          />
        </div>

        <div className="form-group">
          <label htmlFor="slika">Slika</label>
          <input
            type="text"
            name="slika"
            className="form-control"
            value={proizvod.slika}
            onChange={(e) =>
              setProizvod({ ...proizvod, slika: e.target.value })
            }
            required
          />
        </div>

        <button type="submit" className="btn">
          Azuriraj proizvod
        </button>
      </form>
    </div>
  );
}

export default UpdateProizvodForma;
