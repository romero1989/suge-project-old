<li>
    <a href="#">
        <i class="fa-mortar-board"></i>
        <span class="title">Secretaria Acadêmica</span>
    </a>

    <ul>
        @permission('view.requerimento') 
        <li>
            <a href="#">
                <span class="title">Requerimentos</span>
            </a>

            <ul>
                <li>
                    <a href="/docente/cadastrar/">
                        <span class="title">Listar</span>
                    </a>
                </li>

            </ul>
        </li>
        @endpermission

        @permission('view.declaracao')
        <li>
            <a href="/matricula/cancelar/">
                <span class="title">Declarações</span>
            </a>
            <ul>
                <li>
                    <a href="/matricula/cancelar/">
                        <span class="title">Nada Consta</span>
                    </a>
                </li>
                <li>
                    <a href="/matricula/cancelar/">
                        <span class="title">Regularmente Matriculado</span>
                    </a>
                </li>
                <li>
                    <a href="/matricula/cancelar/">
                        <span class="title">Pendências</span>
                    </a>
                </li>
            </ul>
        </li>
        @endpermission
        <!--
            <li>
                <a href="#">
                    <span class="title">Matrícula</span>
                </a>
                <ul>
                    <li>
                        <a href="/matricula/cadastrar/">
                            <span class="title">Cadastrar</span>
                        </a>
                    </li>
                    <li>
                        <a href="/matricula/editar/">
                            <span class="title">Editar</span>
                        </a>
                    </li>
                    <li>
                        <a href="/matricula/cancelar/">
                            <span class="title">Cancelar</span>
                        </a>
                    </li>
                </ul>
            </li>
    
            <li>
                <a href="#">
                    <span class="title">Matriz Curricular e Componentes</span>
                </a>
                <ul>
                    <li>
                        <a href="/matriz/cadastrar/">
                            <span class="title">Cadastrar</span>
                        </a>
                    </li>
                    <li>
                        <a href="/matriz/editar/">
                            <span class="title">Editar</span>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="#">
                            <span class="title">Componentes</span>
                        </a>
                        <ul>
                            <li>
                                <a href="/componente/cadastrar/">
                                    <span class="title">Cadastrar</span>
                                </a>
                            </li>
                            <li>
                                <a href="/componente/editar/">
                                    <span class="title">Editar</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
    
            <li>
                <a href="#">
                    <span class="title">Cursos</span>
                </a>
                <ul>
                    <li>
                        <a href="/curso/cadastrar/">
                            <span class="title">Cadastrar</span>
                        </a>
                    </li>
                    <li>
                        <a href="/curso/editar/">
                            <span class="title">Editar</span>
                        </a>
                    </li>
                </ul>
            </li>
    
            <li>
                <a href="#">
                    <span class="title">Turmas</span>
                </a>
                <ul>
                    <li>
                        <a href="/turma/cadastrar/">
                            <span class="title">Cadastrar</span>
                        </a>
                    </li>
                    <li>
                        <a href="/turma/editar/">
                            <span class="title">Editar</span>
                        </a>
                    </li>
                    <li>
                        <a href="/turma/vincular/">
                            <span class="title">Vincular</span>
                        </a>
                    </li>
                </ul>
            </li>
    
            <li>
                <a href="/diaria/consultar/">
                    <span class="title">Diários</span>
                    <span class="label label-pink pull-right hidden-collapsed">Novo</span>
                </a>
            </li>
    
            <li>
                <a href="#">
                    <span class="title">Docente</span>
                </a>
    
                <ul>
                    <li>
                        <a href="/docente/cadastrar/">
                            <span class="title">Cadastrar</span>
                        </a>
                    </li>
                    <li>
                        <a href="/docente/editar/">
                            <span class="title">Editar</span>
                        </a>
                    </li>
                </ul>
            </li>
    
    
            <li>
                <a href="#">
                    <span class="title">Diplomação</span>
                </a>
                <ul>
                    <li>
                        <a href="/diploma/emitir/">
                            <span class="title">Emitir</span>
                        </a>
                    </li>
                </ul>
            </li>
    
    
            <li>
                <a href="/diaria/consultar/">
                    <span class="title">Relatórios</span>
                    <span class="label label-pink pull-right hidden-collapsed">Novo</span>
                </a>
                <ul>
                    <li>
                        <a href="/matricula/cadastrar/">
                            <span class="title">Boletins</span>
                        </a>
                    </li>
                    <li>
                        <a href="/matricula/editar/">
                            <span class="title">Histórico Escolar</span>
                        </a>
                    </li>
                </ul>
        -->
    </ul>
</li>

