@extends('improvement/main3')

@section('content')
<style>
    body {
  background-color: Khaki ;
  

}

        .menu {float:left;
               width:20%;
            text-align:center;}
        .menu a {background-color: rgba(201, 76, 76, 0.3);
                     padding:8px;
                    margin-top:7px;
                    display:block;
                    width:100%;
                   color:black;}
         .main {float:left;
                        width:100%;
                        padding:0 20px;}   
        .right{background-color: #92a8d1;
                float:left;
                 width:20%;
                padding:15px;
                margin-top:7px;
                text-align:center;}
                th,td { border:2px solid;}
   
        </style>
        <ul  style="background-color:#a7a7e5">
    <li><a href="{{url('/products')}}">Home</a></li>
   
</ul>





@if ($message=Session::get("success"))

<div class="alert alert-success">
    {{$message}}
</div>
@endif


<body>


@can('isAdmin')
    <h1 style="color:grey"> Acestea sunt sugestiile primite:</h1>
    <br>
    <br>
    <br>
    <table style="border:2px solid blue">
    <tr>
        {{-- <th style="border:2px solid tomato">Nume</th>--}}
        <th style="border:2px solid tomato">Produs dorit</th>
        <th style="border:2px solid tomato">Descriere suplimentara</th>
       
        
</tr>
@if(count($data)>0)
@foreach($data as $row)

<tr style="border:2px solid grey">
{{-- <td style="border:2px solid grey">{{$row->users_id}}</td>--}}
    <td style="border:2px solid grey">{{$row->Desired_product}}</td>
    <td style="border:2px solid grey">{{$row->Feedback}}</td>
    
    
    
</tr>
@endforeach
</table>
@else
<p>Lipsa sugestii</p>
@endif

<br>

<br>
<h3 style="color:darkgreen"> Va multumim !</h3>
<br>
@else
<h2>Va multumim pentru participare si confirmam primirea.</h2>
<h3>Alaturi de sugestia dumneavoastra, regasiti si alte sugestii:</h3>
<table style="border:2px solid blue">
    <tr>
        {{-- <th style="border:2px solid tomato">Nume</th> --}}
        <th style="border:2px solid tomato">Produs dorit</th>
        <th style="border:2px solid tomato">Descriere suplimentara</th>
       
        
</tr>
@if(count($data)>0)
@foreach($data as $row)

<tr style="border:2px solid grey">
{{--   <td style="border:2px solid grey">{{$row->users_id}}</td> --}}
    <td style="border:2px solid grey">{{$row->Desired_product}}</td>
    <td style="border:2px solid grey">{{$row->Feedback}}</td>
    
    
    
</tr>
@endforeach
</table>
@endcan
@endif
@can('isAdmin')

<div class="col">
            
            <form method="post" action="{{route('improvement.destroy',$row->id)}}">
            <div class="col">
@csrf
            @method('delete')
             <td style="border:2px solid grey"><button class="btn btn-danger btn-sm mt-2">Sterge opinie</button></form></td>
             </div> 
@endcan
</body>
</html>
      



@endsection


