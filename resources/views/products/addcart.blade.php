
@extends('products/main2')

@section('content')

@if ($errors->any())

<div class="alert alert-danger">
    @foreach($errors->all() as $error)
    {{$error}}
    @endforeach
</div>
@endif
<div class="container"><h2>Modicare produs </h2></div>
<form action="{{route("products.update",$product->id)}}" method="post" enctype="multipart/form-data">

    @csrf
    @method('PUT')
    <input type="hidden" name="hidden_id" value="{{$product->id}}">
    

<div>
<a href="{{route('cart.store',$row->id)}}" class="btn btn-primary btn-sm mt-2">Adauga in cos</a>

</div>
