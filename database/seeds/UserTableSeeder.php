<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // admin
        $user = User::create
        ([
          'name'      => '管理者',
          'email'     => 'admin@localhost',
          'password'  =>  Hash::make('admin'),
        ]);
        $user -> assignRole('1');

        // manager
        $user = User::create
        ([
          'name'      => 'マネージャー',
          'email'     => 'manager@localhost',
          'password'  =>  Hash::make('manager'),
        ]);
        $user -> assignRole('5');

        // person
        $user = User::create
        ([
          'name'      => '一般ユーザー',
          'email'     => 'person@localhost',
          'password'  =>  Hash::make('person'),
        ]);
        $user -> assignRole('10');
    }
}
