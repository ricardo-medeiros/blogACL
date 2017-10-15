<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Gate;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        //$posts = $post->all();
        //$posts = $post->where('user_id',auth()->user()->id)->get();
        return view('home');
    }
    
    /*
    public function update($idPost){
        $post = Post::find($idPost);
        //$user = auth()->user();
        
        if (Gate::denies('edit_post',$post)){
                abort(403,'Não Autorizada');

        }
        return view('post-update',compact('post'));
    }
    */
    public function rolesPermissions(){
        $name = auth()->user()->name;
        //return 'Roles e permissoes';
        echo ("<h1>{$name}</h1>");
        foreach (auth()->user()->roles as $role){
            echo "$role->name -> ";
            
            $permissions = $role->permissions;
            foreach ($permissions as $permission){
                echo "$permission->name , ";
            }
             echo "<hr>";
        }
    }
}
