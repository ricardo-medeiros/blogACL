<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Permission;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'cpf', 'status' ,'password', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    //relaciona os perfis dos usuários
    public function roles(){
        return $this->belongsToMany(\App\Role::class);
    }

    //verifica as permissões do usuarios (alterar, excluir, criar, visualizar) 
    public function hasPermission(Permission $permission){
       
        return $this->hasAnyRoles($permission->roles);
        
    }
    
    //verifica se a permissão esta de acordo com o perfil do usuário
    public function hasAnyRoles($roles){
        
        if (is_array($roles) || is_object($roles)){
            //foreach ($roles as $role){
            //    return $this->hasAnyRoles($role);
            //}
            return !! $roles->intersect($this->roles)->count();
        }
        return $this->roles->contains('name',$roles);
    }
}
