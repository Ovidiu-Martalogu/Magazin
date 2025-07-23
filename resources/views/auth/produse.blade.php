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
     color:tomato;
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
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    <h4> Produse disponibile:</h4>
    <table style="border:2px solid blue">
    <tr>
        <th style="border:2px solid blue">Imagine</th><br>
        <th style="border:2px solid blue">Denumire</th>
        <th style="border:2px solid blue">Specificatii</th>
        <th>Optiuni</th>
<div class="container">
    @if(count($data)>0)
    @foreach($data as $row)
    <div class="row">
        <tr>
        <div class="col">
            <td style="border:2px solid grey"><img src="{{asset('images/'.$row->image)}}" style="width:100px" alt="{{$row->product_name}}" /></td>
        </div>
        <div class="col">
        <td style="border:2px solid grey"> {{$row->product_name}}</td>
        </div>
        <div class="col">
        <td style="border:2px solid grey"> {{$row->description}}</td>
        </div>
        
              <div class="container">
              <td><a class="btn btn-success" href="{{route("orders.create")}}">Adauga Comanda</a></td></div>

        
        </tr>
    </div>

    @endforeach
</div>
@else
<p>Momentan tabelul nu contine inregistrari</p>
@endif


@endsection