@include('layouts.head')
    <body class="flex flex-col bg-white text-gray-800 min-h-screen">

      <div id="nav">
        <nav-bar />
      </div>

      <div class="container mx-auto sm:mt-10 lg:mt-6 sm:mb-16 px-6">

        @yield('content')

      </div>

      {{-- footer --}}
      <div class="flex h-16 bg-gray-300 mt-auto px-6 sm:px-0">
        <div class="my-auto container mx-auto">
          <p class="">Made with the <a class="text-indigo-900" href="https://www.themoviedb.org/">TMDB API</a></p>
        </div>
      </div>
      <script src="{{ mix('/js/app.js')}}"></script>
    </body>
</html>
