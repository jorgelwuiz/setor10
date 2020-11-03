<!DOCTYPE html>
<html lang="pt-br">
    <head>
        @include('layouts.head')
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            @include('layouts.navbar')
            @include('layouts.sidebar')
            @yield('content')
            @include('layouts.includes-do-rodape')
            @yield('scripts')
        </div>
    </body>
</html>
