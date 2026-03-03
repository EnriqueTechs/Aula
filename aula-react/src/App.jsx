import { useState } from 'react'
import './App.css'

function App() {
  const [number, setNumber] = useState("")

  return (
    <div style={{ padding: "20px", fontFamily: "Arial" }}>
      <h1>Tabuada</h1>

      <input
        type="number"
        placeholder="Digite um número"
        value={number}
        onChange={(e) => setNumber(e.target.value)}
      />

      {number !== "" && (
        <div className="grid">
          {Array.from({ length: 50, }, (_, i) => (
            <div className="item" key={i}>
              {number} x {i + 1} = {number * (i + 1)}
            </div>
          ))}
        </div>
      )}
    </div>
  )
}

export default App
