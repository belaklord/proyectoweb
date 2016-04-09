
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
    
    margin-top: -95%;
    margin-left: -15%;
    border:none;
    background: transparent;
    
 }

.col-md-8{
    margin-top: -105%;
    height: 160px;
}


.panel-default{
	height: 200px;
}
.centrado{
    text-align: center;
    font-weight: bold;
}

textarea{
    width: 100%;

}

.panel-heading{
    text-align: center;
}

</style>

@if (Auth::user())
   
    <div class="col-md-8 col-md-offset-2">
         <div class="panel panel-warning">

                <div class="panel-heading">Comentario</div>
                <div class="panel-body">

        {!! Form::open(array('url' => 'contacto/insertar')) !!}

        <p class="centrado">Dejanos un comentario y te responderemos los antes posible</p>

    <input type="hidden" class="form-control" name="id_usuario" value="{{auth::user()->id}}">

    {{ Form::textarea('comentario', null) }}

</div>
<button  type="submit" class="btn btn-warning btn-lg btn-block">Enviar Comentario</button>
</div>

</div>
</div>
{!! Form::close() !!}

@else


	<div class="col-md-8 col-md-offset-2">
		 <div class="panel panel-danger">

                <div class="panel-heading">Registro</div>
                <div class="panel-body">

                	<p class="centrado">Debes estar registrado para contactar con nosotros</p>

</div>

    </div>

        </div>
            </div>
@endif


@include('pie')





