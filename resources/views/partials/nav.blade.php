<nav class="justify-between p-6 text-white md:flex bg-cyan-700">
   <ul class="flex items-center space-x-5">
      <li>
         <a href="/">Home</a>
      </li>
      <li>
         <a href="{{ route('tickets') }}">Tickets</a>
      </li>
      @auth
      <li>
         Hi {{ auth()->user()->name }}
      </li>
      <li>
         <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit">Logout</button>
         </form>
      </li>
      @endauth
      @guest
      <li>
         You are not signed in
      </li>
      @endguest
   </ul>
   <div class="md:flex md:justify-end">
      <form action="{{ route('search') }}" method="GET">
         <div class="flex items-center justify-center">
            <div class="flex">
               <input type="text" name="search" class="w-full px-4 py-1 md:w-40 rounded-l-md" placeholder="Search...">
               <button class="flex items-center justify-center px-4 rounded-r-md bg-slate-300">
                  <svg class="w-4 h-4 text-gray-600" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                     <path d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
                  </svg>
               </button>
            </div>
         </div>
      </form>
   </div>
</nav>