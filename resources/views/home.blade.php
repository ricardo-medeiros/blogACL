@extends('layouts.app')

@section('content')
<div class="container">
    <!--<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>-->
    @forelse($posts as $post)
        
        <h1>{{$post->title}}</h1>
        <p>{{$post->description}}</p><br>
        <b>Autor: {{$post->user->name}}</b>
        @can('update-post', $post)
        <a href="{{url("/post/$post->id/update")}}">Editar</a>
        @endcan
        <hr>
        
    @empty
        <p>Nenhum post cadastrado</p>
    @endforelse
</div>
@endsection
