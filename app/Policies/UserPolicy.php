<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
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
      return  $user->hasPermissionTo('user_access');
     }
 
     
     //User class to create a Role
     public function create(User $user) 
     {
      return  $user->hasPermissionTo('publish_user');
     }
 
     //User class to delete a Role
     public function delete(User $user) 
     {
      return  $user->hasPermissionTo('delete_user');
     }
 
     //User class to read a Role
     public function read(User $user) 
     {
      return  $user->hasPermissionTo('read_user');
     }
 
     //User class to update a Role
     public function update(User $user) 
     {
      return  $user->hasPermissionTo('edit_user');
     }
}
