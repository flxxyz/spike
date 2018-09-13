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
            AdminsTableSeeder::class,
            RolesTableSeeder::class,
            AdminRoleTableSeeder::class,
            RoleAuthTableSeeder::class,
            RulesTableSeeder::class,
        ]);
    }
}
