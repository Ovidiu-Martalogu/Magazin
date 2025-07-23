@extends('improvement/main2')

@section('content')

@if ($errors->any())

<div class="alert alert-danger">
    @foreach($errors->all() as $error)
    {{$error}}
    @endforeach
</div>
@endif

<form action="{{route("improvement.store")}}" method="post" enctype="multipart/form-data">
    @csrf
   
            <div class="col"><label for="Users_id">Nume</label></div>
            <div class="col">
            @if(Auth::check())
            <input type="hidden" value="{{Auth::user()->id;}}" name="Users_id">
            @endif
           
                {{-- <select name="Users_id" id="Users_id" required>

                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                
                @endforeach
                </select> --}}
                <br>
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
          <textarea name="Desired_product" id="Desired_product" required></textarea>
          <br>
          <br>
          <label for="description">Descriere suplimentara</label>
            <textarea name="Feedback" id="Feedback" ></textarea>
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
