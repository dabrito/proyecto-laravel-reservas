<?php

namespace App\Http\Controllers;

use App\Models\TipoMesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TipoMesaController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $tiposmesas = DB::table('tipos_mesas')->get();
    return view('tiposmesas.index', ['tiposmesas' => $tiposmesas]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('tiposmesas.new'); //carga la vista de crear mesa
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    TipoMesa::create($request->all()); //creando modelo de tipomesa
    return redirect()->route('tiposmesas.index')->with('success', 'Tipo de mesa creado satisfactoriamente');
  }

  /**
   * Display the specified resource.
   */
  public function show(TipoMesa $tipoMesa)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(TipoMesa $tipoMesa)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, TipoMesa $tipoMesa)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(TipoMesa $tipoMesa)
  {
    //
  }
}
