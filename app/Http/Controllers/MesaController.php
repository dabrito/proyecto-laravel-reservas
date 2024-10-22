<?php

namespace App\Http\Controllers;

use App\Models\Mesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MesaController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $mesas = DB::table('mesas')->get();
    $mesas = Mesa::with('tipo')->get();
    return view('mesas.index', ['mesas' => $mesas]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('mesas.new'); //carga la vista de crear mesa
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $request->validate([
      'numero' => 'required|integer|unique:mesas', // Asegúrate de que el número de la mesa sea único
      'capacidad' => 'required|integer|min:1',
      'tipo_id' => 'required|exists:tipos_mesas,id', // Validar que el tipo de mesa exista
    ]);

    Mesa::create($request->all());
    return redirect()->route('mesas.index')->with('success', 'Mesa creada con éxito');
  }

  /**
   * Display the specified resource.
   */
  public function show(Mesa $mesa)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Mesa $mesa)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Mesa $mesa)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Mesa $mesa)
  {
    //
  }
}
