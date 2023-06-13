<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Pizza;

class PizzaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        // for per la generazione di dati con faker
        for($i = 0; $i < 10; $i++) {
            $newPizza = new Pizza();
            $newPizza->tipologia_pizza = $faker->randomElements(['romana', 'napoletana', 'genovese']);
            $newPizza->base_pizza = $faker->randomElements(['focaccia', 'bianca', 'rosssa']);
            $newPizza->nome_pizza = $faker->randomElements([
                "Margherita", "Pepperoni", "Hawaiana", "Cuatro quesos", "Napolitana", "Barbacoa", "Carbonara", "Murgiana", "Prosciutto e funghi", "Diavola"
            ]);
            $newPizza->ingredienti_principali = $faker->randomElements([
                "Mozzarella", "Salame piccante", "Olive", "Cipolla", "Peperone verde", "Funghi", "Origano", "salame"
           ]);
            $newPizza->prezzo = 30.00;

            // dd($newPizza);
            $newPizza->save();
        }
    }
}
