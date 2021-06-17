@include('layouts.head')
    <body class="flex flex-col bg-gray-800 text-gray-300 min-h-screen">

      <div id="nav">
        <nav-bar />
      </div>

      <div class="container mx-auto sm:mt-10 lg:mt-6 sm:mb-16 px-6">

        @yield('content')

      </div>

      {{-- footer --}}
      <div class="flex h-16 bg-black mt-auto px-6 sm:px-0">
        <div class="my-auto container mx-auto">
          <p class="">Made with the <a class="text-indigo-400" href="https://www.themoviedb.org/">TMDB API</a></p>
        </div>
      </div>
      <script src="{{ mix('/js/app.js')}}"></script>
    </body>
</html>
