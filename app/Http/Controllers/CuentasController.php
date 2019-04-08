<?php

namespace App\Http\Controllers;

use App\cuentas;
use App\clientes;
use Illuminate\Http\Request;

class CuentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=cuentas::all();
        return view('TdoCuentas.cu',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cuentas  $cuentas
     * @return \Illuminate\Http\Response
     */
    public function show(cuentas $cuentas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cuentas  $cuentas
     * @return \Illuminate\Http\Response
     */
    public function edit($cuenta)
    {

        $data=clientes::pluck('cli_nombre','cli_cedula');;
        $cuentas=cuentas::find($cuenta);
        return view('TdoCuentas.cuedi',compact('cuentas','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cuentas  $cuentas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$cuentas)
    {
        $request->validate([
            'cue_cedula'=>'required|max:9',
            'cue_clave'=>'required|max:4|min:4'
        ]);
        $cuenta=cuentas::find($cuentas);
        $cuenta->update($request->all());
        
        return redirect()->route('tdocuenta.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cuentas  $cuentas
     * @return \Illuminate\Http\Response
     */
    public function destroy(cuentas $cuentas)
    {
        //
    }
}
