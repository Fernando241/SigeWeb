<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class estudianteController extends Controller
{
    //función estática para llamar a la vista
    public static function datosEstudiante(){
        $estudiantes = Estudiante::orderBy('idEstudiante','DESC')->paginate(20);
        return view('estudiantes.datosEstudiante', compact('estudiantes'));
    }

    //función estatica para cargar el formulario
    public static function create(){
        return view('estudiantes.create');
    }

    //función estatica para guardar los datos del formulario
    public static function store(Request $request){
        $estudiante = new Estudiante();
        $estudiante->documento = $request->input('documento');
        $estudiante->nombres = $request->input('nombres');
        $estudiante->apellidos = $request->input('apellidos');
        $estudiante->telefono = $request->input('telefono');
        $estudiante->direccion = $request->input('direccion');
        $estudiante->acudiente = $request->input('acudiente');
        $estudiante->save();
        return redirect()->route('estudiantes.datosEstudiante');
    }

    //función estatica para editar los datos del formulario
    public function edit($idEstudiante){
        $estudiante = Estudiante::find($idEstudiante);
        return view('estudiantes.edit', compact('estudiante'));
    }

    //función estatica para actualizar los datos del formulario
    public function update(Request $request, $idEstudiante){
        $estudiante = Estudiante::find($idEstudiante);
        $estudiante->documento = $request->input('documento');
        $estudiante->nombres = $request->input('nombres');
        $estudiante->apellidos = $request->input('apellidos');
        $estudiante->telefono = $request->input('telefono');
        $estudiante->direccion = $request->input('direccion');
        $estudiante->acudiente = $request->input('acudiente');
        $estudiante->save();
        return redirect()->route('estudiantes.datosEstudiante');
    }

    //función estatica para eliminar los datos del formulario
    public function destroy($idEstudiante){
        $estudiante = Estudiante::find($idEstudiante);
        if ($estudiante) {
            $estudiante->delete();
        }
        return redirect()->route('estudiantes.datosEstudiante');
    }

    //función estatica para ver los datos de un registro por id
    public function show($idEstudiante){
        $estudiante = Estudiante::find($idEstudiante);
        return view('estudiantes.show', compact('estudiante'));
    }

}
