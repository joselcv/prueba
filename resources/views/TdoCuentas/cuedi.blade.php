@extends('TdoCuentas.layout')

@section('titulo','Cue editar')


@section('contenido')


<div class="container">
    @if ($errors->any())
            <div class="alert alert-danger">
                <h6>Por favor corrige los siguientes Errores:</h6>
            <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
            @endforeach 
            </ul>     
            </div>  
        @endif
        <h1 class="text-center mt-5">Editar Cuentas</h1>
            <form  method="POST" action=" {{route('tdocuenta.update',$cuentas->cue_numero)}} ">
                @csrf
                @method('PUT')
                
                    <div class="form-group">
                    <select name="cue_cedula" id="cue_cedula">
                        @foreach ($data as $item => $value)
                            <option value="{{$item}}">{{$value}}</option>
                        @endforeach
                  </select>
                  <small id="cue_clave" class="form-text text-muted mb-4">Usuario</small>
                      
                      <input  type="text" name="cue_clave" value="{{$cuentas->cue_clave}}" class="form-control" id="cue_clave">                     
                      <small id="cue_clave" class="form-text text-muted">Clave</small>
                      <div></div>
                    </div>
                    <button class="btn btn-primary">Actualizar</button>
            </form>   
    </div> 
@endsection