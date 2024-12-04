import React from "react";
import { MapContainer, TileLayer, Marker, Popup } from "react-leaflet";
import { useState, useEffect } from "react";
import 'leaflet/dist/leaflet.css';
import { Icon} from "leaflet";

function Mapa() {
  
  const [restorani, setRestorani] = useState([]);

  const customIcon = new Icon({
    iconUrl: "https://cdn-icons-png.flaticon.com/512/9356/9356230.png",
    iconSize: [38, 38],
  });

  useEffect(() => {
    fetch('http://127.0.0.1:8000/api/restorani-koordinate')
      .then(response => response.json())
      .then(data => {
        console.log(data);
        setRestorani(data);
      })
      .catch(error => console.error('Error fetching restorani:', error));
  }, []);

  return (
    <MapContainer center={[44.786, 20.466]} zoom={12} className="MapaContainer">
      <TileLayer
        url="https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
        attribution='&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
      />

      {restorani.map(restoran => (
        <Marker key={restoran.id} position={[restoran.geografska_duzina, restoran.geografska_sirina]}  icon={customIcon}>
          <Popup>
            <strong>Naziv: {restoran.naziv}</strong>
            <p>Adresa:{restoran.adresa}</p>
            <p>Ocena: {restoran.ocena}</p>
          </Popup>
        </Marker>
      ))}
    </MapContainer>
  );

}

export default Mapa;
