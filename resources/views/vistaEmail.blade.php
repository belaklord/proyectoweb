
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

    width:1200px;
    position: relative;
    margin-left: -10%;
    border:none;
    background: transparent;

    
 }



.panel-success{
	margin:auto;
	margin-top: -40%;
}
	
</style>


<div class="panel panel-success">

 <div class="panel-heading">Email Enviado</div>
  <div class="panel-body">

<h3>Se ha enviado un email a su correo</h3>
<br>
<h4>
	Gracias por registrarse
</h4>
</div>

</div>
</div>

@include('pie')