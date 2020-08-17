<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profesor;
class ProfesorController extends Controller
{
    
    public function indexProfesor(){ 
        $profesores = Profesor::all();
        return view('profesor.indexProfesor',compact('profesores'));
    }

    
    public function crearProfesor(){
        return view('profesor.formProfesor');
    }

   
    public function guardarProfesor(Request $request){
        $profesor = new Profesor();

        $profesor->nombre = $request->Nombre;
        $profesor->ap = $request->AP;
        $profesor->am = $request->AM;
        $profesor->email = $request->Email;
        $profesor->titulo = $request->Titulo;
        $profesor->save();

        return redirect('indexProfesor');
    }

    
    public function getDataProfesor($codigo){
        $data = Profesor::where('codigo',$codigo)->first();
        // dd($data);
        return $data;
    }
    
   
    public function actualizarProfesor(Request $request){
        $profesor = Profesor::where('codigo',$request->id)->first();
        
        $profesor->nombre = $request->Nombre;
        $profesor->ap = $request->AP;
        $profesor->am = $request->AM;
        $profesor->email = $request->Email;
        $profesor->titulo = $request->Titulo;
        // dd($profesor);
        $profesor->save();

        return back();
    }

   
    public function eliminarProfesor($id){
        $data = Profesor::find($id);
        $data->delete();
        return back();
    }
}
