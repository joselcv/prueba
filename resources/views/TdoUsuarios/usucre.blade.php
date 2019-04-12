@extends('TdoUsuarios.layout')

@section('titulo','CrearUsuario')

@section('contenido')
    <div class="container">
        <h1 class="text-center mt-5">Registrar Usuario</h1>

        {{-- {{dd($errors->usu_cedula)}} con esta funcion podemos ver el contenido de la variable errors--}}
        @if ($errors->any())
            <div class="alert alert-danger">
                    <h6>Por favor corrige los siguientes Errores:</h6>
            </div>
        @endif
        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <h6>Por favor corrige los siguientes Errores:</h6>
            <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
            @endforeach 
            </ul>     
            </div>  
        @endif --}}

            <form  method="POST" action=" {{route('tdousuario.store')}} ">
                @csrf
                    <div class="form-group">
                      <label for="usu_cedula">Cedula</label>
                      <input  type="text" class="form-control" id="usu_cedula" name="usu_cedula" value="{{ old('usu_cedula') }}" placeholder="documento numero" >
                      <small id="usu_cedula" class="form-text text-muted">Por Ejemplo: 100232134</small>
                      @if ($errors->has('usu_cedula'))
                        <li class="alert alert-danger"> {{$errors->first('usu_cedula')}} </li>                          
                      @endif
                      <select name="tusu_codigo" id="tusu_codigo">
                            @foreach ($data as $item => $value)
                                <option value="{{$item}}">{{$value}}</option>
                            @endforeach
                      </select>
                      <small id="tusu_codigo" class="form-text text-muted"></small>
                      <input  type="text" class="form-control" id="usu_nombre" name="usu_nombre" value="{{ old('usu_nombre') }}" placeholder="Nombre" >
                      <small id="usu_nombre" class="form-text text-muted">Por Ejemplo: pepito</small>
                      @if ($errors->has('usu_nombre'))
                        <li class="alert alert-danger"> {{$errors->first('usu_nombre')}} </li>                          
                      @endif
                      <input  type="text" class="form-control" id="usu_login" name="usu_login" value="{{ old('usu_login') }}" placeholder="Usuarip" >
                      <small id="usu_login" class="form-text text-muted">Por Ejemplo: elbalazo</small>
                      @if ($errors->has('usu_login'))
                        <li class="alert alert-danger"> {{$errors->first('usu_login')}} </li>                          
                      @endif
                      <input  type="text" class="form-control" id="usu_clave" name="usu_clave" value="{{ old('usu_clave') }}" placeholder="Clave" >
                      <small id="usu_clave" class="form-text text-muted">Por Ejemplo: asd123</small>
                      @if ($errors->has('usu_clave'))
                        <li class="alert alert-danger"> {{$errors->first('usu_clave')}} </li>                          
                      @endif
                    </div>
                    <button class="btn btn-primary">Registrar</button>
            </form>   
    </div> 
@endsection