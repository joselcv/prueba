@extends('TdoClientes.layout')

@section('titulo','Documentos')

@section('contenido')
    
    <div class="text-center mt-5 mb-5"><h1>Clientes</h1></div>
     <div class="container">
            <table class="table table-striped table-dark">
                <a class="btn btn-primary mb-3" href="{{route('tdocliente.create')}}">Registrar</a>
                    <thead>
                      <tr>
                        <th scope="col"  class="text-center">Identificacion</th>
                        <th scope="col"  class="text-center">Tipo Identificacion</th>
                        <th scope="col"  class="text-center">Nombre</th>
                        <th scope="col"  class="text-center">Direccion</th>
                        <th scope="col"  class="text-center">Telefono</th>
                        <th scope="col"  class="text-center">Email</th>

                      </tr>
                    </thead>
                    <tbody>
                                 @foreach ($data as $cliente)
                                        <tr>
                                        <td class="text-center">{{$cliente->cli_cedula}}</td>
                                        @foreach ($doc as $item => $value)
                                        @if ($cliente->tdoc_codigo==$item)
                                        <td class="text-center">{{$value}}</td>
                                        @endif
                                    @endforeach
                                        <td class="text-center">{{$cliente->cli_nombre}}</td>
                                        <td class="text-center">{{$cliente->cli_direccion}}</td>
                                        <td class="text-center">{{$cliente->cli_telefono}}</td>
                                        <td class="text-center">{{$cliente->cli_mail}}</td>
                                        <td class="text-center"><a class="btn btn-dark mb-2" href="{{route('tdocliente.edit',$cliente->cli_cedula)}}"><i class="far fa-edit"></i></a>
                                          <td><a class="btn btn-dark"><i class="fas fa-info-circle"></i></a> </td>
                                        </tr>
                                @endforeach
                
                    </tbody>
                  </table>         
    </div>    
@endsection