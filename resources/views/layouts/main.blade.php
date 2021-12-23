<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Ticket booking system</title>
   <link rel="stylesheet" href="{{ asset('css/app.css') }}">
   <link rel="stylesheet" href="./node_modules/@fortawesome/fontawesome-free/css/all.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' type='text/javascript'></script>
   <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
   @include('partials.nav')
   <main class="grid gap-4 py-4 mx-auto lg:grid-cols-3 max-w-screen-2xl">
      <aside class="col-span-1 bg-white rounded">
         @include('partials.sidebar')
      </aside>

      <section class="col-span-2 bg-white rounded">
         @include('partials.alerts')
         @yield('content')
      </section>
   </main>
   <footer>
      @include('partials.footer')
   </footer>

</body>

</html>