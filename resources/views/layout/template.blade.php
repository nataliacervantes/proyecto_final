<!DOCTYPE html>
<html lang="en">
    @include('layout.head')
    <body class="sb-nav-fixed">
        @include('layout.navbar')
        <div id="layoutSidenav">
            @include('layout.menu')
            <div id="layoutSidenav_content">
                <main>
                   @yield('content')
                </main>
                @include('layout.footer')
            </div>
        </div>
        @include('layout.scripts')
        @yield('scripts')
    </body>
</html>
