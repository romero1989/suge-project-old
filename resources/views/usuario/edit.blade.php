@extends('layout.padrao')
@section('title', 'Edição de Usuários ')

@section('conteudo')

<div class="page-title">
    @include('title', array('diretorio'=>'Usuário', 'acao'=>'Editar'))
    @include('breadcrumb', array('diretorio'=>'Usuário', 'acao'=>'Editar'))
</div>



<div class="container">
    <h1>Editar Usuário</h1>

    @include('success')
    @include('error')
    @include('alert')

    {!! Form::model($usuario, ['method' => 'PATCH', 'action' => ['UsuarioController@update', $usuario->id]]) !!}

    <!--Campo Nome--> 
    {!! Form::label('nome_label', 'Nome do Usuário: ') !!}
    {!! Form::text('nome', $usuario->name) !!}
    </br>
    </br>

    <!--Campo email--> 
    {!! Form::label('email_label', 'E-Mail: ') !!}
    {!! Form::email('email', $usuario->email) !!}
    </br>
    </br>
    <!--Campo senha--> 

    
    <!--Campo status--> 
    {!! Form::label('statul_label', 'Status: ') !!}
    {!! Form::select('status', array('a' => ' -- Escolha --', '0' => 'Inativo', '1' => 'Ativo')) !!}
    </br>
    </br>
    {{ Form::hidden('id', $usuario->id) }}

    <div class="form-group">
        {!! Form::submit('Atualizar Usuário', ['class' => 'btn btn-primary']) !!}    
    </div>



    {!! Form::close() !!}


</div>

<div>
    <p>
        <a href="{{ action('UsuarioController@index')}}" class="btn btn-default">Voltar </a>        
    </p>    
</div>

<script>
    $(document).ready(function ($) {
        $('input[name=telefone]').mask('(99) 99999-9999');
        $('#flash_message').fadeOut(3000);
    });
</script>


@stop


