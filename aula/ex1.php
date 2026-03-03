<?php
   header("Content-Type: application/json");

   // Lê o corpo da requisição (JSON)
   $conteudo = file_get_contents("php://input");

   // Converte JSON para objeto PHP
   $dados = json_decode($conteudo);

   // Aqui você pode processar os dados
   // Exemplo: adicionar uma informação
   $dados->status = "sucesso";

   // Retorna o JSON
   echo json_encode($dados);