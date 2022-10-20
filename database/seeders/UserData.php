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
                'address' => 'Jl. Kembar Timur I No.11a, Jawa Barat',
                'phone' => '+6283192753645',
                'email' => 'rendy@gmail.com',
                'password' => bcrypt('123456'),
                'photo_url' => '../../public/assets/img/avatars/1.png',
                'role_id' => 1
            ],
            [
                'name' => 'Erma Gustika',
                'username' => 'asper',
                'address' => 'Jl P Jayakarta 141 Bl C/14, Dki Jakarta',
                'phone' => '+6289670992771',
                'email' => 'erma@gmail.com',
                'password' => bcrypt('123456'),
                'photo_url' => '../../public/assets/img/avatars/5.png',
                'role_id' => 2
            ],
            [
                'name' => 'Muhammad Suheryanto',
                'username' => 'pengolah',
                'address' => 'Jl HOS Cokroaminoto 5, Dki Jakarta',
                'phone' => '+628352663145',
                'email' => 'yanto@gmail.com',
                'password' => bcrypt('123456'),
                'photo_url' => '../../public/assets/img/avatars/6.png',
                'role_id' => 3
            ],
            [
                'name' => 'Aswin Suryo',
                'username' => 'petani',
                'address' => ' Jl Trengguli II 21, Jawa Tengah',
                'phone' => '+62896704292764',
                'email' => 'suryo@gmail.com',
                'password' => bcrypt('123456'),
                'photo_url' => '../../public/assets/img/avatars/7.png',
                'role_id' => 4
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
