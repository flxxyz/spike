<?php

use Illuminate\Database\Seeder;

class RoleAuthTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_auth = [];
        for ($i = 1; $i <= 27; $i++) {
            array_push($role_auth, [
                'id' => 0+$i,
                'role_id' => 1,
                'rule_id' => $i,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }

        for ($i = 1; $i <= 2; $i++) {
            array_push($role_auth, [
                'id' => 27+$i,
                'role_id' => 2,
                'rule_id' => $i,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }

        DB::table('role_auth')->insert($role_auth);
    }
}
