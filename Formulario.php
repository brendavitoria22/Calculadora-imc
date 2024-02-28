<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
     <style>
        body{
            font-family:Arial;
            margin: 20px;
            padding: 20px;
            background-color: #f2f2f2;
            
           
        }
        h2{
            color: #ff9900;
            text-align: center;
            font-size: 35px;


            
        }
        form {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-size:16px;
            color:#333;
        }
        input {
            width:100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border:1px solid #ccc;
            border-radius:5px;
            
        }
        input[type="submit"] {
            background-color: #ff6600;
            color: #fff;
            cursor:pointer;
            padding: 12px;
            border: none;
            border-radius: 5px;

        }
        input[type="submit"]:hover {
            background-color:#ff3300 ;
        }
       
       
     </style>
</head>
<body>
    <h2>Calculadora de IMC</h2>
    <form action="calcular.php" method="post">
     <label for="altura">Altura (m):</label>
        <input type="text" name="altura" required>

        <label for="peso">Peso (kg):</label>
        <input type="text" name="peso" required><br>

        <input type="submit" value="Calcular">
    </form>
</body>
</html>
