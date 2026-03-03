<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            padding: 10px;
        }
    </style>
</head>
<body>
    <button onclick="myfunction()">Valor Total adição</button>
    <button onclick="myfunction2()">Valor Total subtração</button>
    <button onclick="myfunction3()">Valor Total multiplicação</button>
    <button onclick="myfunction4()">Valor Total divisão</button>
    <button onclick="myfunction5()">Verificar par/ímpar</button>
    <table>
        <thead>
            
            <tr>
                <th colspan="2">Valores</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="switchCheckDefault" value="7">
                        <label class="form-check-label" for="switchCheckDefault">7</label>
                    </div>                    
                </td>
                <td>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="switchCheckDefault" value="6">
                        <label class="form-check-label" for="switchCheckDefault">6</label>
                    </div>                    
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="switchCheckDefault" value="5">
                        <label class="form-check-label" for="switchCheckDefault">5</label>
                    </div>                    
                </td>
                <td>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="switchCheckDefault" value="4">
                        <label class="form-check-label" for="switchCheckDefault">4</label>
                    </div>                    
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="switchCheckDefault" value="3">
                        <label class="form-check-label" for="switchCheckDefault">3</label>
                    </div>                    
                </td>
                <td>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="switchCheckDefault" value="2">
                        <label class="form-check-label" for="switchCheckDefault">2</label>
                    </div>                    
                </td>
            </tr>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let cont = 10;   
        for(let i = 0; i < cont; i++) {
            if (i % 2 == 0){
                continue;
            }
            console.log("i="+i);
        }
        while (cont > 0) {
            if (cont == 5){
                break;
            }
            console.log("cont="+cont);
            cont--;
        }
        console.log("Fim dos loops");
        let escolha = 1;
        switch (escolha) {
            case 1:
            case 2:
                console.log("Escolha 1 ou 2");
                break;
            case 3:
                console.log("Escolha 3");
                break;
            default:
                console.log("Escolha padrão");
        }
        return;
        console.log("Este código não será executado");
    });
    function myfunction() {
        let table = document.querySelector("table tbody");
        let rows = table.querySelectorAll("tr");
        let total = 0;

        rows.forEach(row => {
            let checkboxes = row.querySelectorAll("input[type='checkbox']");

            checkboxes.forEach(cb => {
                if (cb.checked) {
                    total += parseFloat(cb.value);
                }
            });
        });

        alert("O valor total da adição é: " + total);
    };
    function myfunction2() {
        let table = document.querySelector("table tbody");
        let rows = table.querySelectorAll("tr");
        let total = 0;

        rows.forEach(row => {
            let checkboxes = row.querySelectorAll("input[type='checkbox']")
            checkboxes.forEach(cb => {
                if (cb.checked) {
                    total -= parseFloat(cb.value);
                }
            });
        });
        
        alert("O valor total da subtração é: " + total);
    };
    function myfunction3() {
        let table = document.querySelector("table tbody");
        let rows = table.querySelectorAll("tr");
        let total = 1;

        rows.forEach(row => {
            let checkboxes = row.querySelectorAll("input[type='checkbox']")
            checkboxes.forEach(cb => {
                if (cb.checked) {
                    total *= parseFloat(cb.value);
                }
            })
        });

        alert("O valor total da multiplicação é: " + total);
    };
    function myfunction4() {
        let table = document.querySelector("table tbody");
        let rows = table.querySelectorAll("tr");
        let total = null;

        rows.forEach(row => {
            let checkboxes = row.querySelectorAll("input[type='checkbox']")
            checkboxes.forEach(cb => {
                if (cb.checked) {
                    if (total === null) {
                        total = parseFloat(cb.value);
                    } else {
                        total /= parseFloat(cb.value);
                    }
                }
            });
        });

        alert("O valor total da divisão é: " + total);
    };
    function myfunction5() {
        let table = document.querySelector("table tbody");
        let rows = table.querySelectorAll("tr");
        let results = [];
        rows.forEach(row => {
            let checkboxes = row.querySelectorAll("input[type='checkbox']");
            checkboxes.forEach(cb => {
                if (cb.checked) {
                    let value = parseInt(cb.value);
                    if (cb.value % 2 === 0) {
                        results.push(cb.value + " é par");
                    } else {
                        results.push(cb.value + " é ímpar");
                    }
            }
            });
        });

        alert(results.join("\n"));
    }   
</script>
</body>
</html>