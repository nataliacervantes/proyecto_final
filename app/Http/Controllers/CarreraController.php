<?php

namespace App\Http\Controllers;
use App\Carrera;
use Illuminate\Http\Request;

class CarreraController extends Controller
{
    
    public function indexCarrera(){ 
        $carreras = Carrera::all();

        return view('carrera.indexCarrera', compact('carreras'));
    }

    
    public function crearCarrera(){
        return view('carrera.formCarrera');
    }

   
    public function guardarCarrera(Request $request){
        $carrera = new Carrera();

        $carrera->nombre = $request->Carrera;
        $carrera->save();

        return redirect('indexCarrera');
    }

  
    public function getDataCarrera($id){
        $data = Carrera::find($id);

        return $data;
    }
    
 
    public function actualizarCarrera(Request $request){
        $carrera = Carrera::find($request->id);
        
        $carrera->Nombre = $request->Carrera;
        $carrera->save();

        return back();
    }

   
    public function eliminarCarrera($id){
        $data = Carrera::find($id);
        $data->delete();
        return back();
    }
}
