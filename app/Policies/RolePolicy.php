<?php

namespace App\Policies;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Auth\Access\HandlesAuthorization;

class RolePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function access(User $user) 
     {
        $user->hasPermissionTo('role_access');
        
     }
 
     
     //User class to create a Role
     public function create(User $user) 
     {
        return $user->hasPermissionTo('publish_role');
         
         
     }
 
     //User class to delete a Role
     public function delete(User $user) 
     {
        return $user->hasPermissionTo('delete_role');
     }
 
     //User class to read a Role
     public function read(User $user) 
     {
        return $user->hasPermissionTo('read_role');
         
     }
 
     //User class to update a Role
     public function update(User $user) 
     {
        return $user->hasPermissionTo('edit_role');
     }
}
