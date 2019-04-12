@extends('TdoRetiros.layout')


@section('titulo','Retiros')  

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
                <h1 class="text-center mt-5">Retiros</h1>
                        <form  method="POST" action=" {{route('tdoretiros.store')}} ">
                            @csrf
                                <div class="form-group">
                                  <small id="cue_numero" class="form-text text-muted">Cuenta</small>
                                  <select name="cue_numero" id="cue_numero">
                                        @foreach ($data as $item => $value)
                                            <option value="{{$value}}">{{$value}}</option>
                                        @endforeach
                                  </select>
                                  <small id="usu_cedula" class="form-text text-muted">Cedula</small>
                                  <select name="usu_cedula" id="usu_cedula">
                                        @foreach ($cedula as $cedula => $value)
                                            <option value="{{$value}}">{{$value}}</option>
                                        @endforeach
                                  </select>
                                  <small id="ret_valor" class="form-text text-muted">Valor</small>
                                  <input  type="number" class="form-control" id="ret_valor" name="ret_valor" value="{{ old('ret_valor') }}" placeholder="Valor" >
                                  <small id="ret_descripcion" class="form-text text-muted">Fecha</small>
                                  <input id="ret_fecha" type="date" name="ret_fecha">
                                  <small id="ret_descripcion" class="form-text text-muted">Descripcion</small>
                                  <textarea style="height: 50px"name="ret_descripcion" id="ret_descripcion" cols="30" rows="10" readonly>Retiro</textarea>                                  
                                  </div>
                                <button class="btn btn-primary mb-4">Retirar</button>
                        </form>   
                </div> 
@endsection