<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <script>
    document.addEventListener("DOMContentLoaded", function() {
        while (true) {
            let nome = prompt("Digite seu nome:");
            let idade = prompt("Digite sua idade:");
            if (idade < 18) {
                alert("Você é menor de idade e terá 18 anos em " + (18 - idade) + " anos.");
            } else if (idade >= 60) {
                alert("Você é idoso.");
            } else {
                alert("Você é maior de idade.");
            }
            if (!confirm("Deseja continuar?")) {
                break;
            }
        }
    });
   </script> 
</body>
</html>