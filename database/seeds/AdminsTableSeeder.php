<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            [
                'id' => 1,
                'name' => 'admin',
                'password' => bcrypt('12345678'),
                'avatr' => '/images/admin.png',
                'create_ip' => '127.0.0.1',
                'last_login_ip' => '127.0.0.1',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'name' => '咸鱼王',
                'password' => bcrypt('12345678'),
                'avatr' => '/images/咸鱼王.jpg',
                'create_ip' => '127.0.0.1',
                'last_login_ip' => '127.0.0.1',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
