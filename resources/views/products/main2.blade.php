<!DOCTYPE html>
<html>
<head>
    <title>Produse</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    h3 {color:"SandyBrown "}
</style> 
       
</head>

<body >
<ul  style="background-color:#a7a7e5">
    <li><a href="{{url('/products')}}">Back</a></li>
   
</ul>



<div style="background-color:#f9f9e5;padding:15px;
text-align:left;">

       
    @yield('content')
</body>
</html>