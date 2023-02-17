<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadora</title>
</head>
<style>
    body{
        margin: 0;
        padding: 0;
    }
    .formulario{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 1rem;
        border-radius: 26px;
        background-color: #f8f8f8;
        height: 90vh;
    }
    .input_text{
        border:1px solid #cccccc;
        border-radius: 26px;
        padding: 0.4rem;
        background-color: #f4f4f4;
    }
    .submit{
        border-radius: 26px;
        background-color: #111111;
        color: white;
        padding: 0.4rem 1rem;
    }
    
</style>
<body>
    <form class="formulario" action="./calculadoraresult.php" method="GET">
        <h1>Agrega 2 numeros</h1>
        <label for="numero1">numero 1</label>
        <input class="input_text" type="text" placeholder="numero 1" name="numero1" id="numero1">
        <br>
        <label for="numero1">numero 2</label>
        <input class="input_text" type="text" placeholder="numero 2" name="numero2" id="numero2">
        <br>
        <input class="submit" type="submit" value="calcular">
    </form>
</body>
</html>