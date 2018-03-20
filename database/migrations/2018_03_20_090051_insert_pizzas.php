<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Pizza;

class InsertPizzas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $pizza = new pizza;
        $pizza->name = 'Margarita';
        $pizza->description ='Concassé de tomates, mozzarella, feuilles de basilic ';
        $pizza->price = 7;
        $pizza->save();

        $pizza = new pizza;
        $pizza->name = 'Chèvre et miel';
        $pizza->description = 'Sauce crème et miel, mozzarella, fromage de chèvre, speck, roquette';
        $pizza->price = 10;
        $pizza->save();

        $pizza = new pizza;
        $pizza->name = 'Pollo e scamorza';
        $pizza->description = 'Crème mascarpone, sauce tomate, mozzarella, émincés de poulet**, scamorza fumée, tomates confites, roquette';
        $pizza->price = 8;
        $pizza->save();

        $pizza = new pizza;
        $pizza->name = 'Regina rostello';
        $pizza->description = 'Sauce tomate, mozzarella, rostello* (jambon italien aux herbes), champignons, olives noires. ';
        $pizza->price = 9;
        $pizza->save();

        $pizza = new pizza;
        $pizza->name = 'Frutti di mare';
        $pizza->description = 'Sauce tomate, mozzarella, cocktail de fruits de mer, persillade';
        $pizza->price = 12;
        $pizza->save();

        $pizza = new pizza;
        $pizza->name = 'Chèvre et miel';
        $pizza->description = 'Sauce crème et miel, mozzarella, fromage de chèvre, speck, roquette';
        $pizza->price = 10;
        $pizza->save();

        $pizza = new pizza;
        $pizza->name = 'Speciale pizzaiolo';
        $pizza->description = 'Sauce tomate, mozzarella, jambon, œuf, crème fraîche, ciboulette';
        $pizza->price = 9;
        $pizza->save();

        $pizza = new pizza;
        $pizza->name = 'Calabrese';
        $pizza->description = 'Sauce tomate, mozzarella, spianata calabrese* (saucisson piquant), artichaut, oeuf';
        $pizza->price = 10;
        $pizza->save();

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Pizza::truncate();
    }
}
