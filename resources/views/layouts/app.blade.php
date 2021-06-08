@include('layouts.head')
    <body class="border-t-4 border-indigo-600 bg-gray-800 text-gray-300 mb-16">

      @include('layouts.nav')

      <div class="container mx-auto mt-16">

        @yield('content')

      </div>

    </body>
</html>
