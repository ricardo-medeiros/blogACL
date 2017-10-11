<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\User;
use App\Post;

class PostPolicy
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
    
    public function updatePost(User $user,Post $post){
        //$gate->define('update-post',function(User $user,POst $post){
                return $user->id == $post->user_id;
    }
}
