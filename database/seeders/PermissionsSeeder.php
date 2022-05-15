<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\PermissionRegistrar;
use App\Models\User;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        // app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions

        Permission::create(['name' => 'edit_blog']);
        Permission::create(['name' => 'delete_blog']);
        Permission::create(['name' => 'publish_blog']);
        Permission::create(['name' => 'unpublish_blog']);
        Permission::create(['name' => 'read_blog']);
        Permission::create(['name' => 'blogs_access']);
        
        Permission::create(['name' => 'edit_user']);
        Permission::create(['name' => 'delete_user']);
        Permission::create(['name' => 'publish_user']);
        Permission::create(['name' => 'unpublish_user']);
        Permission::create(['name' => 'read_user']);
        Permission::create(['name' => 'user_access']);


        Permission::create(['name' => 'edit_role']);
        Permission::create(['name' => 'read_role']);
        Permission::create(['name' => 'delete_role']);
        Permission::create(['name' => 'publish_role']);
        Permission::create(['name' => 'unpublish_role']);
        Permission::create(['name' => 'role_access']);

        Permission::create(['name' => 'edit_permission']);
        Permission::create(['name' => 'delete_permission']);
        Permission::create(['name' => 'publish_permission']);
        Permission::create(['name' => 'unpublish_permission']);
        Permission::create(['name' => 'read_permission']);
        Permission::create(['name' => 'permission_access']);

        // create roles and assign existing permissions
        // Roles for writer
        $role1 = Role::create(['name' => 'writer']);
        $role1->givePermissionTo('edit_blogs');
        $role1->givePermissionTo('delete_blogs');
        $role1->givePermissionTo('publish_blogs');
        $role1->givePermissionTo('unpublish_blogs');

        // Roles for admin
        $role2 = Role::create(['name' => 'admin']);
        $role2->givePermissionTo('edit_blogs');
        $role2->givePermissionTo('delete_blogs');
        $role2->givePermissionTo('publish_blogs');
        $role2->givePermissionTo('unpublish_blogs');

        $role3 = Role::create(['name' => 'super_admin']);
        // get all permission via Gate::before rule;

        $role4 = Role::create(['name' => 'user']);
        $role5 = Role::create(['name' => 'affiliate_marketers']);
        $role6 = Role::create(['name' => 'guest']);

        // New user 

        $user = User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'superadmin@admin.com',
            'slug' => 'super-admin',
            'password' => '123456789',
            'image' => 'image',
            'phone_number' => '07016588973',
            'status' => 'approved',
            'address' => 'address',
            'badge' => '5',
        ]);

        $user->assignRole($role3);

        
    }
}
