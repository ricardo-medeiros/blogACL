@extends('layouts.app')

@section('content')
<div class="container">
    <section class="content-wrapper">
        <div class="row">
            @forelse($posts as $post)
            @can('view_post', $post)
            <h1>{{$post->title}}</h1>
            <p>{{$post->description}}</p><br>
            <b>Autor: {{$post->user->name}}</b>
            <a href="{{url("/post/$post->id/update")}}">Editar</a>
            @endcan
            <hr>

            @empty
            <p>Nenhum post cadastrado</p>
            @endforelse
        </div>
    </section>
</div>
@endsection
