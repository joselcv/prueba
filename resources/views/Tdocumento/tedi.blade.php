@extends('Tdocumento.layout')

@section('titulo','Doc editar')


@section('contenido')


<div class="container">
        <h1 class="text-center">Editar Documento</h1>
            <form  method="POST" action=" {{route('tdocumento.update',$tipos_documentos->tdoc_codigo)}} ">
                @csrf
                @method('PUT')
                
                    <div class="form-group">
                      <label for="tipoDoc">Tipo Documento</label>
                      <input  type="text" name="tdoc_nombre" value="{{$tipos_documentos->tdoc_nombre}}" class="form-control" id="tipoDoc">
                      <small id="tipoDoc" class="form-text text-muted">Por Ejemplo: C.C / C.E / T.I</small>
                    </div>
                    <button class="btn btn-primary">Actualizar</button>
            </form>   
    </div> 
@endsection