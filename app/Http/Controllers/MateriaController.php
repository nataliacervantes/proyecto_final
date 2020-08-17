<?php

namespace App\Http\Controllers;
use App\Materia;
use App\Profesor;
use App\Carrera;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    
    public function indexMateria(){ 
        $semestre = Materia::$Semestre;
        $materias = Materia::all();
        $profesores = Profesor::all();
        $carreras= Carrera::all();
      
        return view('materia.indexMateria', compact('materias','semestre','profesores','carreras'));
    }

   
    public function crearMateria(){
        $semestre = Materia::$Semestre;
        $profesores = Profesor::all();
        $carreras= Carrera::all();
        return view('materia.formMateria', compact('semestre','profesores','carreras'));
    }

   
    public function guardarMateria(Request $request){
        $materia = new Materia();
        
        $materia->Nombre = $request->Materia;
        $materia->Clave = $request->Clave;
        $materia->Semestre = $request->Semestre;
        $materia->id_profesor = $request->Profesor;
        $materia->id_carrera = $request->Carrera;
        $materia->save();

        return redirect('indexMateria');
    }

   
    public function getDataMateria($id){
        $data = Materia::where('CRN',$id)->first();
        // dd($data);
        return $data;
    }
    
   
    public function actualizarMateria(Request $request){
        $materia = Materia::where('CRN',$request->id)->first();
        // dd($request->all());
        $materia->Nombre = $request->Materia;
        $materia->Clave = $request->Clave;
        $materia->Semestre = $request->Semestre;
        $materia->id_profesor = $request->Profesor;
        $materia->id_carrera = $request->Carrera;
        $materia->save();
       
        return back();
    }

   
    public function eliminarMateria($id){
        $data = Materia::find($id);
        $data->delete();
        return back();
    }
}
