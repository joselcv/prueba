@extends('layout.login')

@section('titulo','Login')

@section('contenido')

    <div class="container">
            <div class="aut">
                    <h1 class="text-center">Login</h1>
                    <div></div>
                    <div>
                        <form method="POST">
                            @csrf
                            <select name="comboDocumento" id="comboDocumento" >
                                <option value="1">C.C</option>
                                <option value="2">C.E</option>
                            </select><br><br>
                            <input name="ide" type="text" placeholder="Identificacion"><br><br>
                            <input name="usu" type="text" placeholder="Usuario"><br><br>
                            <input name="pass" type="password" placeholder="clave"><br><br>
                            <button>Ingresar</button>
                        </form>
                    </div>
            </div>
    </div>
@endsection