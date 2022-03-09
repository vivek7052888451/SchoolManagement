<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Illuminate\Support\Facades\Hash;

class PermissionsDemoSeeder extends Seeder
{
    /**
     * Create the initial roles and permissions.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'create']);
        Permission::create(['name' => 'delete']);
        Permission::create(['name' => 'edit']);
        Permission::create(['name' => 'update']);
        Permission::create(['name' => 'view']);

        $role1 = Role::create(['name' => 'admin']);
        // gets all permissions via Gate::before rule; see AuthServiceProvider

        $role2 = Role::create(['name' => 'student']);
        $role2->givePermissionTo('create');
        $role2->givePermissionTo('delete');
        $role2->givePermissionTo('edit');
        $role2->givePermissionTo('update');
        $role2->givePermissionTo('view');


        // create roles and assign existing permissions
        $role3 = Role::create(['name' => 'teacher']);
        $role3->givePermissionTo('create');
        $role3->givePermissionTo('delete');
        $role3->givePermissionTo('edit');
        $role3->givePermissionTo('update');
        $role3->givePermissionTo('view');

        $role4 = Role::create(['name' => 'parent']);
        $role4->givePermissionTo('create');
        $role4->givePermissionTo('delete');
        $role4->givePermissionTo('edit');
        $role3->givePermissionTo('update');
        $role4->givePermissionTo('view');


        

        
        // create demo users
        $user = \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        $user->assignRole($role1);

        $user = \App\Models\User::factory()->create([
            'name' => 'student',
            'email' => 'student@gmail.com',
             'password' => Hash::make('12345678'),
        ]);
        $user->assignRole($role2);

        $user = \App\Models\User::factory()->create([
            'name' => 'teacher',
            'email' => 'teacher@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        $user->assignRole($role3);

          $user = \App\Models\User::factory()->create([
            'name' => 'parent',
            'email' => 'parent@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        $user->assignRole($role4);
    }
}