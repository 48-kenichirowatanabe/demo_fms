<?php

use Illuminate\Database\Seeder;

class ProjectPartnerPICsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('ja_JP');
        factory(App\Models\ProjectPartnerPIC::class, 10)->create(); 
    }
}
