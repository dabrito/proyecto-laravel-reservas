<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Obtener las últimas 3 reservas
        $query = Reserva::query();

        // Si hay un término de búsqueda, filtrar las reservas
        if ($request->has('search')) {
            $query->where('nombre', 'like', '%' . $request->search . '%')
                ->orWhere('mesa_id', 'like', '%' . $request->search . '%');
        }

        $reservas = $query->latest()->take(3)->get();

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
        return view('reservas.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validación de los datos del formulario
        $request->validate([
            'mesa_id' => 'required|exists:mesas,id', // Verifica que la mesa exista
            'fecha_reserva' => 'required|date',
            'hora_reserva' => 'required|date_format:H:i',
            'numero_personas' => 'required|integer|min:1',
            'estado' => 'nullable|string|max:255',
        ]);

        // Obtener el ID del usuario autenticado
        $usuarioId = auth()->id();
        if (!$usuarioId) {
            return back()->withErrors(['error' => 'El usuario no está autenticado.']);
        }

        // Crear nueva reserva y guardar en la base de datos
        $reserva = new Reserva([
            'usuario_id' => $usuarioId,
            'mesa_id' => $request->input('mesa_id'),
            'nombre' => $request->input('nombre'), // Asegúrate de que este campo esté presente
            'fecha_reserva' => $request->input('fecha_reserva'),
            'hora_reserva' => $request->input('hora_reserva'),
            'numero_personas' => $request->input('numero_personas'),
            'estado' => $request->input('estado'),
        ]);

        // Guardar la reserva
        try {
            $reserva->save();
            return redirect()->route('reservas.index')->with('success', 'Reserva creada exitosamente.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Error al guardar la reserva: ' . $e->getMessage()]);
        }
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
            'usuario_id' => 'required|integer',
            'mesa_id' => 'required|integer',
            'fecha_reserva' => 'required|date',
            'hora_reserva' => 'required',
            'numero_personas' => 'required|integer',
        ]);

        // Actualiza la reserva
        $reserva->update($request->all());
        
        // Redirige a la página de índice con un mensaje de éxito
        return redirect()->route('reservas.index')->with('success', 'Reserva actualizada correctamente.');
    }

    

    /**
     * Remove the specified resource from storage.
     */
   public function destroy(Reserva $reserva)
{
    try {
        // Elimina la reserva
        $reserva->delete();

        // Redirige con mensaje de éxito
        return redirect()->route('reservas.index')->with('success', 'Reserva eliminada satisfactoriamente.');
    } catch (\Exception $e) {
        // Si algo sale mal, captura el error y muestra un mensaje
        return redirect()->route('reservas.index')->with('error', 'Error al eliminar la reserva: ' . $e->getMessage());
    }
}

    


}
