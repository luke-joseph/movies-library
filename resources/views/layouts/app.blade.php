@include('layouts.head')
    <body class="flex flex-col bg-gray-800 text-gray-300 min-h-screen">

      @include('layouts.nav')

      <div class="container mx-auto sm:mt-10 sm:mb-16 px-6 lg:px-0">

        @yield('content')

      </div>

      {{-- footer --}}
      <div class="flex h-16 bg-black mt-auto px-6 sm:px-0">
        <div class="my-auto container mx-auto">
          <p class="">Made with TMDB</p>
        </div>
      </div>
      <script src="{{ mix('/js/app.js')}}"></script>
    </body>
</html>
