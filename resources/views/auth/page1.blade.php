
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Page</title>
    <!-- Authentication <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     -->
  </head>


    <style>

footer{
        background-color:tomato;
        clear:both;
        padding:5px;
        border:2px solid;
    }
       
.text { background-color:tomato;
        color:white;
        border:2px solid black;
        margin:20px;
        width:40%;
      
        
        }
.label {border:2px solid black;
        margin:10px;
            padding:10px;}

 ul { list-style-type:none;
      margin:0;
      padding:0;
      overflow:hidden;
      background-color:#333333;}
li {float:left;}
li a{display:block;
     color:white;
     text-align:center;
     padding:16px;
    text-decoration:none;}
li a:hover{background-color:#111111;}
.order{float:left;
     width:7px;
       }
.order a {background-color:#e5e5e5;
                     padding:5px;
                    margin-top:20%;
                    display:block;
                    width:70%;
                   color:black;}


</style>
       

<body>

<x-app-layout>


<br>
<!-- Authentication -->
<!--<button wire:click="logout" class="w-full text-start">
                    <a href="{{ url('/dashboard') }}" class="block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out">
                    Iesire din cont
</a>
                </button> -->
       
<br>
@can('isAdmin')
      <div class="btn btn-success btn-lg">
      <ul>
    <li><a href="{{url('/Nastris')}}">Home</a></li>
    <li><a href="{{url('products')}}">Modele</a></li>
    <li><a  href="{{route("orders.create")}}">Adauga Comanda</a></li>
    <li><a  href="{{route("improvement.create")}}">Adauga Opinie</a></li>
    <li><a  href="{{route("drive_test.create")}}">Programeaza Drive test</a></li>
    
</ul>
      </div>
   @else
      <div class="btn btn-info btn-lg">
      <ul>
    <li><a href="{{url('/Nastris')}}">Home</a></li>
    <li><a href="{{url('products')}}">Modele</a></li>
    <li><a  href="{{route("orders.create")}}">Adauga Comanda</a></li>
    <li><a  href="{{route("improvement.create")}}">Adauga Opinie</a></li>
    <li><a  href="{{route("drive_test.create")}}">Programeaza Drive test</a></li>
    
</ul>
      </div>
  @endcan

<br>
@can('isAdmin')
      <div class="btn btn-success btn-lg">
          You have Admin Access
      </div>
   @else
      <div class="btn btn-info btn-lg">
        Bine ati venit!
      </div>
  @endcan

<br>

    
        <img src="{{url('/images/duster_green.jpg')}}"  alt="Image" style="width:300px;height:140px;"/>
        <img src="{{url('/images/Duster_sandstone.jpg')}}"  alt="Image" style="width:300px;height:140px;"/>
       <img src="{{url('/images/Duster_terracota_brun.jpg')}}"  alt="Image" style="width:300px;height:140px;"/>
        <img src="{{url('/images/Duster_white.png')}}"  alt="Image" style="width:300px;height:140px;"/>
       <img src="{{url('/images/Jogger_green.png')}}"  alt="Image" style="width:300px;height:140px;"/>



<footer>
    <ul>
 
  <li><a href="#"><span>copyright</span></a></li>
  <li><a href="#"><span>current year</span></a></li>
  <li><a href="#"><span>Primary Links</span></a></li>
  <li><a href="#"><span>Statement</span></a></li>
  <li><a href="#"><span>Email</span></a></li>
</ul>
</footer>

</body>
</html>


</x-app-layout>

