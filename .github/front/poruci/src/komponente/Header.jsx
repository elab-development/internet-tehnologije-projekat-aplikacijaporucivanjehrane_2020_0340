import React, { useState } from "react";
import logoImage from "../images/logo.png";
import "../App.css"; // Dodajte stil
import { FaSearch } from "react-icons/fa";
import { FaCartShopping } from "react-icons/fa6";
import { Link } from "react-router-dom";

const Header = ({ brojProizvodaUKorpi, korisnik, odjaviti }) => {
  const [isSaved, setIsSaved] = useState(false);
  const [adresa, setAdresa] = useState("");

  return (
    <header className="app-header">
      <div className="logo-container">
        <img src={logoImage} alt="Logo" className="logo-image" />
        {/* <img className='card-img-top' src='' alt="" /> */}
        <span className="site-name">Quick Bite</span>
        <Link to="/" className="site-name">
          Početna strana
        </Link>
      </div>
      <div className="search-container">
        <i className="search-icon">
          <FaSearch />
        </i>
        {!isSaved ? (
          <input
            onKeyDown={(e) => {
              if (e.keyCode === 13) {
                setIsSaved(true);
              }
            }}
            onChange={(e) => setAdresa(e.target.value)}
            type="text"
            placeholder="Unesite adresu"
          />
        ) : (
          <div>
            {adresa}
            <button
              style={{ margin: "0 5px" }}
              onClick={() => {
                setAdresa("");
                setIsSaved(false);
              }}
            >
              X
            </button>
          </div>
        )}
      </div>
      <div className="cart-container">
        <i className="cart-icon">
          {/* <Link to="/korpa"> */}
            <FaCartShopping />
            <span className="cart-badge">{brojProizvodaUKorpi}</span>
          {/* </Link> */}
        </i>
        {!korisnik ? (
          <Link to="/login">
            <button className="sign-in-button">Sign In</button>
          </Link>
        ) : (
          <button className="sign-in-button" onClick={odjaviti}>SignOut</button>
        )}
      </div>
    </header>
  );
};

export default Header;
