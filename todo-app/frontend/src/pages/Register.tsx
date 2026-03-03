import { useState } from "react";
import { useNavigate, Link } from "react-router-dom";
import { api } from "../services/api";

export default function Register() {
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");
  const navigate = useNavigate();

  async function handleRegister() {
    await api.post("/auth/register", { email, password });
    navigate("/");
  }

  return (
    <div>
      <h1>Registro</h1>
      <input placeholder="Email" onChange={e => setEmail(e.target.value)} />
      <input type="password" placeholder="Senha" onChange={e => setPassword(e.target.value)} />
      <button onClick={handleRegister}>Criar Conta</button>

      <p>
        Já tem conta? <Link to="/">Login</Link>
      </p>
    </div>
  );
}