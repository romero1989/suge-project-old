<div class="breadcrumb-env">

    <ol class="breadcrumb bc-1" >
        <li>
            <a href="{{ url('/') }}"><i class="fa-home"></i>Início</a>
        </li>
        <li>
            <a href="{{ url($diretorio) }}">{{ $titulo or 'Default' }}</a>
        </li>
        <li class="active">
            <strong>{{ $acao or 'Default' }}</strong>
        </li>
    </ol>

</div>