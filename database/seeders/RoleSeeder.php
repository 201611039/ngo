<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'super-admin'
            ], [
                'name' => 'web-master', 'permissions' => [
                    ['sponsor', 'action' => ['view', 'create', 'update', 'delete']],
                    ['event', 'action' => ['view', 'create', 'update', 'delete']],
                    ['about', 'action' => ['view', 'update']],
                ]
            ], [
                'name' => 'admin', 'permissions' => [
                    ['user', 'action' => ['view', 'create', 'update', 'delete']],
                ]
            ], [
                'permissions' => [

                ]
            ]
        ];


        foreach ($roles as $role) {
            if (isset($role['name'])) { // if role name is found create it
                $roleInstance = Role::firstOrCreate([
                    'name' => $role['name']
                ]);
                echo "Role $roleInstance->name  created \n";
            }

            foreach ($role['permissions']??[] as $permission) {
                foreach ($permission['action'] as $action) {
                    $permissionInstance = Permission::firstOrCreate(['name' => $permission[0].'-'.$action]);
                    echo "Permission $permissionInstance->name  created \n";
                    if (isset($role['name'])) { // if role was created give permissions to that role
                        $roleInstance->givePermissionTo($permissionInstance->name);
                    }
                }
            }
        }
    }
}
