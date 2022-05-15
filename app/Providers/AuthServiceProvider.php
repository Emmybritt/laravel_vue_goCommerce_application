<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Models\Blog;
use App\Policies\BlogPolicy;
use App\Policies\UserPolicy;
use App\Policies\RolePolicy;
use App\Policies\PermissionPolicy;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        Blog::class => BlogPolicy::class,
        Role::class => RolePolicy::class,
        Permission::class => PermissionPolicy::class,
        User::class => UserPolicy::class,

    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::before(function ($user, $ability) {
            if ($user->hasRole('super_admin')) {
                return true;
            }
        });

        // This are list of of gates define for blogs
        Gate::define('update_blog', [BlogPolicy::class, 'update']);
        Gate::define('delete_blog', [BlogPolicy::class, 'delete']);
        Gate::define('create_blog', [BlogPolicy::class, 'create']);
        Gate::define('read_blog', [BlogPolicy::class, 'read']);
        Gate::define('blog_access', [BlogPolicy::class, 'access']);

        // This are list of of gates define for users
        Gate::define('update_user', [UserPolicy::class, 'update']);
        Gate::define('delete_user', [UserPolicy::class, 'delete']);
        Gate::define('create_user', [UserPolicy::class, 'create']);
        Gate::define('read_user', [UserPolicy::class, 'read']);
        Gate::define('user_access', [UserPolicy::class, 'access']);

        // This are list of of gates define for roles
        Gate::define('update_role', [RolePolicy::class, 'update']);
        Gate::define('delete_role', [RolePolicy::class, 'delete']);
        Gate::define('create_role', [RolePolicy::class, 'create']);
        Gate::define('read_role', [RolePolicy::class, 'read']);
        Gate::define('role_access', [RolePolicy::class, 'access']);


        // This are list of of gates define for permissions
        Gate::define('update_permission', [PermissionPolicy::class, 'update']);
        Gate::define('delete_permission', [PermissionPolicy::class, 'delete']);
        Gate::define('create_permission', [PermissionPolicy::class, 'create']);
        Gate::define('read_permission', [PermissionPolicy::class, 'read']);
        Gate::define('permission_access', [PermissionPolicy::class, 'access']);
    }
}
