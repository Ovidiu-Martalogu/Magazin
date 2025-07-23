

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEKOS</title>
     <!-- Fonts -->
     <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
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
      background-color:#888888;}
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

<ul>
    
    {{--<li><a href="{{url('products')}}">Home</a></li> --}}
    <li><a href="#home">Home</a></li>
    <li><a href="#news">News</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#about">About</a></li>
</ul>
<br>
<br>
<!--<div style="overflow:left">
        <div class="order">
            <a href="#">Order</a>
            <a href="#">Order</a>
            <a href="#">Order</a>
            <a href="#">Order</a>
        </div>
        </div>-->
        
        
    <a href="{{url('Guest')}}">Vizitator</a>

    <br>
    <br>
    
   
    <h3> SEKOS, partenerul tău Dacia , a devenit  și partenerul tau in alte modele si categorii.Experienta în comercializarea autoturismelor marca Dacia face din SEKOS unul din cei mai 
          importanți concesionari  din județul Argeș. SEKOS înseamnă profesionalism și încredere. Reprezentăm alegerea optimă pentru clienți , 
          persoane fizice sau juridice, fie că este vorba de achiziția unui model Dacia sau alte modele 
           și le mulțumim tuturor pentru faptul că suntem prima lor opțiune.</h3>

        <h2> Vă mulțumim pentru că alegeți SEKOS, partenerul dumneavoastra. </h2>
       
         <h4>Va rugam sa va logati.</h4> 
        
        <div >
            @if (Route::has('login'))
                <livewire:welcome.navigation />
            @endif
</div>


<br>

<br>
    
        <img src="{{url('/images/duster_green.jpg')}}"  alt="Image" style="width:300px;height:140px;"/>
        <img src="{{url('/images/Duster_sandstone.jpg')}}"  alt="Image" style="width:300px;height:140px;"/>
       <img src="{{url('/images/Duster_terracota_brun.jpg')}}"  alt="Image" style="width:300px;height:140px;"/>
        <img src="{{url('/images/Duster_white.png')}}"  alt="Image" style="width:300px;height:140px;"/>
       <img src="{{url('/images/Jogger_green.png')}}"  alt="Image" style="width:300px;height:140px;"/>
       <img src="{{url('/images/1720168711.png')}}"  alt="Image" style="width:300px;height:140px;"/>
       <img src="{{url('/images/1720367176.jpg')}}"  alt="Image" style="width:300px;height:140px;"/>
       <img src="{{url('/images/1720367102.jpg')}}"  alt="Image" style="width:300px;height:140px;"/>



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