@extends('Tdoclientes.layout')

@section('titulo','CrearCliente')

@section('contenido')
    <div class="container">
        <h1 class="text-center">Registrar Cliente</h1>
            <form  method="POST" action=" {{route('tdocliente.store')}} ">
                @csrf
                    <div class="form-group">
                      <label for="cli_cedula">Cedula</label>
                      <input  type="text" class="form-control" id="cli_cedula" name="cli_cedula" value="{{ old('cli_cedula') }}" placeholder="documento numero" >
                      <small id="cli_cedula" class="form-text text-muted">Por Ejemplo: 100232134</small>
                      <select name="tdoc_codigo" id="tdoc_codigo">
                            @foreach ($data as $item => $value)
                                <option value="{{$item}}">{{$value}}</option>
                            @endforeach
                      </select>
                      <small id="tdoc_codigo" class="form-text text-muted"></small>
                      <input  type="text" class="form-control" id="cli_nombre" name="cli_nombre" value="{{ old('cli_nombre') }}" placeholder="Nombre" >
                      <small id="cli_nombre" class="form-text text-muted">Por Ejemplo: pepito</small>
                      <input  type="text" class="form-control" id="cli_direccion" name="cli_direccion" value="{{ old('cli_direccion') }}" placeholder="Direccion" >
                      <small id="cli_direccion" class="form-text text-muted">Por Ejemplo: cra 89 #2-1</small>
                      <input  type="text" class="form-control" id="cli_telefono" name="cli_telefono" value="{{ old('cli_telefono') }}" placeholder="Telefono" >
                      <small id="cli_telefono" class="form-text text-muted">Por Ejemplo: 3238791</small>
                      <input  type="cli_mail" class="form-control" id="cli_mail" name="cli_mail" value="{{ old('cli_mail') }}" placeholder="Email" >
                      <small id="cli_mail" class="form-text text-muted">Por Ejemplo: example@outlook.com</small>
                      
                    </div>
                    <button     class="btn btn-primary">Registrar</button>
            </form>   
    </div> 
@endsection