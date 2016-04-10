
@include('cabecera')

<link rel="stylesheet" href="css/tarifas.css" />

<div id="pricing-table" class="clear">

	<h3>NUESTRAS TARIFAS</h3>
	
	<h4>*Los precios pueden variar al alza o la baja, según el tipo de reparación.</h4>
	<br>
    <div class="plan">
        <h3>Control remoto<span>15&#8364;/h</span></h3>
        <a class="signup" href="{{ url('/contrato') }}">Contratar</a>         
        <ul>
            <li>
            	<h4><b>Reparaciones por control remoto con teamviewer</b> </h4>
            </li>
            		
        </ul> 
    </div>
    <div class="plan" id="most-popular">
       <h3>Precio por hora<span>20&#8364;</span></h3>
        <a class="signup" href="">Contratar</a>        
        <ul>
          <h4><b>Precio/hora 20&#8364;</b> </h4>
            			
        </ul>    
    </div>
    <div class="plan">
         <h3>Siguientes horas<span>15&#8364;</span></h3>
		<a class="signup" href="">Contratar</a>
        <ul>
            <li>
            	<h4><b>Después de la primera hora, las siguientes a 15€.</b> </h4>
            </li>
           		
        </ul>
    </div>
    <div class="plan">
        <h3>Fracciones de 30 minutos<span>10&#8364;</span></h3>
        <a class="signup" href="">Contratar</a>		
        <ul>
            <li>
            	<h4><b>Cualquier reparación que supere el tiempo estipulado.</b> </h4>
            </li>
            		
        </ul>
    </div> 	
</div>




  </div>


@include('pie')