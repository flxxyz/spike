<?php

use Illuminate\Database\Seeder;

class RulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rules = [
            [
                'id' => 1,
                'name' => '后台首页',
                'route' => 'index.index',
                'parent_id' => 0,
                'is_hidden' => 0,
                'sort' => 1,
            ],
            [
                'id' => 2,
                'name' => '欢迎界面',
                'route' => 'index.main',
                'parent_id' => 1,
                'is_hidden' => 1,
                'sort' => 255,
            ],
            [
                'id' => 3,
                'name' => '后台授权',
                'route' => null,
                'parent_id' => 0,
                'is_hidden' => 0,
                'sort' => 2,
            ],
            [
                'id' => 4,
                'name' => '管理员管理',
                'route' => 'admins.index',
                'parent_id' => 3,
                'is_hidden' => 0,
                'sort' => 1,
            ],
            [
                'id' => 5,
                'name' => '添加页面',
                'route' => 'admins.create',
                'parent_id' => 4,
                'is_hidden' => 1,
                'sort' => 255,
            ],
            [
                'id' => 6,
                'name' => '添加数据',
                'route' => 'admins.store',
                'parent_id' => 4,
                'is_hidden' => 1,
                'sort' => 255,
            ],
            [
                'id' => 7,
                'name' => '修改页面',
                'route' => 'admins.edit',
                'parent_id' => 4,
                'is_hidden' => 1,
                'sort' => 255,
            ],
            [
                'id' => 8,
                'name' => '数据更新',
                'route' => 'admins.update',
                'parent_id' => 4,
                'is_hidden' => 1,
                'sort' => 255,
            ],
            [
                'id' => 9,
                'name' => '状态修改',
                'route' => 'admins.status',
                'parent_id' => 4,
                'is_hidden' => 1,
                'sort' => 255,
            ],
            [
                'id' => 10,
                'name' => '删除',
                'route' => 'admins.destroy',
                'parent_id' => 4,
                'is_hidden' => 1,
                'sort' => 255,
            ],
            [
                'id' => 11,
                'name' => '角色管理',
                'route' => 'roles.index',
                'parent_id' => 3,
                'is_hidden' => 0,
                'sort' => 2,
            ],
            [
                'id' => 12,
                'name' => '添加页面',
                'route' => 'roles.create',
                'parent_id' => 11,
                'is_hidden' => 1,
                'sort' => 255,
            ],
            [
                'id' => 13,
                'name' => '添加数据',
                'route' => 'roles.store',
                'parent_id' => 11,
                'is_hidden' => 1,
                'sort' => 255,
            ],
            [
                'id' => 14,
                'name' => '修改页面',
                'route' => 'roles.edit',
                'parent_id' => 11,
                'is_hidden' => 1,
                'sort' => 255,
            ],
            [
                'id' => 15,
                'name' => '数据更新',
                'route' => 'roles.update',
                'parent_id' => 11,
                'is_hidden' => 1,
                'sort' => 255,
            ],
            [
                'id' => 16,
                'name' => '权限分配页面',
                'route' => 'roles.access',
                'parent_id' => 11,
                'is_hidden' => 1,
                'sort' => 255,
            ],
            [
                'id' => 17,
                'name' => '权限分配',
                'route' => 'roles.group-access',
                'parent_id' => 11,
                'is_hidden' => 1,
                'sort' => 255,
            ],
            [
                'id' => 18,
                'name' => '删除角色',
                'route' => 'roles.destroy',
                'parent_id' => 11,
                'is_hidden' => 1,
                'sort' => 255,
            ],
            [
                'id' => 19,
                'name' => '权限管理',
                'route' => 'rules.index',
                'parent_id' => 3,
                'is_hidden' => 0,
                'sort' => 3,
            ],
            [
                'id' => 20,
                'name' => '添加页面',
                'route' => 'rules.create',
                'parent_id' => 19,
                'is_hidden' => 1,
                'sort' => 255,
            ],
            [
                'id' => 21,
                'name' => '添加数据',
                'route' => 'rules.store',
                'parent_id' => 19,
                'is_hidden' => 1,
                'sort' => 255,
            ],
            [
                'id' => 22,
                'name' => '修改页面',
                'route' => 'rules.edit',
                'parent_id' => 19,
                'is_hidden' => 1,
                'sort' => 255,
            ],
            [
                'id' => 23,
                'name' => '数据更新',
                'route' => 'rules.update',
                'parent_id' => 19,
                'is_hidden' => 1,
                'sort' => 255,
            ],
            [
                'id' => 24,
                'name' => '状态修改',
                'route' => 'rules.status',
                'parent_id' => 19,
                'is_hidden' => 1,
                'sort' => 255,
            ],
            [
                'id' => 25,
                'name' => '删除权限',
                'route' => 'rules.destroy',
                'parent_id' => 19,
                'is_hidden' => 1,
                'sort' => 255,
            ],
            [
                'id' => 26,
                'name' => '操作日志',
                'route' => 'actions.index',
                'parent_id' => 3,
                'is_hidden' => 0,
                'sort' => 255,
            ],
            [
                'id' => 27,
                'name' => '删除日志',
                'route' => 'actions.destroy',
                'parent_id' => 26,
                'is_hidden' => 1,
                'sort' => 255,
            ],
        ];

        $data = [];
        foreach($rules as $rule) {
            array_push($data, array_merge($rule, [
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]));
        }

        DB::table('rules')->insert($data);
    }
}
