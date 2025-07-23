<!DOCTYPE html>
<html>
<head>
    <title>Produse</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

       
</head>

<body>
<x-app-layout >
<div style="background-color:#AFEEEE;padding:15px;
text-align:left;">
@can('isAdmin')
<ul>
    <!--  -->
    <li><a href="/Nastris">Prima pagina</a></li>
    <li><a href="/orders">Informatii Comenzi</a></li>
    {{--<li><a href="/suggestions">Informatii Sugestii</a></li> --}}
    <li><a href="/improvement">Informatii Opinii</a></li>
    <li><a href="/drive_test">Informatii Drive Test</a></li>
    {{-- <li><a  href="/cart">Vizualizeaza cosul de cumparaturi</a></li> --}}
    <li><a  href="{{route("products.create")}}">Adauga Produs</a></li>
    <li><a  href="{{route("orders.create")}}">Adauga Comanda</a></li>
    {{-- <li><a  href="{{route("suggestions.create")}}">Adauga Sugestie</a></li> --}}
    <li><a  href="{{route("improvement.create")}}">Adauga Opinie</a></li>
    <li><a  href="{{route("drive_test.create")}}">Programeaza Drive test</a></li>
    {{-- <li><a  href="{{route("cart.create")}}">Adauga in cosul de cumparaturi</a></li> --}}
    
</ul>
@else
<ul>
    <li><a href="/Nastris">Prima pagina</a></li>
    <li><a  href="{{route("orders.create")}}">Adauga Comanda</a></li>
   {{-- <li><a  href="{{route("suggestions.create")}}">Adauga Sugestie</a></li> --}}
    <li><a  href="{{route("improvement.create")}}">Adauga Opinie</a></li>
    <li><a  href="{{route("drive_test.create")}}">Programeaza Drive test</a></li>
</ul>
  @endcan
       
    @yield('content')

</body>
</html>
</x-app-layout>
