<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    public function index()
    {
        if (request()->has('empty')) {
            $amigos = [];
        } else {
            $amigos = Persona::all();
        }
        
        $title = 'Listado de Amigos';
        return view('persona.index-persona', compact('title', 'amigos'));
    }

    public function create()
    {
        return view('persona.new-persona');
    }

    public function store()
    {
        $data = request()->validate([
            'per_cod' => ['required', 'unique:persona'],
            'per_nom' => 'required',
            'per_appm' => 'required',
            'per_prof' => 'required',
            'per_telf' => 'required',
            'per_cel' => ['required', 'unique:persona'],
            'per_email' => ['required', 'unique:persona'],
            'per_dir' => '',
            'per_fnac' => 'required',
            'per_lnac' => 'required',
        ], [
            'per_cod.required' => 'El campo CI es obligatorio',
            'per_nom.required' => 'El campo Nombre es obligatorio',
            'per_appm.required' => 'El campo Apellidos es obligatorio',
            'per_telf.required' => 'El campo Telefono es obligatorio',
            'per_fnac.required' => 'El campo Fecha de Nacimiento es obligatorio',
        ]);

        Persona::create($data);
        return back();
    }

    public function edit(Persona $amigo)
    {       
        return view('persona.edit-persona', ['amigo' => $amigo]);
    }

    public function update(Persona $amigo)
    {
        $data = request()->validate([
            'per_nom' => 'required',
            'per_appm' => 'required',
            'per_prof' => 'required',
            'per_telf' => 'required',
            'per_dir' => '',
            'per_fnac' => 'required',
            'per_lnac' => 'required',
        ], [
            'per_nom.required' => 'El campo Nombre es obligatorio',
            'per_appm.required' => 'El campo Apellidos es obligatorio',
            'per_telf.required' => 'El campo Telefono es obligatorio',
            'per_fnac.required' => 'El campo Fecha de Nacimiento es obligatorio',
        ]);

        $amigo->update($data);
        return back();
    }

    public function delete($id)
    {
        $amigo = Persona::findOrFail($id); 
        $amigo->delete(); 
        return redirect()->route('persona.index')->with('success', 'Amigo eliminado correctamente.');
    }

}
