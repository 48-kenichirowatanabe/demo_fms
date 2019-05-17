<?php

use Illuminate\Database\Seeder;

class TaskCompanyPICsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('ja_JP');
        factory(App\Models\TaskCompanyPIC::class, 10)->create(); 
    }
}
