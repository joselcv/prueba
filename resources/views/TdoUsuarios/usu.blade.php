@extends('TdoUsuarios.layout')

@section('titulo','Usuarios')

@section('contenido')
    
    <div class="text-center mt-5 mb-5"><h1>Clientes</h1></div>
     <div class="container">
            <table class="table table-striped table-dark">
                <a class="btn btn-primary mb-3" href="{{route('tdousuario.create')}}">Registrar</a>
                    <thead>
                      <tr>
                        <th scope="col"  class="text-center">Identificacion</th>
                        <th scope="col"  class="text-center">Codigo</th>
                        <th scope="col"  class="text-center">Nombre</th>
                        <th scope="col"  class="text-center">Usuario</th>
                        <th scope="col"  class="text-center">Contraseña</th>

                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $usuario)
                         <tr>
                          <td class="text-center"> {{ $usuario->usu_cedula }} </td>
                          <td class="text-center"> {{ $usuario->tusu_codigo }} </td>
                          <td class="text-center"> {{ $usuario->usu_nombre }} </td>
                          <td class="text-center"> {{ $usuario->usu_login }} </td>
                          <td class="text-center"> {{ $usuario->usu_clave }} </td>
                          <td class="text-center"><a class="btn btn-dark mb-2" href="{{route('tdousuario.edit',$usuario->usu_cedula)}}"><i class="far fa-edit"></i></a>
                          <td><a class="btn btn-dark"><i class="fas fa-info-circle"></i></a> </td>
                          </tr>
                        @endforeach
                    </tbody>
                  </table>         
    </div>    
@endsection