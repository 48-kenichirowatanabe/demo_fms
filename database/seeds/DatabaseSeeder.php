<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
          CompaniesTableSeeder::class,
          CompanyUsersTableSeeder::class,
          ProjectsTableSeeder::class,
          TasksTableSeeder::class,
          PartnersTableSeeder::class,
          UserRoleRelationsTableSeeder::class,
          ProjectRoleRelationsTableSeeder::class,
          ProjectCompanyPICsTableSeeder::class,
          TaskCompanyPICsTableSeeder::class,
          ProjectPartnerPICsTableSeeder::class,
          TaskPartnerPICsTableSeeder::class,
        ]);
        
    }
}