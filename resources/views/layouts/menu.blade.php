

<li class="nav-item">
    <a href="{{ route('mobileLegendStats.index') }}"
       class="nav-link {{ Request::is('mobileLegendStats*') ? 'active' : '' }}">
        <p>Mobile Legend Stats</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('logs.index') }}"
       class="nav-link {{ Request::is('logs*') ? 'active' : '' }}">
        <p>Logs</p>
    </a>
</li>


