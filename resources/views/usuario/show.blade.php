@extends('layout.padrao')
@section('title', 'Edição de Usuários ')

@section('conteudo')

<div class="page-title">
    @include('title', array('diretorio'=>'Usuário', 'acao'=>'Visualizar'))
    @include('breadcrumb', array('diretorio'=>'Usuário', 'acao'=>'Visualizar'))
</div>



<div class="container">
    <h1>Visualizar Usuário</h1>

    <!--Campo Nome--> 
    
    <p>Nome do Usuário: {{$usuario->nome}}</p>
    </br>
    </br>

    <p>E-mail: {{$usuario->email}}</p>
    </br>
    </br>
    <!--Campo senha--> 

    <p>Telefone: {{$usuario->telefone}}</p>
    </br>
    </br>

    <p>Status: {{$usuario->status}}</p>

</div>

<script>
    $(document).ready(function ($) {
        $('input[name=telefone]').mask('(99) 99999-9999');
    });
</script>


@stop


