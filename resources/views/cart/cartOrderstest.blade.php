@extends('cart/maincart')


@section('content')

@if ($errors->any())

<div class="alert alert-danger">
    @foreach($errors->all() as $error)
    {{$error}}
    @endforeach
</div>
@endif




<ul  style="background-color:#a7a7e5">
    <li><a href="{{url('/products')}}">Back</a></li>
   
</ul>


<div class="container"><h2>Adauga modelul dorit in cosul de cumparaturi</h2></div>
<!-- de aici un cod -->>
 
 <br>

  <form action="{{route("cart.store")}}" method="post" enctype="multipart/form-data">
    @csrf
    
   <label for="product_id">Nume Produs</label>
   <br>
          
              
          

          <select name="product_id" id="product_id" required>
                   

@foreach($products as $product)
    <option value="{{$product->id}}">{{$product->product_name}}</option>

@endforeach
</select>
        <br>
        <br>
        <br>

            </div>
       <label for="quantity">Cantitate</label>
           <input type="quantity" name="quantity" id="quantity" required>
        
        
         <div class="row mt-5">
            <input type="submit" class="btn btn-primary" value="Confirma " />
        </div>
    </div>  



</form>

<!-- de aici alt cod -->>
    <input type="hidden" name="hidden_id" value="{{$product->id}}">
    
    <div class="container">

        <div class="row">
            <div class="col"><label for="product_name">Nume Produs</label></div>
            <div class="col"><input type="text" name="product_name" id="product_name" required value={{$product->product_name}}></div>
        </div>
        <div class="row">
            <div class="col"><label for="description">Descriere</label></div>
            <div class="col"><textarea name="description" id="description" required>{{$product->description}}</textarea>
            </div>
        </div>
        
        <div class="row">
            <div class="col"><label for="image">Image</label></div>
            <!--<div class="col"><input type="file" name="image" id="image" > -->
            <img src={{asset('images/'.$product->image)}} style="width:500px" alt="{{$product->nume}}" />
            <input type="hidden" name="h_image" value="{{$product->image}}">
            </div>
        </div>
        <!-- <div class="row">
            <div class="col"><label for="color">Color</label></div>
            <div class="col"><input type="text" name="color" id="color" required></div>
           
            </div>
        </div> -->
       
        
        <!-- <div class="row">
            <div class="col"><label for="price">Price</label></div>
            <div class="col"><input type="price" name="price" id="price" required></div>
        </div>
        <div class="row">
            <div class="col"><label for="discount">Discount</label></div>
            <div class="col"><input type="discount" name="discount" id="discount" required></div>
        </div> -->
       
        
        <div class="row mt-5">
            <input type="submit" class="btn btn-primary" value="Cart"/>
        </div>
    </div>
    <form action="{{route("cart.store")}}" method="post" enctype="multipart/form-data">
    <div class="row mt-5">
            <input type="submit" class="btn btn-primary" value="Confirma" />
        </div>
    </div> 

</form>
<script>
document.getElementsByName('categorie')[0].value="{{$product->categorie}}"
</script>


