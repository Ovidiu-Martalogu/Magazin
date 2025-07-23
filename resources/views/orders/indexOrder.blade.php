@extends('orders/main3')

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
@can('isAdmin')
    <h1> Informatii comenzi:</h1>
    <br>
    <table style="border:2px solid blue">
    <tr>
        
        
        <th style="border:2px solid blue">Produsul comandat</th>
        <th style="border:2px solid blue">Numar comanda</th>
        <th style="border:2px solid blue">Cantitate</th>
       {{-- <th style="border:2px solid blue">price</th> --}}
        
</tr>
@if(count($data)>0)
@foreach($data as $row)

<tr style="border:2px solid grey">
    <td style="border:2px solid grey">{{$row->product_name}}</td>
    <td style="border:2px solid grey">{{$row->order_Id}}</td>
    <td style="border:2px solid grey">{{$row->quantity}}</td>
    {{--<td style="border:2px solid grey">{{$row->price}}</td> --}}
   
    
    
</tr>
@endforeach
</table>
@else
<p>Momentan nu aveti nici o comanda</p>
@endif
@else
<h1>Va multumim pentru comanda.Un reprezentant va va contacta in cel mai scurt timp!</h1>

@endcan
</body>
</html>
      


</x-app-layout>

@endsection

