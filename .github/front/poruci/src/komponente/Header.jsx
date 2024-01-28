import React from 'react';
import logoImage from '../images/logo.png';
import '../App.css'; // Dodajte stil
import { FaSearch } from "react-icons/fa";
import { FaCartShopping } from "react-icons/fa6";

const Header = () => {
  return (
    <header className="app-header">
      <div className="logo-container">
      <img src={logoImage} alt="Logo" className="logo-image" />
      {/* <img className='card-img-top' src='' alt="" /> */}
        <span className="site-name">Quick Bite</span>
      </div>
      <div className="search-container">
        <i className="search-icon">
        <FaSearch />
        </i>
        <input type="text" placeholder="Unesite adresu" />
      </div>
      <div className="cart-container">
        <i className="cart-icon">
        <FaCartShopping />
        </i>
        <button className="sign-in-button">Sign In</button>
      </div>
    </header>
  );
};

export default Header;
