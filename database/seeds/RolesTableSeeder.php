<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ps: 切记带上 table()
        DB::table('roles')->insert([
            [
                'id' => 1,
                'name' => '超级管理员',
                'remark' => '拥有网站最大权限',
                'order' => 255,
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'name' => '底层人员',
                'remark' => '生活在最底层的无产阶级战士',
                'order' => 255,
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
