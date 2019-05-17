<?php

use Illuminate\Database\Seeder;

class CompanyUserAuthsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('ja_JP');
        factory(App\Models\CompanyUserAuth::class, 10)->create();
    }
}
