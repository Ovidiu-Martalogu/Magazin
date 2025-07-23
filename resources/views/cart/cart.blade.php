@extends('cart/maincart')

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
                th,td { border:2px solid;}
   
        </style>
        <x-app-layout>
        <ul  style="background-color:#a7a7e5">
    <li><a href="{{url('/products')}}">Home</a></li>
   
</ul>





@if ($message=Session::get("success"))

<div class="alert alert-success">
    {{$message}}
</div>
@endif


<body>
<br>
<br>
@can('isAdmin')
    <h1> comenzi:</h1>
    <table style="border:2px solid blue">
    <tr>
    <th style="border:2px solid blue">Produsul comandat</th>
        <th style="border:2px solid blue">product_id</th> 
        <th style="border:2px solid blue">quantity</th>
        <th style="border:2px solid blue">description</th>
      
        
</tr>

@if(count($data)>0)
@foreach($data as $row)

<tr style="border:2px solid grey">
<td style="border:2px solid grey">{{$row->product_name}}</td>
<td style="border:2px solid grey">{{$row->product_id}}</td> 
    <td style="border:2px solid grey">{{$row->quantity}}</td>
    <td style="border:2px solid grey">{{$row->description}}</td>
   
    
    
</tr>
@endforeach
</table>
@else
<p>Momentan nu aveti nici o comanda</p>
@endif
<div class="container"><h2>Multumim</h2></div>
<form action="{{route("cart.store")}}" method="post" enctype="multipart/form-data">
<div class="row mt-5">
            <input type="submit" class="btn btn-primary" value="Plaseaza comanda" />
        </div>
        </form>

@else
<h1>Produs adaugat cu succes in cos!</h1>
<br>
<br>
<br>
<br>
<h1> cosul dumneavoastra:</h1>

    <table style="border:2px solid blue">
    <tr>
    <th style="border:2px solid blue">Produsul comandat</th>
       <th style="border:2px solid blue">product_id</th> 
        <th style="border:2px solid blue">quantity</th>
        <th style="border:2px solid blue">description</th>
      
        
</tr>

@if(count($data)>0)
@foreach($data as $row)

<tr style="border:2px solid grey">
<td style="border:2px solid grey">{{$row->product_name}}</td>
 <td style="border:2px solid grey">{{$row->product_id}}</td> 
    <td style="border:2px solid grey">{{$row->quantity}}</td>
    <td style="border:2px solid grey">{{$row->description}}</td>
   
    
    
</tr>
@endforeach
</table>
@else
<p>Momentan nu aveti nici o comanda</p>
@endif
<br>
<br>
<br>
<br>
<form action="{{route("orders.store")}}" method="post" enctype="multipart/form-data">


            <input type="submit" class="btn btn-primary" value="Plaseaza comanda" />
       

</form>
@endcan


<div class="container"><h2>Introduceti optiunile dumneavoastra</h2></div>
<form action="{{route("cart.store")}}" method="post" enctype="multipart/form-data">
    @csrf
    
    <div class="container">
        <div class="row">
            <div class="col"><label for="product_id">Nume Produs</label></div>
            <div class="col">
                

                <select name="product_id" id="product_id" required>

                @foreach($products as $product)
                    <option value="{{$product->id}}">{{$product->product_name}}</option>
                
                @endforeach
                </select>
            
            </div>
        </div>
        <br>
        
        <div class="row">
            <div class="col"><label  for="quantity">Cantitate</label></div>
            <div class="col"><input type="quantity" name="quantity" id="quantity" required></div>
        </div>
        
        <div class="row mt-5">
            <input type="submit" class="btn btn-primary" value="Plaseaza comanda" />
        </div>
    </div>
