<?php

namespace App\Http\Controllers;
use App\Sesion;
use App\Profesor;
use App\Carrera;
use Illuminate\Http\Request;

class SesionController extends Controller
{
  
    public function indexSesion(){ 
        $sesiones = Sesion::all();
        $carreras= Carrera::all();
        $profesores = Profesor::all();
        
        return view('sesion.indexSesion',compact('sesiones','profesores','carreras'));
    }

    public function crearSesion(){
        $profesores = Profesor::all();
        $carreras= Carrera::all();
        return view('sesion.formSesion', compact('profesores','carreras'));
    }

    public function guardarSesion(Request $request){
        $sesion = new Sesion();
        // dd($request->all());
        $sesion->fecha = $request->Fecha;
        $sesion->planeacion = $request->Planeacion;
        $sesion->sugerencias = $request->Sugerencias;
        $sesion->material = $request->Material;
        $sesion->aula = $request->Aula;
        $sesion->hora = $request->Hora;
        $sesion->id_carrera = $request->Carrera;
        $sesion->id_profesor = $request->Profesor;
        $sesion->save();

        return redirect('indexSesion');
    }

    public function getDataSesion($id){
        $data = Sesion::find($id);
        // dd($data);
        return $data;
    }
    
    public function actualizarSesion(Request $request){
        $sesion = Sesion::find($request->id);
        
        $sesion->fecha = $request->Fecha;
        $sesion->planeacion = $request->Planeacion;
        $sesion->sugerencias = $request->Sugerencias;
        $sesion->material = $request->Material;
        $sesion->aula = $request->Aula;
        $sesion->hora = $request->Hora;
        $sesion->id_carrera = $request->Carrera;
        $sesion->id_profesor = $request->Profesor;
        $sesion->save();

        return back();
    }

    public function eliminarSesion($id){
        $data = Sesion::find($id);
        $data->delete();
        return back();
    }

    public function tutoriales(){
        return view('tutoriales.index');
    }
}
