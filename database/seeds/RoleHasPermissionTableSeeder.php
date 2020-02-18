<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class RoleHasPermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // admin
        $permissions =
        [
          'read users', //ユーザー情報を読める
          'edit users', //ユーザー情報を編集できる
          'edit posts', //投稿を編集できる
          'read posts', //投稿を読める
        ];
        $role = Role::findByName('admin');
        $role -> givePermissionTo($permissions);

        // manager
        $permissions =
        [
          'read users', //ユーザー情報を読める
          'edit posts', //投稿を編集できる
          'read posts', //投稿を読める
        ];
        $role = Role::findByName('manager');
        $role -> givePermissionTo($permissions);

        // staff
        $permissions =
        [
          'read posts', //投稿を読める
        ];
        $role = Role::findByName('person');
        $role -> givePermissionTo($permissions);
    }
}
