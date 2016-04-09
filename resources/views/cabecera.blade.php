<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Belinker</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

<style>
     body {
            font-family: 'Lato';
            background: #f9f9f9 url('imagenes/fondo.jpg') no-repeat fixed center center;
            background-size: cover;
        }

        .fa-btn {
            margin-right: 6px;
        }

        .row{
                /*
                responsive 
                */
            display: -webkit-flex;
            display: flex;
            -webkit-flex-flow: row wrap;
            flex-flow: row wrap;

            background-color: white;
            box-shadow: 0px 2px 4px;
            width: 70%;
            height: 1600px;
            margin-top: -10%;
            margin-left: 14%;

        }

        .col-sm-1  {
   width: 100%;
  
    margin-left: 28%;
    margin-top: 40%;
    margin-bottom: -7%;


  }

  .navbar-inverse{

            width: 70.2%;
            margin-left: 13.9%;
        
    }


 .caption{
      /*
                responsive 
                */
            display: -webkit-flex;
            display: flex;
            -webkit-flex-flow: row wrap;
            flex-flow: row wrap;
    
   
  
    
    

 }

 .thumbnail{

        /*
                responsive 
                */
            display: -webkit-flex;
            display: flex;
            -webkit-flex-flow: row wrap;
            flex-flow: row wrap;

    width:800px;
    position: relative;
    margin-top: -65%;
    margin-left: -15%;
    border:none;
    background: transparent;

    
 }

.benefits-grid{
 
  width: 1200px;
  margin-left: 20%;
  margin-top: -13%;
 
  position: relative;
}




 .btn-primary{

    width: 100px;
    margin-right: 10px;
    background-color: #437BB3;
    border:2px solid black;


 }

.btn-primary:hover{
   
    color:black;
    font-weight: bold;
    
}

.fa-facebook-square {
    
    color: #58A2D4;
 
}

.fa-twitter-square{

color: #58A2D4;

    margin-top: 6%;
}

.icono{
    width: 70px;


}

div.caption{
    margin-left: -10%;
}

.navbar-collapse{

    float:right;
}

.navbar-right{
   

    margin-left: 40%;
    margin-top: 2%;


}



</style>
 <body id="app-layout">
<nav class="navbar navbar-inverse navbar-static-top">
        <p class="navbar-text">

    @if(Auth::user())

            Conectado como {{Auth::user()->name}}

        @else
        
            No estas autenticado
    @endif

        </p>

         <p class="navbar-text">
          info@belikner.es
         </p>

        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/home') }}">
                    Belinker
                </a>
            </div>



            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
              

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-collapse ">
                    <!-- Authentication Links -->
                    @if(Auth::user())

                    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Salir</a></li>
                            </ul>
                      
                      </li>
                    @else

                      <li><a href="{{ url('/login') }}">Logeate</a></li>
                        <li><a href="{{ url('/register') }}">Registrate</a></li>
                        
                    @endif
                    
                     <a  href="https://www.facebook.com/Belinker.es?fref=ts" target="_blank"> <i class="fa fa-facebook-square fa-2x"></i></a>
                    <a  href="https://twitter.com/belinker_es" target="_blank"><i class="fa fa-twitter-square fa-2x"></i></a>

                    
                  

                </ul>

            </div>
        </div>
         </nav>

          <div class="row">
  <div class="col-sm-1 col-md-4">
    <div class="thumbnail">

<div class="caption">
   
    <a href="home" ><img class="icono" srcset="http://belinker.es/wp-content/uploads/2015/07/belinker2.png 1x, http://belinker.es/wp-content/uploads/2015/07/belinker2.png 2x" 
        alt="Belinker"  src="http://belinker.es/wp-content/uploads/2015/07/belinker2.png"></a>
 </div>
                <div class=" navbar-right">

                <ul class="nav navbar-nav">


                    <li ><a  href="{{ url('/home') }}">Inicio</a></li>
                </ul>

                  <ul class="nav navbar-nav">
                    <li><a  href="{{ url('servicios') }}">Servicios</a></li>
                </ul>  

                 <ul class="nav navbar-nav">
                    <li><a  href="{{ url('/tarifas') }}">Tarifas</a></li>
                </ul>

                <ul class="nav navbar-nav">
                    <li><a  href="{{ url('/home') }}">Belinker</a></li>
                </ul>

                <ul class="nav navbar-nav">
                    <li><a  href="{{ url('/home') }}">Blog</a></li>
                </ul>
                
                <ul class="nav navbar-nav ">
                    <li><a  href="{{ url('contacto') }}">Contacto</a></li>
                </ul>

            </div>
            </div>
            </div>
        </body>



           


         






