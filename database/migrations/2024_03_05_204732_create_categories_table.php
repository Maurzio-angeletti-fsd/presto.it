<?php

use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->nullable();
            $table->string('icon', 100)->nullable();
            $table->timestamps();
        });


        // $categories = ['Motori', 'Informatica', 'Elettrodomestici', 'Libri', 'Giochi', 'Sport', 'Immobili', 'Telefoni', 'Arredamento', 'Abbigliamento'];


        $categories = [

            // Category Ita
            [
                'name' => 'Motori',
                'icon' => 'fa-car',

            ],
            [
                'name' => 'Informatica',
                'icon' => 'fa-computer',

            ],
            [
                'name' => 'Elettrodomestici',
                'icon' => 'fa-plug',

            ],
            [
                'name' => 'Libri',
                'icon' => 'fa-book',

            ],
            [
                'name' => 'Giochi',
                'icon' => 'fa-gamepad',

            ],
            [
                'name' => 'Sport',
                'icon' => 'fa-volleyball',

            ],
            [
                'name' => 'Immobili',
                'icon' => 'fa-city',

            ],
            [
                'name' => 'Telefoni',
                'icon' => 'fa-mobile',

            ],
            [
                'name' => 'Arredamento',
                'icon' => 'fa-couch',

            ],
            [
                'name' => 'Abbigliamento',
                'icon' => 'fa-shirt',

            ],

        ];




        foreach ($categories as $category) {

            Category::create($category);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
