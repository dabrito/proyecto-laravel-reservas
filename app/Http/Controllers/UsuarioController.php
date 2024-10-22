<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = DB::table('usuarios')->get();
        return view('usuarios.index', ['usuarios' => $usuarios]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuarios.new');//carga la vista de crear usuario
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Usuario::create($request->all()); //creando modelo de usuario
        return redirect('inicio')->with('success', 'Usuario creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        //
    }

    public function login(Request $request)
    {
        // Validar los datos de entrada
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        // Intentar autenticar al usuario
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            if ($user->rol === 'cliente') 
            {
                return redirect()->route('reservas.indexClientes');
            }
            else if($user->rol === 'host')
            {
                return redirect()->route('reservas.index');
            }
        } else {
            // Autenticación fallida
            return redirect()->back()->with('error', 'Credenciales incorrectas.')->withInput();
        }
    }

    public function sesion()
    { 
        return view('usuarios.login');//carga la vista de iniciar sesion
    }

    public function volver()
    {
        return view('inicio');
    }

    public function crearCliente()
    {
        return view('usuarios.newCliente');
    }

    public function storeCliente(Request $request)
    {
      $request->validate([
        'nombre' => 'required|string|max:255',
        'email' => 'required|email|unique:usuarios',
        'password' => 'required|min:6',
        // otros campos según sea necesario
    ]);

    Usuario::create($request->all());
        return redirect()->route('usuarios.verClientes')->with('success', 'Usuario cliente creado satisfactoriamente');
    }

    public function verClientes()
    {
        $usuarios = DB::table('usuarios')
                      ->where('rol', 'cliente')
                      ->get();
        return view('usuarios.clientesTable', ['usuarios' => $usuarios]);
    }


}
