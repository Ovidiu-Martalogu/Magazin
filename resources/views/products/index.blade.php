@extends('products/main')

@section('content')
<style>
   
        .menu {float:left;
               width:20%;
            text-align:center;}
        .menu a {background-color:#e5e5e5;
                     padding:8px;
                    margin-top:7px;
                    display:block;
                    width:100%;
                   color:black;}
         .main {float:left;
                        width:100%;
                        padding:0 20px;}   
        .right{background-color:#e5a5a5;
                float:left;
                 width:20%;
                padding:15px;
                margin-top:7px;
                text-align:center;}
    ul { list-style-type:none;
        background-color:#e5a5a5;
      margin:0;
      padding:0;
      overflow:hidden;
      }
        li a{display:block;
     color:blue;
     text-align:center;
     padding:16px;
    text-decoration:none;}
    li {float:left;}
li a:hover{background-color:#111111;}
       /* @ media only screen and(max-width:620px)
        {.menu, .main,.right{width:100%;}}*/
        </style>


@if ($message=Session::get("success"))

<div class="alert alert-success">
    {{$message}}
</div>
@endif
<h4> Modele disponibile:</h4>

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
       
@can('isAdmin')

        <div class="col">
            <td style="border:2px solid grey"><a href="{{route('products.edit',$row->id)}}" class="btn btn-primary btn-sm mt-2">Modifica</a><td>
            <form method="post" action="{{route('products.destroy',$row->id)}}">
            <div class="col">
            
            @csrf
            @method('delete')
             <td style="border:2px solid grey"><button class="btn btn-danger btn-sm mt-2">Sterge</button></form></td>
             </div> 
            {{-- 
             </div> 
             <div class="col">
            <td style="border:2px solid grey"><a href="{{route("cart.create")}}" class="btn btn-primary btn-sm mt-2">Adauga in cosul de cumparaturi</a><td>
            <form method="post" action="{{route("cart.create")}}"> 
                       
             </div> --}}        
    
    @csrf
    @else
    {{-- 
    </div> 
             <div class="col">
            <td style="border:2px solid grey"><a href="{{route("cart.create")}}" class="btn btn-primary btn-sm mt-2">Adauga in cosul de cumparaturi</a><td>
            <form method="post" action="{{route("cart.create")}}"> 
                       
             </div> --}}       
    
    @csrf
       
        
        </tr>
    </div>
    @endcan 
    @endforeach
</div>
@else
<p>Momentan tabelul nu contine inregistrari</p>
@endif


@endsection
