@extends('suggestions/main2')

@section('content')

@if ($errors->any())

<div class="alert alert-danger">
    @foreach($errors->all() as $error)
    {{$error}}
    @endforeach
</div>
@endif

<form action="{{route("suggestions.store")}}" method="post" enctype="multipart/form-data">
    @csrf
   
    <label for="nume">Nume complet</label>
           <input type="text" name="FullName" id="FullName" required>
           <br>
           <br>
        <label for="description">Adresa</label>
           <textarea name="Adress" id="Adress" required></textarea>
           <br>
           <br>
           <label for="description">Telefon</label>
           <textarea name="Phone" id="Phone" required></textarea>
           <br>
           <br>
           <label for="description">Model propus</label>
          <textarea name="Suggestions" id="Suggestions" required></textarea>
          <br>
          <br>
          <label for="description">Imbunatatiri</label>
            <textarea name="Improvements" id="Improvements" ></textarea>
            <br>
            <br>       

            <input type="submit" class="btn btn-primary" value="Adauga" />
       

    <br>
<br>
<h2>Pentru inspiratia dumneavoastra:</h2>
<div>
<ul>
    <li><a href="https://www.audi.ro/">Audi</a></li>
    <li><a href="https://www.volkswagen.ro/">Volkswagen</a></li>
    <li><a href="https://www.volvocars.com/ro/">Volvo</a></li>
    <li><a href="https://www.mercedes-benz.ro/">Mercedes-benz</a></li>
    <li><a href="https://www.citroen.ro/">Citroen</a></li>
    <li><a href="https://www.kia.ro/">Kia</a></li>
    
    


</ul>
        </div>

</form>

    
    


</ul>
        </div>

@endsection
