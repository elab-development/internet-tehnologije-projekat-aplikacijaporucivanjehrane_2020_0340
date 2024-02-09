import React, { useState } from "react";
import axios from "axios";
import Swal from "sweetalert2";
import { useNavigate } from "react-router-dom";

const ResetPassword = () => {
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");
  const [confirmPassword, setConfirmPassword] = useState("");
  const [message, setMessage] = useState("");
  const [error, setError] = useState("");
  
  let navigate = useNavigate();

  const handleResetPassword = async () => {
    try {
      const response = await axios.post(
        "http://127.0.0.1:8000/api/reset-password",
        {
          email,
          password,
          password_confirmation: confirmPassword,
        }
      );
      Swal.fire({
        icon: "success",
        title: "Lozinka je promenjena!",
      });
      navigate("/login");
    } catch (error) {
      if (error.response.data.error === "Korisnik nije pronadjen") {
        Swal.fire({
          icon: "error",
          title: "Korisnik nije pronadjen",
        });
      } else {
        Swal.fire({
          icon: "error",
          title: "Lozinka se nije resetovala",
        });
      }
    }
  };

  return (
    <div className="reset-password-container">
      <h2>Resetuj lozinku</h2>
      <input
        type="email"
        placeholder="Email"
        value={email}
        onChange={(e) => setEmail(e.target.value)}
      />
      <input
        type="password"
        placeholder="New Password"
        value={password}
        onChange={(e) => setPassword(e.target.value)}
      />
      <input
        type="password"
        placeholder="Confirm New Password"
        value={confirmPassword}
        onChange={(e) => setConfirmPassword(e.target.value)}
      />
      <button className = "btn" onClick={handleResetPassword}>
        Resetuj lozinku
    </button>

      {message && <div>{message}</div>}
      {error && <div>{error}</div>}
    </div>
  );
};

export default ResetPassword;