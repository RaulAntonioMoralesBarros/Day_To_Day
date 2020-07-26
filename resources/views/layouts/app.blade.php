<!DOCTYPE html>
<html class="no-js h-100" lang="es">

<head>

    {{-- metacodes --}}
    @include('layouts.metacodes')
    {{-- /metacodes --}}
    <title>
      Day To Day - @yield('title')
    </title>
    {{-- layouts --}}
    @include('layouts.css')
    {{-- /layouts --}}

</head>

<body class="h-100">
   
    {{-- button --}}
    @yield('button')
    {{-- /button --}}

    <div class="container-fluid">
        <div class="row">

            {{-- sidebar --}}
            @include('layouts.sidebar')
            {{-- /sidebar --}}

            <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">

                {{-- navbar --}}
                @include('layouts.navbar')
                {{-- /navbar --}}


                {{-- content --}}
                @yield('content')
                {{-- /content --}}

                {{-- footer --}}
                @include('layouts.footer')
                {{-- /footer --}}

            </main>
        </div>
    </div>

    {{-- library JS --}}
    @include('layouts.js')
    {{-- /library JS --}}

</body>

</html>
