<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Equipamento::class, function (Faker\Generator $faker) {
    return [
        'tipo' => 'Notebook',
        'marca' => str_random(5),
        'modelo' => str_random(5),
        'serial' => str_random(10),
        'licenciado' => str_random(3),
        'setor_id' => 27,
    ];
});
