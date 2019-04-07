@extends('Tdocumento.layout')

@section('titulo','CrearDoc')

@section('contenido')
    <div class="container">
        <h1 class="text-center">Registrar Documento</h1>
            <form  method="POST" action=" {{route('tdocumento.store')}} ">
                @csrf
                    <div class="form-group">
                      <label for="tipoDoc">Tipo Documento</label>
                      <input  type="text" class="form-control" id="tipoDoc" name="tdoc_nombre" value="{{ old('tipoDoc') }}" placeholder="ingresa tipo de documento" >
                      <small id="tipoDoc" class="form-text text-muted">Por Ejemplo: C.C / C.E / T.I</small>
                    </div>
                    <button     class="btn btn-primary">Registrar</button>
            </form>   
    </div> 
@endsection