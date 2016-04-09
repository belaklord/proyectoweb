
@include('cabecera')

<style>

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
    margin-top: -64.7%;
    margin-left: -15%;
    border:none;
    background: transparent;

    
 }

 ul{
	margin-left: 10%;
	list-style: none;
}


	ul li{
		display: inline-block;
	}
	
	.col-sm-1{
		
		margin-top: 21%;
		

	}

	.menu{
		
	
		margin: auto;
		margin-top: -50%;
		
	}



	/*BOTON 1*/

	
.myButton {
	-moz-box-shadow:inset 0px 34px 0px -15px #b54b3a;
	-webkit-box-shadow:inset 0px 34px 0px -15px #b54b3a;
	box-shadow:inset 0px 34px 0px -15px #b54b3a;
	background-color:#a73f2d;
	border:1px solid #241d13;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:9px 23px;
	text-decoration:none;
	text-shadow:0px -1px 0px #7a2a1d;
}
.myButton:hover {
	background-color:#b34332;
		color:white;
}
.myButton:active {
	position:relative;
	top:1px;
}

/*
BOTON2
*/


.myButton2 {
	-moz-box-shadow:inset 0px 34px 0px -15px #9fb4f2;
	-webkit-box-shadow:inset 0px 34px 0px -15px #9fb4f2;
	box-shadow:inset 0px 34px 0px -15px #9fb4f2;
	background-color:#7892c2;
	border:1px solid #4e6096;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:9px 23px;
	text-decoration:none;
	text-shadow:0px -1px 0px #283966;
}
.myButton2:hover {
	background-color:#476e9e;
		color:white;
}
.myButton2:active {
	position:relative;
	top:1px;
}

/*
BOTON3
*/
.myButton3 {
	-moz-box-shadow:inset 0px 34px 0px -15px #9acc85;
	-webkit-box-shadow:inset 0px 34px 0px -15px #9acc85;
	box-shadow:inset 0px 34px 0px -15px #9acc85;
	background-color:#74ad5a;
	border:1px solid #3b6e22;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:9px 23px;
	text-decoration:none;
	text-shadow:0px -1px 0px #92b879;
}
.myButton3:hover {
	background-color:#68a54b;
		color:white;
}
.myButton3:active {
	position:relative;
	top:1px;
}


.myButton4 {
	-moz-box-shadow:inset 0px 34px 0px -15px #f2fadc;
	-webkit-box-shadow:inset 0px 34px 0px -15px #f2fadc;
	box-shadow:inset 0px 34px 0px -15px #f2fadc;
	background-color:#dbe6c4;
	border:1px solid #b2b8ad;
	display:inline-block;
	cursor:pointer;
	color:#757d6f;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:9px 23px;
	text-decoration:none;
	text-shadow:0px -1px 0px #ced9bf;
}
.myButton4:hover {
	background-color:#9ba892;
		color:white;
}
.myButton4:active {
	position:relative;
	top:1px;
}


.myButton5 {
	-moz-box-shadow:inset 0px 34px 0px -15px #e184f3;
	-webkit-box-shadow:inset 0px 34px 0px -15px #e184f3;
	box-shadow:inset 0px 34px 0px -15px #e184f3;
	background-color:#c123de;
	border:1px solid #a511c0;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:9px 23px;
	text-decoration:none;
	text-shadow:0px -1px 0px #9b14b3;
}
.myButton5:hover {
	background-color:#a20dbd;
	color:white;


}
.myButton5:active {
	position:relative;
	top:1px;
}

.cabecera{
	text-align: center;
}


.panel-heading{

	list-style: none;

}


.panel-default{
	width: 1200px;
	height: 300px;
	margin:auto;
	margin-top: -70%;
}

h3{
	text-align: center;
}


</style>


	


<script src="js/servicios.js" type="text/javascript">

</script>



<div class="panel panel-default">


  <div class="panel-heading">
  	<h3>NUESTROS SERVICIOS</h3>
  	<ul>
  		<li id ="tab_1" onclick="pestanas('tab_1')";> <a class="myButton"  >Software</a></li>
  	<li id ="tab_2" onclick="pestanas('tab_2')";> <a class="myButton2" >Hardware</a> </li>
	<li id ="tab_3" onclick="pestanas('tab_3')";> <a class="myButton3" >Asesoramiento</a> </li>
	<li id ="tab_4" onclick="pestanas('tab_4')";> <a class="myButton4" >Antivirus</a> </li>
	<li id ="tab_5" onclick="pestanas('tab_5')";> <a class="myButton5" >Montaje y testeo</a> </li>
  	</ul>

  	


  </div>
  <div class="panel-body">

<div id= "pestana1" style='display:none;'>

	<div class="contenido">
Instalamos y asesoramos sobre cualquier tipo de software a saber:<br>

1) Sistemas operativos, tanto windows(para empresas requiere pago de licencia) como linux en todas sus extensiones (software libre y por lo tanto gratuito).
<br>
2) Antivirus (a gusto del consumidor, también asesoramos el tipo de antivirus según el equipo del que disponga).
<br>
3) Procesadores de texto, tanto microsoft office (requiere licencia para empresas) como libre office u openoffice (software libre, gratuito).
<br>
4) Software de limpieza y mantenimiento de equipos.
<br>
5) Otros tipos de software.
	</div>
	
</div>


<div  id= "pestana2" style='display:none;'>
	<div class="contenido">
		Nos encargamos de darle la mejor solución a los problemas de hardware que pueda tener con rapidez y eficiencia.

Montamos cualquier tipo de hardware a saber:

Cualquier tipo de tarjeta interna (gráfica, sonido, etc)
Cualquier tipo de procesador
Memorias ram
Discos duros
Cualquier otro componente interno.
También damos asesoramiento personalizado sobre el tipo de hardware que más le convenga.
	</div>
	
</div>

<div  id= "pestana3" style='display:none;'>
	<div class="contenido">
		Asesoramos a nuestros clientes en cualquier ámbito informático, de esta forma podrá estar seguro de que tomará la mejor opción a su disposición.

También disponemos de asesoramiento web:
	
	

Dominio, hosting, configuración de cuentas e-mail personalizadas, instalación y configuración de wordpress.
</div>
</div>

<div id= "pestana4" style='display:none;'>
	<div class="contenido">
		
	

	Eliminamos la mayoría de amenazas que circulan por la red proporcionando al cliente la mejor opción a nuestra disposición de manera que pueda sentirse seguro con nosotros.
</div>
</div>

<div  id="pestana5" style='display:none;'>
	<div class="contenido">

		Montamos y configuramos equipos informáticos de sobremesa.También incluimos la instalación del software básico para el funcionamiento optimo del equipo.

Elaboramos un presupuesto personalizado con las indicaciones que el cliente nos proporcione y nos encargamos del montaje del equipo tanto de la instalación del sistema operativo elegido como los programas necesarios para su correcto funcionamiento.
		
	</div>
	
</div>


  </div>


  </div>
</div>
@include('pie')







