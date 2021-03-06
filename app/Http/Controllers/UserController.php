<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use Gate;
use App\User;

class UserController extends Controller
{
    //
     public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Post $post)
    {
        $posts = $post->all();
        return view('acesso_post',compact('posts'));
    }
    
    public function viewUser(User $user)
    {
        $usuarios = $user->all();
        return view('acesso_usuario',compact('usuarios'));
    }
    
    //verifica se o usuário logado tem permissão para editar um Post (Model)
    public function updatePost($idPost){
        $post = Post::find($idPost);
        //$user = auth()->user();
        
        if (Gate::denies('edit_post',$post)){
                abort(403,'Não Autorizada');

        }
        return view('post-update',compact('post'));
    }
}
