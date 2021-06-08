@include('layouts.head')
    <body class="flex flex-col bg-gray-800 text-gray-300 min-h-screen">

      @include('layouts.nav')

      <div class="container mx-auto mt-10 mb-16">

        @yield('content')

      </div>

{{-- footer --}}
      <div class="h-16 bg-black mt-auto">

      </div>
    </body>
</html>
