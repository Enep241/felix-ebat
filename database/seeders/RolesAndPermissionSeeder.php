<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        # create permissions
        Permission::create(['name' => 'create devis']);
        Permission::create(['name' => 'update devis']);
        Permission::create(['name' => 'send devis']);
        Permission::create(['name' => 'delete devis']);
        Permission::create(['name' => 'download facture']);
        Permission::create(['name' => 'show facture']);
        Permission::create(['name' => 'view devis']);
        # create roles and assign created permissions
        $supervisor = Role::create(['name' => 'supervisor']);
        $supervisor->givePermissionTo('create devis');
        $supervisor->givePermissionTo('update devis');
        $supervisor->givePermissionTo('send devis');
        $supervisor->givePermissionTo('show facture');
        $supervisor->givePermissionTo('view devis');
        
        $customer = Role::create(['name' => 'customer']);
        $customer->givePermissionTo('download facture');
        $customer->givePermissionTo('delete devis');
        $customer->givePermissionTo('show facture');
        $customer->givePermissionTo('view devis');
    }
}
