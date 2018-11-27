<?php

use Illuminate\Database\Seeder;
use briyanadityatama\LaravelPHPRoles\Models\Permission;
use briyanadityatama\LaravelPHPRoles\Models\Role;

class ConnectRelationshipsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /**
         * Get Available Permissions.
         */
        $permissions = Permission::all();

        /**
         * Attach Permissions to Roles.
         */
        $roleAdmin = Role::where('slug', '=', 'admin')->first();
        foreach ($permissions as $permission) {
            $roleAdmin->attachPermission($permission);
        }
    }
}
