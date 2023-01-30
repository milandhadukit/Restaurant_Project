<!doctype html>
<html>
<head>
   @include('layouts.head')
</head>
<body>
<div class="container">
   <header class="row">
       @include('Admin.header')
   </header>
   <div id="main" class="row">
           @yield('content')
   </div>
  
</div>
</body>
</html>