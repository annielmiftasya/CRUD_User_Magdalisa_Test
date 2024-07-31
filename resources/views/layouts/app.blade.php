<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>@yield('title')</title>
   <link rel="stylesheet" href="{{ asset('/resources/css/app.css') }}">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   @stack('styles')
   @stack('scripts') <!-- For custom JavaScript if needed -->
</head>

<body>
   <div class="container">
      @yield('content')
   </div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   @stack('scripts')
</body>

</html>