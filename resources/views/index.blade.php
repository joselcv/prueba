@extends('layout.login')

@section('titulo','Login')

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
            <div class="aut">
                    <h1 class="text-center">Login</h1>
                    <div></div>
                    <div>
                    <form method="POST" action="{{route('tdousuario.index')}}">
                            @method('GET')
                            @csrf
                            <input name="ide" type="text" placeholder="Identificacion"><br><br>
                            <input name="usu" type="text" placeholder="Usuario"><br><br>
                            <input name="pass" type="password" placeholder="clave"><br><br>
                            <button>Ingresar</button>
                        </form>
                    </div>
            </div>
    </div>
@endsection