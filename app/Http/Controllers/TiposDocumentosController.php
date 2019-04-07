<?php

namespace App\Http\Controllers;

use App\tipos_documentos;
use Illuminate\Http\Request;



class TiposDocumentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=tipos_documentos::all();
        return view('Tdocumento.tdoc',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Tdocumento.tcre');  
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
            'tdoc_nombre'=>'required|max:2'
        ]);
        
        tipos_documentos::create($request->all());
        
        return redirect()->route('tdocumento.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tipos_documentos  $tipos_documentos
     * @return \Illuminate\Http\Response
     */
    public function show(tipos_documentos $tipos_documentos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tipos_documentos  $tipos_documentos
     * @return \Illuminate\Http\Response
     */
    public function edit($tdoc_codigo)
    {
        $tipos_documentos = tipos_documentos::find($tdoc_codigo);
        return view('Tdocumento.tedi',compact('tipos_documentos'));  
             
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tipos_documentos  $tipos_documentos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $tdoc_codigo)
    {
        $tdocument=tipos_documentos::find($tdoc_codigo);
        $request->validate([
            'tdoc_nombre'=>'required'
        ]);

        $tdocument->update($request->all());
        return redirect()->route('tdocumento.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tipos_documentos  $tipos_documentos
     * @return \Illuminate\Http\Response
     */
    public function destroy(tipos_documentos $tipos_documentos)
    {
        $tipos_documentos->delete();
        return redirect()->route('tdocumento.index');   
    }
}
