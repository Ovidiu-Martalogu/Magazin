
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest</title>
     <!-- Fonts -->
     <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->


<style>
  
     
        
li a:hover{background-color:lightgrey}
       /* @ media only screen and(max-width:620px)
        {.menu, .main,.right{width:100%;}}*/
       
        </style>

</head>
<body>
@if ($message=Session::get("success"))

<div class="alert alert-success">
    {{$message}}
</div>
@endif
<br>
    <h3> Va prezentam o selectie din produsele disponibile:</h3>
    <br>
    
<li><a href="/Nastris">Pentru a putea beneficia de serviciile
    noastre, va rugam sa va autentificati/creati cont</a></li>
    
<br>



    <table style="border:2px solid blue">
    <tr>
        <th style="border:2px solid blue">Imagine</th><br>
        <th style="border:2px solid blue">Model</th>
        <th style="border:2px solid blue">Specificatii</th>
        <th style="border:2px solid blue">Pret</th>
        <th style="border:2px solid blue">Culoare</th>
       
        </tr>
            
<div class="container">

    @if(count($data)>0)
    @foreach($data as $row)
    <div class="row">
        <tr>
        <div class="col">
            <td style="border:2px solid grey"><img src="{{asset('/images/'.$row->image)}}" style="width:100px" alt="{{$row->product_name}}" /></td>
        </div>
        <div class="col">
        <td style="border:2px solid grey"> {{$row->product_name}}</td>
        </div>
        <div class="col">
        <td style="border:2px solid grey"> {{$row->description}}</td>
        </div>
        <div class="col">
        <td style="border:2px solid grey"> {{$row->price}}</td>
        </div>
        <div class="col">
        <td style="border:2px solid grey"> {{$row->color}}</td>
        </div>
 
    @endforeach

@endif


    </body>
    </html>