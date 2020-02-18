<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions =
        [
          'read users', //ユーザー情報を読める
          'edit users', //ユーザー情報を編集できる
          'read posts', //投稿を読める
          'edit posts', //投稿を編集できる
        ];
        foreach ($permissions as $permission) {
          Permission::create(['name' => $permission]);
        }
    }
}
