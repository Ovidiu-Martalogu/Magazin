@extends('products/main2')

@section('content')

@if ($errors->any())

<div class="alert alert-danger">
    @foreach($errors->all() as $error)
    {{$error}}
    @endforeach
</div>
@endif
<div class="container"><h2>Adaugare produs nou</h2></div>
<form action="{{route("products.store")}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class="row">
            <div class="col"><label for="nume">Nume Produs</label></div>
            <div class="col"><input type="text" name="product_name" id="product_name" required></div>
        </div>
        <div class="row">
            <div class="col"><label for="description">Descriere</label></div>
            <div class="col"><textarea name="description" id="escription" required></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col"><label for="color">Color</label></div>
            <div class="col"><input type="text" name="color" id="color" required></div>
           
            </div>
       
       
        
        <div class="row">
            <div class="col"><label for="price">Price</label></div>
            <div class="col"><input type="price" name="price" id="price" required></div>
        </div>
        <div class="row">
            <div class="col"><label for="discount">Discount</label></div>
            <div class="col"><input type="discount" name="discount" id="discount" required></div>
        </div>
       
        <div class="row">
            <div class="col"><label for="image">Imagine Produs</label></div>
            <div class="col"><input type="file" name="image" id="image" required></div>
        </div>
        <div class="row mt-5">
            <input type="submit" class="btn btn-primary" value="Adauga" />
        </div>
    </div>



</form>


@endsection
