<?php

namespace Database\Seeders;
use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'title' => 'admin_access',
            ],
            [
                'title' => 'staff_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
