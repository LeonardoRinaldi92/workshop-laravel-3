<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create form</title>

    <!-- Styles -->
    @vite('resources/js/app.js')
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">

                <form action="{{route('pizzas.store')}}" method="POST">
                    @csrf

                    {{-- da aggiungere l'old quando si sbaglia a compilare il form per non reinserire i dati di nuovo --}}

                    {{-- nome pizza --}}
                    <label for="nome_pizza" class="form-label">Nome pizza</label>
                    <input type="text" class="form-control @error('nome_pizza') is-invalid @enderror" id="nome_pizza" name="nome_pizza" max="25" required>
                    {{-- error --}}
                    {{-- @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror --}}

                    {{-- Taglia pizza --}}
                    <label for="taglia_pizza" class="form-label">Taglia pizza</label>
                    <input type="text" class="form-control @error('taglia_pizza') is-invalid @enderror" id="taglia_pizza" name="taglia_pizza">

                    {{-- tipologia pizza --}}
                    <label for="tipologia_pizza" class="form-label">Tipologia pizza</label>
                    <input type="number" class="form-control @error('tipologia_pizza') is-invalid @enderror" id="tipologia_pizza" name="tipologia_pizza">

                    {{-- ingredienti principali --}}
                    <label for="ingredienti_principali" class="form-label">Ingredienti Principali</label>
                    <input type="text" class="form-control @error('ingredienti_principali') is-invalid @enderror" id="ingredienti_principali" name="ingredienti_principali">

                    {{-- ingredienti secondari --}}
                    <label for="ingredienti_secondari" class="form-label">Ingredienti secondari</label>
                    <input type="text" class="form-control @error('ingredienti_secondari') is-invalid @enderror" id="ingredienti_secondari" name="ingredienti_secondari">

                    {{-- prezzo --}}
                    <label for="prezzo" class="form-label">Prezzo</label>
                    <input type="number" class="form-control @error('prezzo') is-invalid @enderror" id="prezzo" name="prezzo">

                    {{-- base pizza --}}
                    <label for="base_pizza" class="form-label">Base pizza</label>
                    <input type="number" class="form-control @error('base_pizza') is-invalid @enderror" id="base_pizza" name="base_pizza">

                    {{-- Gluten free --}}
                    <label for="gluten_free" class="form-label">Gluten free</label>
                    <input type="checkbox" class=" @error('gluten_free') is-invalid @enderror" id="gluten_free" name="gluten_free" value="1">
                    
                    {{-- Lievitazione naturale --}}
                    <label for="lievitazione_naturale" class="form-label">Lievitazione naturale</label>
                    <input type="checkbox" id="lievitazione_naturale" name="lievitazione_naturale" value="1">

                    <button type="submit" class=" d-block btn btn-primary">invia</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>