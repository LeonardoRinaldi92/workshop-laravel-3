<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ingredient;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ingredienti_principali = [
            "Mozzarella", "Salame piccante", "Olive", "Cipolla", "Peperone verde", "Funghi", "Origano", "salame"
        ];

        foreach($ingredienti_principali as $elem){
            $newIngredient = new Ingredient();

            $newIngredient->name = $elem;
            $newIngredient->save();
        }
    }
}
