import { useEffect, useState } from "react";
import { api } from "../services/api";
import { useNavigate } from "react-router-dom";

interface Todo {
  id: string;
  title: string;
  completed: boolean;
}

export default function Dashboard() {
  const [todos, setTodos] = useState<Todo[]>([]);
  const [title, setTitle] = useState("");
  const navigate = useNavigate();

  async function loadTodos() {
    const res = await api.get("/todos");
    setTodos(res.data);
  }

  async function addTodo() {
    if (!title) return;
    await api.post("/todos", { title });
    setTitle("");
    loadTodos();
  }

  async function toggleTodo(id: string, completed: boolean) {
    await api.put(`/todos/${id}`, { completed: !completed });
    loadTodos();
  }

  async function deleteTodo(id: string) {
    await api.delete(`/todos/${id}`);
    loadTodos();
  }

  function logout() {
    localStorage.removeItem("token");
    navigate("/");
  }

  useEffect(() => {
    loadTodos();
  }, []);

  return (
    <div>
      <h1>Minhas Tarefas</h1>

      <button onClick={logout}>Logout</button>

      <div>
        <input
          placeholder="Nova tarefa"
          value={title}
          onChange={e => setTitle(e.target.value)}
        />
        <button onClick={addTodo}>Adicionar</button>
      </div>

      <ul>
        {todos.map(todo => (
          <li key={todo.id}>
            <span
              onClick={() => toggleTodo(todo.id, todo.completed)}
              style={{
                textDecoration: todo.completed ? "line-through" : "none",
                cursor: "pointer"
              }}
            >
              {todo.title}
            </span>
            <button onClick={() => deleteTodo(todo.id)}>❌</button>
          </li>
        ))}
      </ul>
    </div>
  );
}