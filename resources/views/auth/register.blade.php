
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
    
    margin-top: -73%;
    margin-left: -10%;
    border:none;
    background: transparent;

    
 }
.col-md-8{
    margin-top: -70%;
}

</style>

<div class="container">
 
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Registro</div>
                <div class="panel-body">
                     @include('plantillasComunes.errores')
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('User/insertar') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('apellidos') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Apellidos</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="apellidos" value="{{ old('apellidos') }}">

                                @if ($errors->has('apellidos'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('apellidos') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Direccion</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="direccion" value="{{ old('direccion') }}">

                                @if ($errors->has('direccion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('direccion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Confirma Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- en cada include del pie añadir una etiqueta de cierre de div -->
@include('pie')
    
</html>