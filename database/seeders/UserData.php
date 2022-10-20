<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Rendy Hutauruk',
                'username' => 'admin',
                'email' => 'rendy@gmail.com',
                'password' => bcrypt('123456'),
                'role_id' => 1
            ],
            [
                'name' => 'Erma Gustika',
                'username' => 'asper',
                'email' => 'erma@gmail.com',
                'password' => bcrypt('123456'),
                'role_id' => 2
            ],
            [
                'name' => 'Muhammad Suheryanto',
                'username' => 'pengolah',
                'email' => 'yanto@gmail.com',
                'password' => bcrypt('123456'),
                'role_id' => 3
            ],
            [
                'name' => 'Aswin Suryo',
                'username' => 'petani',
                'email' => 'suryo@gmail.com',
                'password' => bcrypt('123456'),
                'role_id' => 4
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
