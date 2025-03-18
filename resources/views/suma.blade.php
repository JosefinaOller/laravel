<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma de dos números</title>
</head>
<body>
    <h2> Sumar dos números</h2>
    <form action="/suma" method="POST">
        @csrf
       
        <label for="num1">Número 1:</label>
        <input type="number" id="num1" name="num1" required>
        <br>
        
        <label for="num2">Número 2:</label>
        <input type="number" id="num2" name="num2" required>
        <br>
       
        <button type="submit">Sumar</button>
        
    </form>
    <br>
    @if(isset($resultado))
        <h3>El resultado de la suma es: {{$resultado}}</h3>
    @endif
</body>
</html>