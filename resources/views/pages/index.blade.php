<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Styles -->
    @vite('resources/js/app.js')
</head>
<body>
    <ul>
        <li>
            <a href="{{route('pizzas.create')}}">Crea la tua pizza!</a>
        </li>
        <div class="container">
            <div class="row">
                @foreach ($pizzas as $pizza)
                    <div class="card col-4 mt-3 p-5" style="border:none">
                        <img src="https://media.istockphoto.com/id/1083432190/it/vettoriale/pizza-fetta-cartone-animato-occhiali-da-sole-divertenti-roccia-isolata.jpg?s=1024x1024&w=is&k=20&c=drGcrUtDkvtCCteTRk4kmQTUG41k8smt-Aw3VlNpMWM=" alt="pizza simpatica">    
                        
                        <a class="text-decoration-none text-black text-center" href="{{route('pizzas.show', $pizza)}}">
                            <h3 >
                                {{$pizza['nome_pizza']}}
                            </h3>
                        </a>
                        <a class="btn btn-primary" href="{{route('pizzas.edit', $pizza)}}">Modifica</a>
                    </div>   
                @endforeach
            </div>
        </div>
    </ul>
</body>
</html>