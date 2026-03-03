import { Router } from "express";
import { PrismaClient } from "@prisma/client";
import { auth, AuthRequest } from "../middlewares/auth";

const router = Router();
const prisma = new PrismaClient();

router.use(auth);

// Listar
router.get("/", async (req: AuthRequest, res) => {
  const todos = await prisma.todo.findMany({
    where: { userId: req.userId }
  });

  res.json(todos);
});

// Criar
router.post("/", async (req: AuthRequest, res) => {
  const { title } = req.body;

  const todo = await prisma.todo.create({
    data: {
      title,
      userId: req.userId!
    }
  });

  res.json(todo);
});

// Atualizar
router.put("/:id", async (req: AuthRequest, res) => {
  const { id } = req.params;
  const { title, completed } = req.body;

  const todo = await prisma.todo.update({
    where: { id },
    data: { title, completed }
  });

  res.json(todo);
});

// Deletar
router.delete("/:id", async (req: AuthRequest, res) => {
  const { id } = req.params;

  await prisma.todo.delete({
    where: { id }
  });

  res.json({ message: "Deleted" });
});

export default router;