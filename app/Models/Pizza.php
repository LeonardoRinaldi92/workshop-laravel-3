<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;

    public function ingredients(){
        return $this->belongsToMany(Ingredient::class);
    }


    // Da mettere a seconda del nome della vostra tabella, per specificare da quale tabella state prendendo i dati
    // protected $table = 'pizzas';

    protected $fillable = [
        'lievitazione_naturale',
        'gluten_free',
        'base_pizza',
        'tipologia_pizza',
        'taglia_pizza',
        'nome_pizza',
        'ingredienti_principali',
        'ingredienti_secondari',
        'prezzo'
    ];
}
