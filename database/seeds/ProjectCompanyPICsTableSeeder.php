<?php

use Illuminate\Database\Seeder;

class ProjectCompanyPICsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('ja_JP');
        factory(App\Models\ProjectCompanyPIC::class, 10)->create(); 
    }
}
