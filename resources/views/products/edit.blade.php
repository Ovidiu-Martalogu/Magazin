@extends('products/main2')

@section('content')

@if ($errors->any())

<div class="alert alert-danger">
    @foreach($errors->all() as $error)
    {{$error}}
    @endforeach
</div>
@endif
<h2 style="color:SaddleBrown " >Modificare produs: </h2>
<form action="{{route("products.update",$product->id)}}" method="post" enctype="multipart/form-data">

    @csrf
    @method('PUT')
    <input type="hidden" name="hidden_id" value="{{$product->id}}">
    
    <div class="container">

        <div class="row">
            <div class="col"><label for="product_name">Nume Produs</label></div>
            <div class="col"><input type="text" name="product_name" id="product_name" required value={{$product->product_name}}></div>
        </div>
        <br>
        <div class="row">
            <div class="col"><label for="description">Descriere</label></div>
            <div class="col"><textarea name="description" id="description" required>{{$product->description}}</textarea>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col"><label for="image">Image</label></div>
            <div class="col"><input type="file" name="image" id="image" >
            <img src={{asset('images/'.$product->image)}} style="width:500px" alt="{{$product->nume}}" />
            <input type="hidden" name="h_image" value="{{$product->image}}">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col"><label for="color">Color</label></div>
            <div class="col"><input type="text" name="color" id="color" required></div>
           
            </div>
        </div>
       
        <br>
        <div class="row">
            <div class="col"><label for="price">Price</label></div>
            <div class="col"><input type="price" name="price" id="price" required></div>
        </div>
        <br>
        <div class="row">
            <div class="col"><label for="discount">Discount</label></div>
            <div class="col"><input type="discount" name="discount" id="discount" required></div>
        </div>
        <br>
        
        <div class="row mt-7">
            <input type="submit" class="btn btn-primary" value="Modifica"/>
        </div>
    </div>



</form>
<script>
document.getElementsByName('categorie')[0].value="{{$product->categorie}}"
</script>

@endsection
