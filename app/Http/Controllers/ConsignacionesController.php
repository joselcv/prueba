<?php

namespace App\Http\Controllers;

use App\consignaciones;
use App\cuentas;
use App\usuarios;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ConsignacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $consig=consignaciones::all();
        return view('TdoConsignaciones.conshow',compact('consig'));        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cedula=usuarios::pluck('usu_cedula');
        $data=cuentas::pluck('cue_numero');
        return view('TdoConsignaciones.concre',compact('cedula','data'));
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
          'con_valor'=>'required|int',
          'con_fecha'=>'required',
          'con_descripcion'=>'required'
        ]);
        consignaciones::create($request->all());
        $consig=$request->get('con_valor');

        $query= DB::table('cuentas')->where('cue_numero',$request->get('cue_numero'));
        $query->increment('cue_saldo',$consig);
    
        $saldo=DB::table('cuentas')->where('cue_numero', $request->get('cue_numero'))->value('cue_saldo');
        
        if($saldo<100000){
            DB::table('cuentas')
            ->where('cue_numero',$request->get('cue_numero'))
            ->update(['cue_activa' => false]);
        }else{
            DB::table('cuentas')
            ->where('cue_numero',$request->get('cue_numero'))
            ->update(['cue_activa' => true]);
        }
    
        return redirect()->route('tdoconsignaciones.index');
    }


    
    /**
     * Display the specified resource.
     *
     * @param  \App\consignaciones  $consignaciones
     * @return \Illuminate\Http\Response
     */
    public function show($consignaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\consignaciones  $consignaciones
     * @return \Illuminate\Http\Response
     */
    public function edit(consignaciones $consignaciones)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\consignaciones  $consignaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, consignaciones $consignaciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\consignaciones  $consignaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(consignaciones $consignaciones)
    {
        //
    }
}
