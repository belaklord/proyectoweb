<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Belinker</title>
     
   <link rel="stylesheet" href="css/cabecera.css" />

   <script src="js/cabecera.js" type="text/javascript"></script>


   <script>

   /*
   marcacion de los botones de la cabecera 
   */

    window.onload = function(){

        var URLactual = window.location;

        if(URLactual == "http://localhost/proyecto/public/servicios"){


             document.getElementById("tab_2").classList.add('active');

        }

        else if(URLactual == "http://localhost/proyecto/public/"){

             document.getElementById("tab_1").classList.add('active');
        }

        else if(URLactual == "http://localhost/proyecto/public/tarifas"){

             document.getElementById("tab_3").classList.add('active');
        }


        else if(URLactual == "http://localhost/proyecto/public/belinker"){

             document.getElementById("tab_4").classList.add('active');
        }


        else if(URLactual == "http://localhost/proyecto/public/blog"){

             document.getElementById("tab_5").classList.add('active');
        }

        else if(URLactual == "http://localhost/proyecto/public/contacto"){

             document.getElementById("tab_6").classList.add('active');
        }

    }


   </script>


    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
  

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    



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
                        <ul class=" nav navbar-nav login">
                            <li ><a href="{{ url('/login') }}">Logeate</a></li>
                        <li ><a href="{{ url('/register') }}">Registrate</a></li>

                         <a  href="https://www.facebook.com/Belinker.es?fref=ts" target="_blank"> <i class="fa fa-facebook-square fa-2x"></i></a>
                    <a  href="https://twitter.com/belinker_es" target="_blank"><i class="fa fa-twitter-square fa-2x"></i></a>
                        </ul>
                      
                        
                    @endif
                    
                    

                    
                  

                </ul>

            </div>
        </div>
         </nav>

          <div class="row">


    <div class="cabecera">

       
<img class="logo" src="http://belinker.es/wp-content/uploads/2015/07/belinker2.png" alt="belinker">


<ul class="nav nav-pills">
  <li  id="tab_1"><a href="{{ url('/home') }}">INICIO</a></li>
  <li id="tab_2"><a  href="{{ url('/servicios') }}">SERVICIOS</a></li>
  <li id="tab_3"><a href="{{ url('/tarifas') }}">TARIFAS</a></li>
  <li id="tab_4"><a href="{{ url('/home') }}">BELINKER</a></li>
  <li id="tab_5"><a href="{{ url('/home') }}">BLOG</a></li>
  <li id="tab_6"><a href="{{ url('/contacto') }}">CONTACTO</a></li>


</ul>



    </div>


           


 
        </body>



           


         






