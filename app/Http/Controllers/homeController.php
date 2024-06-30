<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        return view('index');
    }

    /* función estatica para cargar el formulario
    
    public function store(){
        return view('store');
    }
        
    funcion estatica para almacenar los datos del formulario
    
    public funtion store(Request $request){
        $estudiante = new Estudiante();
        $estudiante->nombre = $request->input('nombre');
        $estudiante->apellido = $request->input('apellido');
        $estudainte->cedula = $request->input('cedula');

        $estudiante->save();
        return redirect()->
    }
    
    funcion estatica para llamar la vista de edicion de datos

    public function edit($id){
        $estudiante = Estudiante::find($id);
        return view('estudiantes.edit', compact('estudiante'));
    }

    funcion estatica para actualizar los datos del formulario

    public function update(Request $request, $id){
        $estudiante = Estudiante::find($id);
        $estudiante->nombre = $request->input('nombre');
        $estudiante->apellido = $request->input('apellido');
        $estudiante->cedula = $request->input('cedula');
        
        $estudiante->save();
        return redirect()->route('estudiantes.index');
    }

    funcion estatica para eliminar los datos del formulario

    public function destroy($id){
        $estudiante = Estudiante::find($id);
        $estudiante->delete();
        return redirect()->route('estudiantes.index');
    }
    */
}
