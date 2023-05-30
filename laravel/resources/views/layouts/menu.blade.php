<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            
            <a class="nav-link" href="{{ route('home.index') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                Prescripcion
            </a>

            <a class="nav-link" href="{{ route('medicamentos.index') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-boxes-stacked"></i></div>
                Inventario
            </a>
            
            <a class="nav-link" href="index.html">
                <div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></div>
                Informes
            </a>

            <a class="nav-link" href="{{ route('medicamentos.create') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></div>
                Agregar Medicamento
            </a>

            <a class="nav-link" href="{{ route('login.view') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></div>
                Login
            </a>

        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        Start Bootstrap
    </div>
</nav>