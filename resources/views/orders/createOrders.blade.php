@extends('orders/main3')

@section('content')

@if ($errors->any())

<div class="alert alert-danger">
    @foreach($errors->all() as $error)
    {{$error}}
    @endforeach
</div>
@endif
<x-app-layout>

<ul  style="background-color:#a7a7e5">
   
    <li><a href="{{url('/products')}}">Home</a></li>
   
</ul>


<div class="container"><h2>Introduceti optiunile dumneavoastra</h2></div>
<form action="{{route("orders.store")}}" method="post" enctype="multipart/form-data">
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



</form>

</x-app-layout>


