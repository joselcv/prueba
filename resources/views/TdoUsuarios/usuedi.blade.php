@extends('TdoUsuarios.layout')

@section('titulo','Usu editar')


@section('contenido')


<div class="container">
        <h1 class="text-center">Editar Usuarios</h1>
            <form  method="POST" action=" {{route('tdousuario.update',$usuario->usu_cedula)}} ">
                @csrf
                @method('PUT')
                
                    <div class="form-group">
                      <label for="tdoc_codigo">Tipo Documento</label>
                      <select name="tusu_codigo" id="tusu_codigo">
                            @foreach ($data as $item => $value)
                                <option value="{{$item}}">{{$value}}</option>
                            @endforeach
                      </select>
                      <small id="tusu_codigo" class="form-text text-muted"></small>
                      <input  type="text" name="usu_nombre" value="{{$usuario->usu_nombre}}" class="form-control" id="usu_nombre">
                      <small id="usu_nombre" class="form-text text-muted">Por Ejemplo: pepe</small>
                      <input  type="text" name="usu_login" value="{{$usuario->usu_login}}" class="form-control" id="usu_login">
                      <small id="usu_login" class="form-text text-muted">Por Ejemplo: pepino</small>
                      <input  type="password" name="usu_clave" value="{{$usuario->usu_clave}}" class="form-control" id="usu_clave">
                      <small id="usu_clave" class="form-text text-muted">Por Ejemplo: hasd123</small>                     
                    </div>
                    <button class="btn btn-primary">Actualizar</button>
            </form>   
    </div> 
@endsection