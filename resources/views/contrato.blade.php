@include('cabecera')

<link rel="stylesheet" href="css/contrato.css" />


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