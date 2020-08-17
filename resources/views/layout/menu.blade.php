<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                {{-- <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="index.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a> --}}
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Catálogo
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <div class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError" >
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ url('indexProfesor') }}">Profesores</a>
                                <a class="nav-link" href="{{ url('indexCarrera') }}">Carreras</a>
                                <a class="nav-link" href="{{ url('indexMateria')}}">Materias</a>
                                <a class="nav-link" href="{{ url('indexSesion')}}">Sesión</a>
                            </nav>
                        </div>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="{{url('tutoriales')}}"  aria-expanded="false" >
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Tutorial
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                {{-- <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <div class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError" >
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ url('indexProfesor') }}">Profesores</a>
                                <a class="nav-link" href="{{ url('indexCarrera') }}">Carreras</a>
                                <a class="nav-link" href="{{ url('indexMateria')}}">Materias</a>
                                <a class="nav-link" href="{{ url('indexSesion')}}">Sesión</a>
                            </nav>
                        </div>
                    </nav>
                </div> --}}
                {{-- <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        <a class="nav-link" href="{{url('tutoriales')}}">Tutoriales</a>
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a> --}}
                {{-- <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="layout-static.html">Usuarios</a>
                        <a class="nav-link" href="layout-sidenav-light.html">Perfiles</a>
                    </nav>
                </div> --}}
                {{-- <div class="sb-sidenav-menu-heading">Tutoriales</div>
                <a class="nav-link" href="charts.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Charts
                </a>
                <a class="nav-link" href="tables.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Tables
                </a>  --}}
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div>