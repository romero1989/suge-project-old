@extends('layout.padrao')
@section('title', 'Cadastro de Usuários ')

@section('conteudo')

<div class="page-title">
    @include('title', array('diretorio'=>'Usuário', 'acao'=>'Cadastrar'))
    @include('breadcrumb', array('diretorio'=>'Usuário', 'acao'=>'Cadastrar'))
</div>

<div class="panel panel-default">
			
        <div class="panel-heading">
                <div class="panel-title">
                        Novo Usuário
                </div>
        </div>

        <div class="panel-body">
            
            @include('success')
            @include('error')
            @include('alert')

                {!! Form::open(array('action' =>'UsuarioController@store')) !!}

                        <div class="form-group">
                                <!-- Campo Nome -->
                                {!! Form::label('nome_label', 'Nome', ['class' => 'control-label']) !!}
                                {!! Form::text('nome', '', ['class' => 'form-control', 'placeholder' => 'Nome Completo']) !!}
                        </div>
                
                        <div class="form-group">
                                <!-- Campo email -->
                                {!! Form::label('email_label', 'E-Mail', ['class' => 'control-label']) !!}
                                {!! Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'usuario@provedor.com']) !!}
                        </div>
                
                        <div class="form-group">
                                <!-- Campo senha -->
                                {!! Form::label('senha_label', 'Senha', ['class' => 'control-label']) !!}
                                {!! Form::password('senha', ['class' => 'form-control']) !!}
                        </div>
                
                        <div class="form-group">
                                {!! Form::label('contrasenha_label', 'Confirmar Senha', ['class' => 'control-label']) !!}
                                {!! Form::password('contrasenha', ['class' => 'form-control']) !!}
                        </div>
                
                        <div class="form-group">
                                <!-- Campo telefone -->
                                {!! Form::label('telefone_label', 'Telefone', ['class' => 'control-label']) !!}
                                {!! Form::text('telefone', '', ['class' => 'form-control', 'placeholder' => '(xx) 9999-9999 ou (xx) 99999-9999']) !!}
                        </div>
                
                        <div class="form-group">
                                <!-- Campo status -->
                                {!! Form::label('statul_label', 'Status:', ['class' => 'control-label']) !!}
                                {!! Form::select('status', array('a' => ' -- Escolha --', '0' => 'Inativo', '1' => 'Ativo')) !!}
                        </div>

                        <div class="form-group">
                                {!! Form::submit('Cadastrar Usuário', ['class' => 'btn btn-primary']) !!}
                                <a href="{{ action('UsuarioController@index')}}" class="btn btn-white">Voltar </a>
                        </div>

                {!! Form::token() !!}

                {!! Form::close() !!}

        </div>

</div>

<script>
    $(document).ready(function ($) {
        //$('input[name=telefone]').mask('(99) 99999-9999');
        $('input[name=telefone]').focusout(function(){
                var phone, element;
                element = $(this);
                element.unmask();
                phone = element.val().replace(/\D/g, '');
                if(phone.length > 10) {
                        element.mask("(99) 99999-9999");
                } else {
                        element.mask("(99) 9999-99999");
                }
        }).trigger('focusout');
        $('#flash_message').fadeOut(3000);
    });
</script>
@stop


