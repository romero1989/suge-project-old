@extends('layout.padrao')
@section('title', 'Perfil - ')

@section('conteudo')

<div class="page-title">
    @include('title', array('diretorio'=>'Perfil', 'acao'=>'Lista de Perfil'))
    @include('breadcrumb', array('diretorio'=>'Perfil', 'acao'=>'Lista de Perfil'))   
</div>

@include('success')
@include('modal')

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Lista de Perfil</h3>
    </div>
    <div class="panel-body">
        <p>
            <a href="{{ action('Auth\AuthController@getRegister')}}" class="btn btn-info">Novo</a>        
        </p>
            <table id="example-1" class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example-1_info" style="width: 100%;">
                <thead>
                    <tr role="row">
                        <th style="width: 200px;">Nome</th>
                        <th style="width: 200px;">E-mail</th>
                        <!-- <th class="text-center" style="width: 80px;">Telefone</th> -->
                        <th class="text-center" style="width: 70px;">Status</th>
                        <th class="text-center" style="width: 70px;">Opções</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $u)
                    <tr role="row" class="odd">
                        <td>{{$u->name}}</td>
                        <td>{{$u->email}}</td>
                        <!-- <td>{{$u->password}}</td> -->
                         <td class="text-center">
                        @if($u->status == 1)
                            <span class="label label-success">{{ 'Ativo' }}</span>
                        @else
                            <span class="label label-danger">{{ 'Inativo' }}</span>
                        @endif
                        </td> 
                        <td class="text-center">  
                            <a class="fa-pencil" href="{{ action('UsuarioController@edit', $u->id) }}"></a> 
                            <a class="fa-search" href="{{ action('Auth\AuthController@getRegister', array('registerView' => $u->id)) }}"></a>
                            <a href="#" class="fa-trash" data-href="{{ action('UsuarioController@delete', $u->id) }}" data-toggle="modal" data-target="#confirm-delete"></a><br>
                        </td>  
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>

</div>

<script>
    $('#confirm-delete').on('show.bs.modal', function (e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

        //$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
    });

    $(document).ready(function ($) {
        $('#flash_message').fadeOut(3000);
    });
</script>

@stop


