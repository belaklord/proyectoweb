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
    margin-top: -73%;
    position: relative;
    margin-left: -10%;
    border:none;
    background: transparent;

    
 }

 p{
	margin:auto;
	margin-top: -60%;
 }

</style>


    @if(!Auth::user())

    <p>no estas autenticado</p>

    <!--
    
    CUADRO DE ENVIO DE MENSAJE QUE ENVÍA UN EMAIL A UNA CUENTA DIFERENTE LLAMADA "CONTRATOS"

	-->

    @else

    <p>si estas autenticado</p>

    @endif



</div>
@include('pie')