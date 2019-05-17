<?php

use Illuminate\Database\Seeder;

class TaskPartnerPICsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('ja_JP');
        factory(App\Models\TaskPartnerPIC::class, 10)->create(); 
    }
}
