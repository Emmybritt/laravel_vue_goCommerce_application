<?php

namespace App\Policies;

use App\Models\User;
use Spatie\Permission\Models\Permission;
use Illuminate\Auth\Access\HandlesAuthorization;

class PermissionPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

     //
     public function access(User $user, Permission $permission) 
     {
         
     }
 
     
     //User class to create a permission
     public function create(User $user, Permission $permission) 
     {
         
     }
 
     //User class to delete a permission
     public function delete(User $user, Permission $permission) 
     {
         
     }
 
     //User class to read a permission
     public function read(User $user, Permission $permission) 
     {
         
     }
 
     //User class to update a permission
     public function update(User $user, permission $permission) 
     {
         
     }
}
