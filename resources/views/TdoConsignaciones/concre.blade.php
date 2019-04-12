@extends('TdoConsignaciones.layout')


@section('titulo','Consignaciones')  

@section('contenido')
        <div class="container">
                <div class="form-group">
                <h1 class="text-center mt-5">Consignaciones</h1>
                        <form  method="POST" action=" {{route('tdoconsignaciones.store')}} ">
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
                                  <small id="con_valor" class="form-text text-muted">Valor</small>
                                  <input  type="number" class="form-control" id="con_valor" name="con_valor" value="{{ old('con_valor') }}" placeholder="Valor" >
                                  <small id="con_descripcion" class="form-text text-muted">Fecha</small>
                                  <input id="con_fecha" type="date" name="con_fecha">
                                  <small id="con_descripcion" class="form-text text-muted">Descripcion</small>
                                  <textarea style="height: 50px"name="con_descripcion" id="con_descripcion" cols="30" rows="10" readonly>Consignacion</textarea>                                  
                                  </div>
                                <button class="btn btn-primary mb-4">consignar</button>
                        </form>  
                    </div> 
                </div> 
@endsection