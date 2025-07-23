@extends('driveTest/main')

@section('content')

       <x-app-layout>
        
    
       <ul  style="background-color:#a7a7e5">
    <li><a href="{{url('/products')}}">Home</a></li>
   
</ul>




@if ($message=Session::get("success"))

<div class="alert alert-success">
    {{$message}}
</div>
@endif


    
<br>
@can('isAdmin')
    <h1> Solicitari drive test primite:</h1>
    <br>
    <table style="border:2px solid blue">
    <tr>
    
        <th style="border:2px solid blue">Nume participant</th>
        <th style="border:2px solid blue">Perioada dorita</th>
        <th style="border:2px solid blue">Modelul ales</th>
        
       
        
</tr>
@if(count($data)>0)
@foreach($data as $row)

<tr style="border:2px solid grey">
   
    <td style="border:2px solid grey">{{$row->name}}</td>
    <td style="border:2px solid grey">{{$row->desired_period}}</td>
    {{-- <td style="border:2px solid grey">{{$row->product_id}}</td> --}}
    <td style="border:2px solid grey">{{$row->product_name}}</td>
 
   
   
    
    
</tr>
@endforeach
</table>
@else
<p>Momentan nu aveti nici o comanda</p>
@endif
@else
<h1>Am primit programarea dumneavoasta. Va multumim si va asteptam !</h1>
@endcan

</html>
      


</x-app-layout>

@endsection

