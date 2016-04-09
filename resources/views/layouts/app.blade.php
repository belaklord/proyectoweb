<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
       
/* COMIENZA EL SLIDER */



/* Makes images fully responsive */

.img-responsive,
.thumbnail > img,
.thumbnail a > img,
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
  display: block;
  
  height: auto;
}

/* ------------------- Carousel Styling ------------------- */

.carousel-inner {
  border-radius: 15px;
  margin-top: -20%;

}

.carousel-caption {
  background-color: rgba(0,0,0,.5);
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 10;
  padding: 0 0 10px 25px;
  color: #fff;
  text-align: left;
}

.carousel-indicators {
  position: absolute;
  bottom: 0;
  right: 0;
  left: 0;
  width: 100%;
  z-index: 15;
  margin: 0;
  padding: 0 25px 25px 0;
  text-align: right;
}

.carousel-control.left,
.carousel-control.right {
  background-image: none;
}
/*FIN DEL SLIDER */



.section-white{
  margin:auto;
  margin-top: -30%;
}

.twitter-timeline{

margin-right: 20%;
margin-left: 30%;


}




.fa-cogs, .fa-comment, .fa-thumbs-o-up, .fa-laptop {
  background-color: #C33838;
  border-radius: 6px;
 
}

.caption2{
  /*
                responsive 
                */
            display: -webkit-flex;
            display: flex;
            -webkit-flex-flow: row wrap;
            flex-flow: row wrap;
 display: inline-block;
  margin-right: 8%;
  margin-left: -5%;
  margin-top: -15%;


}
p{
  text-align: center;

}

h4{
  text-align: center;
}

.benefits-grid-ico{
  margin-left: 60px;
}



.carousel{
  width: 80%;
  
  margin-top: 2%;
}





       
    </style>
   
@include('cabecera')
 


                 <!--SLIDER METER EN OTRO ARCHIVO -->

  <section class="section-white">
  <div class="container">

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>
 
      <!-- Wrapper for slides -->
      <div class="carousel-inner">

        <div class="item active">

          <img   width="1342" src="imagenes/slider3.jpg" alt="...">
          
         
        </div>

        <div class="item ">


          <img width="1342" src="imagenes/fondoslider.jpg" alt="...">
       
          
        </div>
        <div class="item">
          <img width="1342" src="imagenes/slider2.jpg" alt="...">
          
        </div>
        
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>

  </div>
</section>

<!-- HASTA AQUI EL SLIDER -->


 
   
    <div class="benefits-grid wf-container icons-bg accent-bg light-hover-bg custom-icon-color accent-icon-hover-color">

      <div class="caption2">

    
      
        
<a href="{{ url('/servicios') }}" class="benefits-grid-ico fadeInDown animate-element animation-triggered start-animation">

       <img src="imagenes/settings-icon.png" alt=""></a> 

              <h4>Servicios</h4>

                <p>Infórmate de nuestros servicios <br>
                  y de las soluciones que ofrecemos.</p>

         

      </div>
        

         <div class="caption2">

         <a href="" class="benefits-grid-ico fadeInDown animate-element animation-triggered start-animation">  

           <img src="imagenes/pen-icon.png" alt=""></a> 


        <h4>Comentarios</h4>

        <p>Déjanos tu opinión sobre la calidad <br>
          y eficiencia de nuestros servicios.</p>



      </div>

       <div class="caption2">


         <a href="" class="benefits-grid-ico fadeInDown animate-element animation-triggered start-animation" > 

           <img src="imagenes/people-icon.png" alt=""></a> 

           <h4>Clientes</h4>

           <p>infórmate de las empresas que <br>
            contratan nuestros servicios.</p>

         </div>

        <div class="caption2">

        <a href="" class="benefits-grid-ico fadeInDown animate-element animation-triggered start-animation"> 

            <img src="imagenes/pointer-2-icon.png" alt=""></a> 

            <h4>Blog</h4>

            <p>Visita nuestros últimos trabajos <br>
              y entradas.</p>

     

</div>
    

  </div>

  <a class="twitter-timeline" href="https://twitter.com/belinker_es" data-widget-id="711928724225187840">Tweets por el @belinker_es.</a>
<script>

!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';

if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";

fjs.parentNode.insertBefore(js,fjs);

}}(document,"script","twitter-wjs");

</script>
</div>



    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>

@include('pie')
