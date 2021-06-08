@include('layouts.head')
    <body class="border-t-4 border-indigo-600 bg-gray-800 text-gray-300">

      @include('layouts.nav')

      <div class="container mx-auto mt-16 mb-16">

        @yield('content')

      </div>

      <div class="h-16 bg-black">

      </div>
    </body>
</html>
