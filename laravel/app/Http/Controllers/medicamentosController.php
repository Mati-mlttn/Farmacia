<?php

namespace App\Http\Controllers;

use App\Models\medicamento;
use Illuminate\Http\Request;

class medicamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titulo='Nuevo Medicamento';
        $items=medicamento::all();
        return view('medicamentos.index', compact('titulo', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titulo='Nuevo Medicamento';
        return view('medicamentos.create', compact('titulo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $medicamentos=new medicamento();
        $medicamentos->nombre=$request->nombre;
        $medicamentos->cantidad=$request->cantidad;
        $medicamentos->fabricante=$request->fabricante;
        $medicamentos->save();
        
        return redirect()->route('medicamentos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $titulo='Editar Medicamento';
        $item=medicamento::find($id);
        return view('medicamentos.edit', compact('titulo', 'item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item=medicamento::find($id);
        $item->nombre=$request->nombre;
        $item->cantidad=$request->cantidad;
        $item->fabricante=$request->fabricante;
        $item->save();
        
        return redirect()->route('medicamentos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item=medicamento::find($id);
        $item->delete();
        return redirect()->route('medicamentos.index');
    }
}
