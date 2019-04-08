<?php

namespace App\Http\Controllers;

use App\clientes;
use App\cuentas;
use App\tipos_documentos;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doc=tipos_documentos::pluck('tdoc_nombre','tdoc_codigo');
        $data=clientes::all();
        return view('TdoClientes.cli',compact('data','doc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=tipos_documentos::pluck('tdoc_nombre','tdoc_codigo');
        return view('TdoClientes.clicre',compact('data'));
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
            'cli_cedula'=>'required|max:10',
            'tdoc_codigo'=>'required',
            'cli_nombre'=>'required',
            'cli_direccion'=>'required',
            'cli_telefono'=>'required',
            'cli_mail'=>'required',
        ]);
        

        $cue_numero=rand(100000000,999999999); //generar numero cuenta
        $num=$request['cli_cedula']; //cedula cliente
        $cue_clave = substr($num, -4); //generar clave
        $cue_saldo=0; //saldo
        $cue_activa=false; // activa

        $rCuenta=[
            'cue_numero'=>$cue_numero,
            'cli_cedula'=>$num,
            'cue_saldo'=>$cue_saldo,
            'cue_activa'=>$cue_activa,
            'cue_clave'=>$cue_clave
        ];


        clientes::create($request->all());
        cuentas::create($rCuenta);

        
        return redirect()->route('tdocliente.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit($cliente)
    {   
        $data=tipos_documentos::pluck('tdoc_nombre','tdoc_codigo');
        $clientes = clientes::find($cliente);
        return view('TdoClientes.cliedi',compact('clientes','data')); 
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cli_cedula)
    {
    
        $cliente=clientes::find($cli_cedula);
        $request->validate([
            'tdoc_codigo'=>'required',
            'cli_nombre'=>'required',
            'cli_direccion'=>'required',
            'cli_telefono'=>'required',
            'cli_mail'=>'required|email',
        ]);

        $cliente->update($request->all());
        return redirect()->route('tdocliente.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy(clientes $clientes)
    {
        $clientes->delete();
        return redirect()->route('tdocliente.index');
    }
}
