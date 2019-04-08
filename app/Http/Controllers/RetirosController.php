<?php

namespace App\Http\Controllers;

use App\retiros;
use App\cuentas;
use App\usuarios;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RetirosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reti=retiros::all();
        return view('TdoRetiros.retishow',compact('reti'));
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
        return view('TdoRetiros.reticre',compact('cedula','data'));
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
            'ret_valor'=>'required|int',
            'ret_fecha'=>'required',
            'ret_descripcion'=>'required'
          ]);

        
          retiros::create($request->all());
          $consig=$request->get('ret_valor');
  
          $query= DB::table('cuentas')->where('cue_numero',$request->get('cue_numero'));
          $query->decrement('cue_saldo',$consig);
      
          $saldo=DB::table('cuentas')->where('cue_numero', $request->get('cue_numero'))->value('cue_saldo');
          
          if($saldo<100000){
              
          }else{
              DB::table('cuentas')
              ->where('cue_numero',$request->get('cue_numero'))
              ->update(['cue_activa' => true]);
          }
      
          return redirect()->route('tdoretiros.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\retiros  $retiros
     * @return \Illuminate\Http\Response
     */
    public function show(retiros $retiros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\retiros  $retiros
     * @return \Illuminate\Http\Response
     */
    public function edit(retiros $retiros)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\retiros  $retiros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, retiros $retiros)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\retiros  $retiros
     * @return \Illuminate\Http\Response
     */
    public function destroy(retiros $retiros)
    {
        //
    }
}
