@extends('driveTest/main3')

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


<div class="container"><h2 style="color:blue;font-weight:bold">Programeaza-te la Drive Test</h2></div>
<form action="{{route("drive_test.store")}}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="description">Nume participant</label>
           <input type="text" name="name" id="name" placeholder="Nume participant" required>
           <br>
           <br>
           <br>
   
           <label for="product_id">Alegeti modelul preferat :</label>
           <br>
          
           
{{--
                @foreach($products as $product)
                    
                    <input type="radio" id="product_id" name="product_id" value="product_id">
                     <label for="{{$product->id}}">{{$product->product_name}}</label><br>
                @endforeach
                --}}
                <select name="product_id" id="product_id" required>
                   

@foreach($products as $product)
    <option value="{{$product->id}}">{{$product->product_name}}</option>

@endforeach
</select>
               
          <br>
           <br>
           <br>
        <label for="Adress">Adresa</label>
           <input type="text" name="Adress" id="Adress" placeholder="Adresa participantului" required>
           <br>
           <br>
           <br>
     
           <label  for="desired_period">Mentionati perioada dorita</label>
            <input type="text" name="desired_period" id="desired_period" required>
       
        <br>
        <br>
        <br>

      
            <input type="submit" class="btn btn-primary" value="Valideaza" />
     
    



</form>

</x-app-layout>


