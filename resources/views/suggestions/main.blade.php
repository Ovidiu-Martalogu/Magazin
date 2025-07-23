<!DOCTYPE html>
<html>
<head>
    <title>Sugestii si Imbunatatiri</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

       
</head>

<body>
<x-app-layout>
<div style="background-color:#f9f9f5;padding:15px;
text-align:left;">
<ul>
    <li><a href="/Nastris">Prima pagina</a></li>
    <li><a  href="{{route("suggestions.create")}}">Adauga Sugestie</a></li>
    

    


</ul>
       
    @yield('content')

</body>
</html>

</x-app-layout>

