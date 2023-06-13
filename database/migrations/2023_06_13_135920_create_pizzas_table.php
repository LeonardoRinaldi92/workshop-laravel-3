<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pizzas', function (Blueprint $table) {
            $table->id();
            $table->boolean('lievitazione_naturale')->default(true); //naturale - lievito
            $table->boolean('gluten_free')->default(false); 
            $table->string('base_pizza', 25); //focaccia - bianca - rossa
            $table->tinyInteger('tipologia_pizza'); //romana - napoletana - genovese
            $table->string('taglia_pizza', 15)->default('classic');
            $table->string('nome_pizza', 25);
            $table->string('ingredienti_principali');
            $table->string('ingredienti_secondari')->nullable();
            $table->decimal('prezzo', 4, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pizzas');
    }
};
