<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do IMC</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color:#e5e5e5; 
        }

        .resultado-container {
            max-width: 500px;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            font-size: 20px;
            color: #f39f5a;
        }

        .resultado {
            font-size: 24px;
            color: #333;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="resultado-container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Verificar se as variáveis são definidas
            if (isset($_POST["altura"]) && isset($_POST["peso"])) {
                // Obter os valores enviados pelo formulário
                $altura = $_POST["altura"];
                $peso = $_POST["peso"];

                // Calcular o IMC
                $imc = $peso / ($altura * $altura);
                $cor = '';
        if ($imc < 18.5) {
            $cor = '#FF5733'; // Cor para IMC abaixo do peso
        } elseif ($imc < 24.9) {
            $cor = '#4CAF50'; // Cor para IMC saudável
        } else {
            $cor = '#FF5733'; // Cor para IMC acima do peso
        }
             

        
                // Exibir o resultado com 2 casas decimais
                echo "<p style='color: $cor;'>Seu IMC é: " . number_format($imc, 2) . "</p>";
            } else {
                echo "<p>Erro: Por favor, preencha todos os campos do formulário.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
