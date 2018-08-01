<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'iden'=>$faker->unique()->numberBetween(50,1100),
        'entidad'=>$faker->numberBetween(0,1),
        'direccion'=>$faker->address(),
        'ranking'=>$faker->numberBetween(1,100),
        'telefono'=>$faker->phoneNumber(),
        'cate'=>$faker->numberBetween(1,6),
        'foto'=> 1,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Contact::class, function (Faker $faker) {
    return [
        'mensj' => $faker->text,
        'email' => $faker->unique()->safeEmail,
        'IdEnvio'=>$faker->numberBetween(1,50),
        'IdRe'=>$faker->numberBetween(1,50),

    ];
});
