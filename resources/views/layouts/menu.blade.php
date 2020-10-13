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
<li class="nav-item {{ Request::is('pacientes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('pacientes.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Pacientes</span>
    </a>
</li>
