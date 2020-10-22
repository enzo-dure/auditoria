<li class="nav-item {{ Request::is('auditorias*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('auditorias.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Auditorias</span>
    </a>
</li>
<li class="nav-item {{ Request::is('usuarios*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('usuarios.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Usuarios</span>
    </a>
</li>

<li class="nav-item {{ Request::is('casoPositivos*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('casoPositivos.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Caso Positivos</span>
    </a>
</li>
<li class="nav-item {{ Request::is('pacients*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('pacients.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Pacients</span>
    </a>
</li>
