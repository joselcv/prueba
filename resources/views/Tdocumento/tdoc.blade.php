@extends('Tdocumento.layout')

@section('titulo','Documentos')

@section('contenido')
    
    <div class="text-center mt-5 mb-5"><h1>Documentos</h1></div>
     <div class="container w-50">
            <table class="table table-striped table-dark">
                <a class="btn btn-primary mb-3" href="{{route('tdocumento.create')}}">Registrar</a>
                    <thead>
                      <tr>
                        <th scope="col"  class="text-center">Codigo</th>
                        <th scope="col"  class="text-center">Nombre</th>
                        <th scope="col"  class="text-center">Acciones</th>

                      </tr>
                    </thead>
                    <tbody>
                            @foreach ($data as $tipos_documentos)
                                   <tr>
                                    <td class="text-center">{{$tipos_documentos->tdoc_codigo}}</td>
                                    <td class="text-center">{{$tipos_documentos->tdoc_nombre}}</td>
                                    <td class="text-center"><a class="btn btn-dark mb-2" href="{{route('tdocumento.edit',$tipos_documentos->tdoc_codigo)}}"><i class="far fa-edit"></i></a>
                                      <form action="{{route('tdocumento.destroy',$tipos_documentos->tdoc_codigo)}}" method="POST">
                                          @csrf
                                          @method('DELETE')
                                          <a class="btn btn-dark"><i class="fas fa-trash-alt"></i></a>
                                      </form>
                                    </td>
                                   
                                  </tr>
                            @endforeach
                    </tbody>
                  </table>         
    </div>    
@endsection