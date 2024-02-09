import React from "react";
import { useState } from "react";
import axios from "axios";
import { Link, useNavigate } from "react-router-dom";

const Login = ({ setKorisnik, setAccess }) => {
  let navigate = useNavigate();

  const [user, setUser] = useState({
    email: "",
    password: "",
  });

  function handleInput(e) {
    let newUser = user;
    newUser[e.target.name] = e.target.value;
    setUser(newUser);
  }

  function handleLogin(e) {
    e.preventDefault();

    axios
      .post("http://127.0.0.1:8000/api/login", user)
      .then((res) => {
        console.log(res.data);
        console.log(res.data.access_token);
        setKorisnik(res.data.korisnik);
        setAccess(res.data.access_token);
        localStorage.setItem("korisnik", res.data.korisnik);
        localStorage.setItem("access_token", res.data.access_token);
        navigate("/");
      })
      .catch((e) => {
        console.log(e);
      });
  }

  return (
    <section className="reset-password-container">
      <div className="container py-5 h-100">
        <div className="row d-flex justify-content-center align-items-center h-100">
          <div className="col-12 col-md-8 col-lg-6 col-xl-5">
            <div
              className="card bg-dark text-white"
              style={{ borderRadius: 1 + "rem" }}
            >
              <div className="card-body p-5 text-center">
                <form onSubmit={handleLogin}>
                  <div className="mb-md-5 mt-md-4 pb-5">
                    <p className="text-white-50 mb-5">
                      Unesite email i password
                    </p>
                    <input
                      type="text"
                      id="typeEmailX"
                      placeholder="Email"
                      name="email"
                      onInput={handleInput}
                    />
                    <input
                      type="password"
                      id="typePasswordX"
                      placeholder="Password"
                      name="password"
                      onInput={handleInput}
                    />
                  </div>
                  <button className="btn" type="submit">
                    Login
                  </button>
                  <div>
                    <p className="mb-0">
                      Nemate nalog?{" "}
                      <a href="/register" className="text-white-50 fw-bold">
                        Sign Up
                      </a>
                    </p>
                  </div>
                  <div>
                    Zaboravio(la) si lozinku?{" "}
                    <Link to="/reset-password">Resetuj lozinku</Link>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Login;
