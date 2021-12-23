<div class="flex flex-col p-5 space-y-5 bg-gray-100">
   <h2 class="text-2xl font-semibold">Sidebar</h2>
   @auth
   <a href="{{ route('tickets.create') }}" class="p-2 text-white bg-blue-600 rounded-lg hover:bg-blue-500">
      <i class="px-2 fas fa-plus-square"></i>
      Add new ticket
   </a>
   @endauth
   <a href="{{ route('login') }}" class="p-2 text-white bg-indigo-500 rounded-lg hover:bg-indigo-400">
      <i class="px-2 fas fa-user"></i>
      Login
   </a>
   <a href="{{ route('register') }}" class="p-2 text-white bg-teal-600 rounded-lg hover:bg-teal-500">
      <i class="px-2 fas fa-user-plus"></i>
      Register
   </a>
</div>