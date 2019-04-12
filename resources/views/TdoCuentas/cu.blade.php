@extends('TdoCuentas.layout')

@section('titulo','Cuenta')

@section('contenido')
    
    <div class="text-center mt-5 mb-5"><h1>Cuentas de Ahorro</h1></div>
     <div class="container w-50">
            <table class="table table-striped table-dark">
                    <thead>
                      <tr>
                        <th scope="col"  class="text-center">Numero Cuenta </th>
                        <th scope="col"  class="text-center">Cliente</th>
                        <th scope="col"  class="text-center">Saldo</th>
                        <th scope="col"  class="text-center">Activa</th>
                        <th scope="col"  class="text-center">Clave</th>

                      </tr>
                    </thead>
                    <tbody>
                            @foreach ($data as $cuentas)
                                   <tr>
                                    <td class="text-center">{{$cuentas->cue_numero}}</td>
                                    <td class="text-center">C.C {{$cuentas->cli_cedula}}</td>
                                    <td class="text-center">{{$cuentas->cue_saldo}} $</td>
                                      @if ($cuentas->cue_activa==0)
                                        <td class="text-center">Inactiva</td>
                                      @else
                                      <td class="text-center">Activa</td>
                                    @endif
                                    <td class="text-center">{{$cuentas->cue_clave}}</td> 
                                    <td><td class="text-center"><a class="btn btn-dark mb-2" href="{{route('tdocuenta.edit',$cuentas->cue_numero)}}"><i class="far fa-edit"></i></a>
                                    </td>                              
                                  </tr>
                            @endforeach
                    </tbody>
                  </table>         
    </div>    
@endsection