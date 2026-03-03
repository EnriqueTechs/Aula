import { useState } from 'react'
import './App.css'

function App() {
    const [visible, setVisible] = useState(true)
    const [randomNumber, setRandomNumberGenerator] = useState(0)
    const [hint, setHint] = useState("");
    
    const handleClick = () => {
      const randomNumber = Math.floor(Math.random() * 100) + 1
      setRandomNumberGenerator(randomNumber)
      setVisible(false)
    }
    const changeNumber = (event: React.ChangeEvent<HTMLInputElement>) => {
      const inputValue = parseInt(event.target.value, 10)
      if (inputValue === randomNumber) {
        alert('Congratulations! You guessed the number!')
        setVisible(true)
        setHint('')
      } else if (inputValue > randomNumber) {
        setHint("The number is smaller than your guess.")
      } else {
        setHint("The number is greater than your guess.")
      }
    }
    return (
  <div className='App'>
    <h1>Game</h1>
    <h3>{visible ? "Try to guess the number between 1 and 100!" : "Enter your guess:"}</h3>
    {visible && <button onClick={handleClick}>Start Game</button>}
    {!visible && <input type="number" onChange={changeNumber} />}
    {hint && !visible && <div>{hint}</div>}
  </div>
  )
}

export default App
