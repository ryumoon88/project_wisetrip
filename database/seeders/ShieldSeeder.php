<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use BezhanSalleh\FilamentShield\Support\Utils;
class ShieldSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $rolesWithPermissions = '[{"name":"super_admin","guard_name":"web","permissions":["view_user","view_any_user","create_user","update_user","restore_user","restore_any_user","replicate_user","reorder_user","delete_user","delete_any_user","force_delete_user","force_delete_any_user","view_shield::role","view_any_shield::role","create_shield::role","update_shield::role","delete_shield::role","delete_any_shield::role","view_article","view_any_article","create_article","update_article","restore_article","restore_any_article","replicate_article","reorder_article","delete_article","delete_any_article","force_delete_article","force_delete_any_article","view_culture::information","view_any_culture::information","create_culture::information","update_culture::information","restore_culture::information","restore_any_culture::information","replicate_culture::information","reorder_culture::information","delete_culture::information","delete_any_culture::information","force_delete_culture::information","force_delete_any_culture::information","view_destination","view_any_destination","create_destination","update_destination","restore_destination","restore_any_destination","replicate_destination","reorder_destination","delete_destination","delete_any_destination","force_delete_destination","force_delete_any_destination","reorder_shield::role","page_Locations","view_all_destination","view_destination::service::order","view_any_destination::service::order","create_destination::service::order","update_destination::service::order","restore_destination::service::order","restore_any_destination::service::order","replicate_destination::service::order","reorder_destination::service::order","delete_destination::service::order","delete_any_destination::service::order","force_delete_destination::service::order","force_delete_any_destination::service::order","view_all_destination::service::order"]},{"name":"user","guard_name":"web","permissions":[]},{"name":"affiliator","guard_name":"web","permissions":["view_destination","view_any_destination","create_destination","update_destination","restore_destination","restore_any_destination","replicate_destination","reorder_destination","delete_destination","delete_any_destination","force_delete_destination","force_delete_any_destination"]}]';
        $directPermissions = '{"56":{"name":"page_Orders","guard_name":"web"},"58":{"name":"view_role","guard_name":"web"},"59":{"name":"view_any_role","guard_name":"web"},"60":{"name":"create_role","guard_name":"web"},"61":{"name":"update_role","guard_name":"web"},"62":{"name":"delete_role","guard_name":"web"},"63":{"name":"delete_any_role","guard_name":"web"}}';

        static::makeRolesWithPermissions($rolesWithPermissions);
        static::makeDirectPermissions($directPermissions);

        $this->command->info('Shield Seeding Completed.');
    }

    protected static function makeRolesWithPermissions(string $rolesWithPermissions): void
    {
        if (! blank($rolePlusPermissions = json_decode($rolesWithPermissions,true))) {

            foreach ($rolePlusPermissions as $rolePlusPermission) {
                $role = Utils::getRoleModel()::firstOrCreate([
                    'name' => $rolePlusPermission['name'],
                    'guard_name' => $rolePlusPermission['guard_name']
                ]);

                if (! blank($rolePlusPermission['permissions'])) {

                    $permissionModels = collect();

                    collect($rolePlusPermission['permissions'])
                        ->each(function ($permission) use($permissionModels) {
                            $permissionModels->push(Utils::getPermissionModel()::firstOrCreate([
                                'name' => $permission,
                                'guard_name' => 'web'
                            ]));
                        });
                    $role->syncPermissions($permissionModels);

                }
            }
        }
    }

    public static function makeDirectPermissions(string $directPermissions): void
    {
        if (! blank($permissions = json_decode($directPermissions,true))) {

            foreach($permissions as $permission) {

                if (Utils::getPermissionModel()::whereName($permission)->doesntExist()) {
                    Utils::getPermissionModel()::create([
                        'name' => $permission['name'],
                        'guard_name' => $permission['guard_name'],
                    ]);
                }
            }
        }
    }
}
