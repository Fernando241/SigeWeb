<?php

use App\Http\Controllers\estudianteController;
use App\Http\Controllers\galeriaController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\nivelesController;
use App\Http\Controllers\nosotrosController;
use App\Http\Controllers\noticiasController;
use App\Http\Controllers\registroController;
use App\Http\Controllers\solicitudController;
use Illuminate\Support\Facades\Route;


Route::get('/', [homeController::class, 'index']);

Route::get('/noticias', [noticiasController::class, 'noticias']);

Route::get('/nosotros', [nosotrosController::class, 'nosotros']);

Route::get('/galeria', [galeriaController::class, 'galeria']);

Route::get('/niveles', [nivelesController::class, 'niveles']);

Route::get('/login', [loginController::class, 'login']);

Route::get('/solicitud', [solicitudController::class, 'solicitud']);

Route::get('/registro', [registroController::class, 'registro']);

//crear la ruta para llamar los datos

Route::get('/estudiantes', [estudianteController::class, 'datosEstudiante'])->name('estudiantes.datosEstudiante');


//  ---crear la ruta que permita llamar la funcion create

Route::get('estudiantes/create', [EstudianteController::class, 'create'])->name('estudiantes.create');


//---crear la ruta que permita almacenar los datos en la base de datos

Route::post('estudiantes',[Estudiantecontroller::class, 'store'])->name('estudiantes.store');


//---crear la ruta para llamar el formulario lleno con datos a editar

Route::get('estudiantes/{estudiante}/edit',[EstudianteController::class, 'edit'])->name('estudiantes.edit');

//---crear la ruta que permita actualizar los datos en la base de datos

Route::put('estudiantes/{estudiante}',[EstudianteController::class, 'update'])->name('estudiantes.update');

//---crear la ruta que permita eliminar los datos en la base de datos

Route::delete('/estudiantes/{estudiante}',[EstudianteController::class, 'destroy'])->name('estudiantes.destroy');

//---crear la ruta para mostrar todos los datos de un registro 

Route::get('estudiantes/{estudiante}',[EstudianteController::class,'show'])->name('estudiantes.show');


/*para crear todas las carpetas necesarias 

    php artisan make:model nombreTabla -a   
    
    //esto crea todo lo necesario
    - Controller
    - Model
    - Migrations
    - Routes
    - Request
    - Tests
    - Views
    - Factories
    - Seeders
    - politicas


*/