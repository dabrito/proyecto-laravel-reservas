<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Reserva;
use App\Models\Mesa;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ReservaController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index(Request $request)
  {
    // Obtener todas las reservas
    $query = Reserva::query();

    // Si hay un término de búsqueda, filtrar las reservas por el nombre del usuario (cliente)
    if ($request->has('search')) {
      $query->whereHas('usuario', function ($q) use ($request) {
        $q->where('nombre', 'like', '%' . $request->search . '%');
      });
    }

    // Obtener las reservas, con paginación o no, según prefieras
    $reservas = $query->latest()->get(); // O ->paginate(10) para paginar los resultados

    // Pasar las reservas a la vista
    return view('reservas.index', compact('reservas'));
  }


  public function indexClientes()
  {
    // Obtener el usuario autenticado
    $usuario = auth()->user();

    // Obtener las reservas del usuario
    $reservas = $usuario->reservas; // Asegúrate de tener la relación definida en el modelo Usuario

    // Pasar las reservas a la vista
    return view('reservas.indexClientes', compact('reservas'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $usuarios = Usuario::all();
    $mesas = Mesa::all();
    return view('reservas.create', compact('usuarios', 'mesas'));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    // Validación de los datos del formulario
    $request->validate([
      'usuario_id' => 'required|exists:usuarios,id',
      'mesa_id' => 'required|exists:mesas,id',
      'fecha_reserva' => 'required|date|after_or_equal:today', // Valida que la fecha no sea anterior a hoy
      'hora_reserva' => [
        'required',
        'date_format:H:i',
        function ($attribute, $value, $fail) use ($request) {
          $fecha_reserva = $request->input('fecha_reserva');
          $fecha_hoy = Carbon::now()->toDateString();
          $hora_actual = Carbon::now()->format('H:i');
          if ($fecha_reserva === $fecha_hoy && $value < $hora_actual) {
            $fail('La hora de la reserva no puede ser anterior a la hora actual.');
          }
        }
      ],
      'numero_personas' => 'required|integer|min:1',
      'estado' => 'nullable|string|max:255',
    ]);

    // Crear nueva reserva y guardar en la base de datos
    $reserva = new Reserva([
      'usuario_id' => $request->input('usuario_id'),
      'mesa_id' => $request->input('mesa_id'),
      'fecha_reserva' => $request->input('fecha_reserva'),
      'hora_reserva' => $request->input('hora_reserva'),
      'numero_personas' => $request->input('numero_personas'),
      'estado' => $request->input('estado'),
    ]);

    // Guardar la reserva
    $reserva->save();

    // Redirigir con mensaje de éxito
    return redirect()->route('reservas.index')->with('success', 'Reserva creada exitosamente.');
  }



  /**
   * Display the specified resource.
   */
  public function show(Reserva $reserva)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit($id)
  {
    $reserva = Reserva::find($id);  // Asegúrate de encontrar la reserva por ID
    return view('reservas.update', compact('reserva'));
  }



  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Reserva $reserva)
  {
    $request->validate([
      'usuario_id' => 'required|exists:usuarios,id',
      'mesa_id' => 'required|exists:mesas,id',
      'fecha_reserva' => 'required|date|after_or_equal:today', // Valida que la fecha no sea anterior a hoy
      'hora_reserva' => [
        'required',
        'date_format:H:i',
        function ($attribute, $value, $fail) use ($request) {
          $fecha_reserva = $request->input('fecha_reserva');
          $fecha_hoy = Carbon::now()->toDateString();
          $hora_actual = Carbon::now()->format('H:i');
          if ($fecha_reserva === $fecha_hoy && $value < $hora_actual) {
            $fail('La hora de la reserva no puede ser anterior a la hora actual.');
          }
        }
      ],
      'numero_personas' => 'required|integer|min:1',
      'estado' => 'nullable|string|max:255',
    ]);

    // Actualiza la reserva
    $reserva->update($request->all());

    // Redirige a la página de índice con un mensaje de éxito
    return redirect()->route('reservas.index')->with('success', 'Reserva actualizada correctamente.');
  }




  /**
   * Remove the specified resource from storage.
   */
  public function destroy($id)
  {
    // Encuentra la reserva por su ID y elimínala
    $reserva = Reserva::findOrFail($id);
    $reserva->delete();

    // Redirige a la página de reservas con un mensaje de éxito
    return redirect()->route('reservas.index')->with('success', 'Reserva eliminada correctamente.');
  }
}
