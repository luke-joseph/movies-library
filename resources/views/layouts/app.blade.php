@include('layouts.head')
    <body class="flex flex-col bg-gray-800 text-gray-300 min-h-screen">

      @include('layouts.nav')

      <div class="container mx-auto mt-10 mb-16">

        @yield('content')

      </div>

{{-- footer --}}
      <div class="flex h-16 bg-black mt-auto">
        <div class="my-auto container mx-auto">
          <p class="">Made with love in Berlin</p>
        </div>
      </div>
    </body>
</html>
