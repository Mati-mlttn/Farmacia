<!DOCTYPE html>
<html lang="en">
@include('layouts.head')

<body>
    @include('layouts.nav')
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            @include('layouts.menu')
        </div>
        <div id="layoutSidenav_content">
            <main>
                @yield('content')

            </main>
            @include('layouts.footer')
        </div>
    </div>
    @include('layouts.scripts')
</body>

</html>
