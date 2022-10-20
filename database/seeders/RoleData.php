<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = [
            [
                'id' => 1,
                'name_role' => 'Admin',
            ],
            [
                'id' => 2,
                'name_role' => 'Asper',
            ],
            [
                'id' => 3,
                'name_role' => 'Pengolah',
            ],
            [
                'id' => 4,
                'name_role' => 'Petani',
            ],
        ];

        foreach ($role as $key => $value) {
            Role::create($value);
        }
    }
}
