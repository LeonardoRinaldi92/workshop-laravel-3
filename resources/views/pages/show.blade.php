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
        <li>
            @foreach($pizza->ingredients as $element)
                {{$element->name}}
            @endforeach
        </li>
    </ul>
    <form action="{{route('pizzas.destroy', $pizza)}}" method="POST">
    @csrf
    @method('DELETE')

    <button class="btn btn-danger text-uppercase" type="submit" onclick="return confirm('sei sicuro??')">
        elimina
    </button>
    </form>

</body>
</html>