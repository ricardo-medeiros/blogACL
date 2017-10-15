<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Post;
use App\User;
use App\Policies\PostPolicy;
use App\Permission;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        //'App\Model' => 'App\Policies\ModelPolicy',
        //\App\Post::class => \App\Policies\PostPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);
        /*
        $gate->define('update-post',function(User $user,Post $post){
                return $user->id == $post->user_id;
        });
        */
        $permissions = Permission::with('roles')->get();
        //dd($permissions);
        foreach ($permissions as $permission){
            $gate->define($permission->name,function(User $user) use ($permission){
                return $user->hasPermission($permission);
            });
        }
        
        
        $gate->before(function(User $user, $ability){
            //Super Usuário
            //Quando o perfil do usuário for admin, ele pode fazer qualquer ação no sistema, sem a necessidade
            //de verificar a ação já autorizada.
            if ($user->hasAnyRoles("admin"))
            {
                return true;
            }
            
        });
    }
}
