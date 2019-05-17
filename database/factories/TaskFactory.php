<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Task::class, function (Faker $faker) {
    return [
        'project_id'    => App\Models\Company::all()->random()->id,
        'name'          => $faker->randomElement(['要件定義', '調査', 'コーディング']),
        'content'       => $faker->sentence,
        'started_at'    => $faker->dateTimeThisDecade,
        'ended_at'      => $faker->dateTimeThisDecade,
        'status'        => $faker->numberBetween($min = 0, $max = 1),
        'purchaseorder' => true,
        'invoice'       => true,
        'created_at'    => $faker->dateTimeThisDecade,
        'updated_at'    => $faker->dateTimeThisYear,
    ];
});
