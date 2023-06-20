<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>
            <a href="{{route('pizzas.create')}}">Crea la tua pizza!</a>
        </li>
        @foreach ($pizzas as $pizza)
            <li>    
                <a href="{{route('pizzas.show', $pizza)}}">{{$pizza['nome_pizza']}}</a>
            </li>   
        @endforeach
    </ul>
</body>
</html>