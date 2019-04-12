<?php

namespace App\Http\Controllers;

use App\usuarios;
use App\tipos_usuarios;
use Hash;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    



    public function index()
    {
        $data=usuarios::paginate(3);
        return view('TdoUsuarios.usu', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=tipos_usuarios::pluck('tusu_nombre','tusu_codigo');
        return view('TdoUsuarios.usucre', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'usu_cedula'=>'required|max:9',
            'tusu_codigo'=>'required|max:8',
            'usu_nombre'=>'required|max:30',
            'usu_login'=>'required|max:25',
            'usu_clave'=>'required|max:20',
        ]);
        usuarios::create($request->all());
        return redirect()->route('tdousuario.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit($usuarios)
    {
       $usuario=usuarios::find($usuarios);
       $data=tipos_usuarios::pluck('tusu_nombre','tusu_codigo');

       return view('TdoUsuarios.usuedi',compact('usuario','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $usuarios)
    {
        $tdousuario=usuarios::find($usuarios);
        $request->validate([
            'usu_nombre'=>'required|max:25',
            'usu_login'=>'required|max:25',
            'usu_clave'=>'required|max:25'
        ]);

        $tdousuario->update($request->all());
        return redirect()->route('tdousuario.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(usuarios $usuarios)
    {
        $usuarios->delete();
        return redirect()->route('tdousuario.index');
    }
}
