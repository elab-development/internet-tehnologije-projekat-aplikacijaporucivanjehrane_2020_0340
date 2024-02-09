import React, { useState, useEffect } from "react";
import axios from "axios";
import { MdWbSunny, MdCloud } from "react-icons/md";
import { IoRainy, IoSnow } from "react-icons/io5";

function VremenskaPrognoza({ setKisa }) {
  const [weatherData, setWeatherData] = useState(null);
  const apiKey = "a9c97660ef0abae96be86fc069d31923";
  const city = "Beograd";

  useEffect(() => {
    const fetchWeatherData = async () => {
      try {
        const response = await axios.get(
          `http://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}`
        );
        setWeatherData(response.data);
      } catch (error) {
        console.error("Error fetching weather data:", error);
      }
    };

    fetchWeatherData();
  }, [apiKey, city]);

  const kelvinToCelsius = (kelvin) => kelvin - 273.15;

  return (
    <div className="weather-container">
      <h2>Vremenska prognoza za {city}</h2>
      {weatherData && (
        <div className="weather-details">
          <p>
            Temperatura: {kelvinToCelsius(weatherData.main.temp).toFixed(2)} °C
          </p>
          <p>Opis: {weatherData.weather[0].description}</p>
          {weatherData.weather[0].description
            .toLowerCase()
            .includes("clear") && (
            <div className="icon">
              <MdWbSunny />
            </div>
          )}
          {weatherData.weather[0].description
            .toLowerCase()
            .includes("cloud") && (
            <div className="icon">
              <MdCloud />
            </div>
          )}
          {weatherData.weather[0].description
            .toLowerCase()
            .includes("rain") && (
            <div className="icon">
              <IoRainy />
              {setKisa(true)}
            </div>
          )}
          {weatherData.weather[0].description
            .toLowerCase()
            .includes("snow") && (
            <div className="icon">
              <IoSnow />
            </div>
          )}
          <p>
            Napomena: Ako je kišno vreme, cena proizvoda se povećava za 100 dinara zbog otežane dostave...
          </p>
        </div>
      )}
    </div>
  );
}

export default VremenskaPrognoza;
