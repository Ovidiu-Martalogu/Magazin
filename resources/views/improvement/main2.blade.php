<!DOCTYPE html>
<html>
<head>
    <title>Improvement</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
body {
  background-color: coral;
}
</style>
       
</head>

<body >
<x-app-layout>
<ul  style="background-color: rgba(201, 76, 76, 0.3)">
    <li><a href="{{url('/products')}}">Home</a></li>
   
</ul>

<h3>Asteptam cu drag sugestia dumneavoastra:</h3>



       
    @yield('content')
</body>
</html>
</x-app-layout>