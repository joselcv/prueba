@extends('TdoRetiros.layout')

@section('titulo','Retiros')

@section('contenido')
    
    <div class="text-center mt-5 mb-5"><h1>Retiros</h1></div>
     <div class="container ">
       
        <a class="btn btn-dark mb-2" href="{{route('tdoretiros.create')}}"><i class="fas fa-cash-register"></i></a>
            <table class="table table-striped table-dark">
                    <thead>
                      <tr>
                        <th scope="col"  class="text-center">Codigo Retiro</th>
                        <th scope="col"  class="text-center">Numero de cuenta</th>
                        <th scope="col"  class="text-center">Identificacion Usuario</th>
                        <th scope="col"  class="text-center">Valor</th>
                        <th scope="col"  class="text-center">Fecha</th>
                        <th scope="col"  class="text-center">Descripcion</th>

                      </tr>
                    </thead>
                    <tbody>
                            @foreach ($reti as $cons)
                                   <tr>
                                    <td class="text-center">{{$cons->ret_codigo}}</td>
                                    <td class="text-center">{{$cons->cue_numero}}</td>
                                    <td class="text-center">{{$cons->usu_cedula}}</td>
                                    <td class="text-center">{{$cons->ret_valor}} $</td>
                                    <td class="text-center">{{$cons->ret_fecha}}</td>
                                    <td class="text-center">{{$cons->ret_descripcion}}</td>
                                    <td><td class="text-center"><a class="btn btn-dark mb-2" href="{{route('tdoretiros.create')}}"><i class="far fa-edit"></i></a>
                                    </td>                              
                                  </tr>
                            @endforeach
                    </tbody>
                  </table>         
    </div>    
@endsection