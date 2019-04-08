@extends('TdoConsignaciones.layout')

@section('titulo','Consignaciones')

@section('contenido')
    
    <div class="text-center mt-5 mb-5"><h1>Consignaciones</h1></div>
     <div class="container ">
       
        <a class="btn btn-dark mb-2" href="{{route('tdoconsignaciones.create')}}"><i class="fas fa-cash-register"></i></a>
            <table class="table table-striped table-dark">
                    <thead>
                      <tr>
                        <th scope="col"  class="text-center">Codigo Consignacion</th>
                        <th scope="col"  class="text-center">Numero de cuenta</th>
                        <th scope="col"  class="text-center">Identificacion Usuario</th>
                        <th scope="col"  class="text-center">Valor</th>
                        <th scope="col"  class="text-center">Fecha</th>
                        <th scope="col"  class="text-center">Descripcion</th>

                      </tr>
                    </thead>
                    <tbody>
                            @foreach ($consig as $cons)
                                   <tr>
                                    <td class="text-center">{{$cons->con_codigo}}</td>
                                    <td class="text-center">{{$cons->cue_numero}}</td>
                                    <td class="text-center">{{$cons->usu_cedula}}</td>
                                    <td class="text-center">{{$cons->con_valor}} $</td>
                                    <td class="text-center">{{$cons->con_fecha}}</td>
                                    <td class="text-center">{{$cons->con_descripcion}}</td>
                                    <td><td class="text-center"><a class="btn btn-dark mb-2" href="{{route('tdoconsignaciones.create')}}"><i class="far fa-edit"></i></a>
                                    </td>                              
                                  </tr>
                            @endforeach
                    </tbody>
                  </table>         
    </div>    
@endsection