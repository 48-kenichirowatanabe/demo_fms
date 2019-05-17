<?php

use Faker\Generator as Faker;

$factory->define(App\Models\CompanyUser::class, function (Faker $faker) {
    return [
        'auth_id' => function() {
            return factory(App\Models\CompanyUserAuth::class)->create()->id;
        },
        'company_id' => App\Models\Company::all()->random()->id,
        'name'       => $faker->name,
        'image'      => 'defaultImage.png',
        'created_at' => $faker->dateTimeThisDecade,
        'updated_at' => $faker->dateTimeThisYear,
    ];
});
