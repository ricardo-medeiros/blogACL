@extends('layouts.app')

@section('content')
<div class="container">

    <section class="content-header">
        <h1>
            Usuários
        </h1>
        <ol class="breadcrumb">

        </ol>
    </section>
    <section class="content">                        
        <div class="row">
            <div class="col-xs-12">                               
                <div class="box box-primary">                                                      
                    <div class="box-body" id="resultado">
                        <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                            <div class="row">
                                <div class="container">
                                    <table class="table table-hover" style="width: 90%;">
                                        <thead>
                                            <tr>
                                                <th>CPF</th>
                                                <th>NOME</th>
                                                <th>Email</th>
                                                <th>Ações</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($usuarios as $usuario)
                                            @can('view_user', $usuario)
                                            <tr>
                                                <td>{{$usuario->cpf}}</td>
                                                <td>{{$usuario->name}}</td>
                                                <td>{{$usuario->email}}</td>
                                                <td>
                                                    @can('edit_user', $usuario)
                                                    <button type="button" name="Alterar" class=" btn btn-success">Alterar</button>
                                                    @endcan
                                                    <button type="button" name="Visualizar" class="btn btn-warning">Visualizar</button>
                                                </td>
                                            </tr> 
                                            @endcan
                                            @empty
                                                <tr>
                                                    <td><p>Nenhum post cadastrado</p>
                                                    </td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>                                    
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>        
</div>
@endsection
