<li class="nav-item {{ Request::is('auditorias*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('auditorias.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Auditorias</span>
    </a>
</li>
</li>
<li class="nav-item {{ Request::is('pacients*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('pacients.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Pacientes</span>
    </a>
    <li class="nav-item {{ Request::is('reportes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ url('reportes') }}">
       <i class="fa fa-address-book"></i>
        <span>Reportes</span>
    </a>
</li>
</li>
