<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Blog;
use Illuminate\Auth\Access\HandlesAuthorization;

class BlogPolicy
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

    //User class to Access all blogs
    public function access(User $user) 
    {
        return $user->hasPermissionTo('blog_access');
    }

    
    //User class to create a blog
    public function create(User $user) 
    {
        return $user->hasPermissionTo('publish_blog');
    }

    //User class to delete a blog
    public function delete(User $user) 
    {
        return $user->hasPermissionTo('delete_blog');
    }

    //User class to read a blog
    public function read(User $user) 
    {
        return $user->hasPermissionTo('read_blog');
    }

    //User class to update a blog
    public function update(User $user) 
    {
        return $user->hasPermissionTo('edit_blog');
    }
}
