<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Company::class, function (Faker $faker) {
    return [
        'company_name'      => $faker->company,
        'representive_name' => $faker->name,
        'zip_code'          => '$kufoselihun3484597342nbalw3urnbkewrswmoidgjw',
        'address'           => $faker->address,
        'expire'            => true,
        'expire2'           => $faker->dateTimeThisMonth,
        'created_at'        => $faker->dateTimeThisDecade,
        'updated_at'        => $faker->dateTimeThisYear,
    ];
});
