<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>{{ $pizza['nome_pizza'] }}</h2>
    <ul>
        <li>Base pizza: {{ $pizza['base_pizza'] }}</li>
        <li>Taglia pizza: {{ $pizza['taglia_pizza'] }}</li>
        <li>Ingredienti: {{ $pizza['ingredienti_principali'] }}</li>
    </ul>
</body>
</html>