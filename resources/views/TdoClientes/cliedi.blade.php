@extends('TdoClientes.layout')

@section('titulo','Cli editar')


@section('contenido')


<div class="container">
        <h1 class="text-center">Editar Cliente</h1>
            <form  method="POST" action=" {{route('tdocliente.update',$clientes->cli_cedula)}} ">
                @csrf
                @method('PUT')
                
                    <div class="form-group">
                      <label for="tdoc_codigo">Tipo Documento</label>
                      <select name="tdoc_codigo" id="tdoc_codigo">
                        @foreach ($data as $item => $value)
                            <option value="{{$item}}">{{$value}}</option>
                        @endforeach
                  </select>
                      <small id="tdoc_codigo" class="form-text text-muted">Por Ejemplo: C.C / C.E / T.I</small>
                      <input  type="text" name="cli_nombre" value="{{$clientes->cli_nombre}}" class="form-control" id="cli_nombre">
                      <small id="cli_nombre" class="form-text text-muted">Por Ejemplo: pepe</small>
                      <input  type="text" name="cli_direccion" value="{{$clientes->cli_direccion}}" class="form-control" id="cli_direccion">
                      <small id="cli_direccion" class="form-text text-muted">Por Ejemplo: cra 80 #1-21</small>
                      <input  type="text" name="cli_telefono" value="{{$clientes->cli_telefono}}" class="form-control" id="cli_telefono">
                      <small id="cli_telefono" class="form-text text-muted">Por Ejemplo: 18721212</small>
                      <input  type="text" name="cli_mail" value="{{$clientes->cli_mail}}" class="form-control" id="cli_mail">
                      <small id="cli_mail" class="form-text text-muted">Por Ejemplo: example@example.com</small>
                      
                    </div>
                    <button class="btn btn-primary">Actualizar</button>
            </form>   
    </div> 
@endsection