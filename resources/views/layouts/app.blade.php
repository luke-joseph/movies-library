@include('layouts.head')
    <body class="flex flex-col bg-white text-gray-800 min-h-screen">

      <div id="nav">
        <nav-bar />
      </div>

      <div class="container mx-auto sm:mt-10 lg:mt-6 sm:mb-16 px-6">

        @yield('content')

      </div>

      {{-- footer --}}
      <div class="flex bg-gray-800 mt-auto px-6 sm:px-0">
        <div class="my-auto container mx-auto text-gray-400">
          <div class="flex flex-col sm:flex-row justify-between py-4 text-sm">
            <p>Website by <a style="color: #fff" class="text-orange-400 underline" href="https://lukejoseph.dev/">Luke Joseph</a>.</p>
            <p class="mt-2 sm:mt-0">Content from <a style="color: #fff" class="text-orange-400 underline" href="https://www.themoviedb.org/">themoviedb API</a></p>
          </div>
        </div>
      </div>
      <script src="{{ mix('/js/app.js')}}"></script>
    </body>
</html>
