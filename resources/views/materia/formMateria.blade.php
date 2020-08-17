@extends('layout.template')

@section('content')
 <div class="container">
     <br><br><br>
     <div class="row">
         <div class="col-md-4">
             {!! Form::open(['url'=>'guardarMateria']) !!}
                <div class="form-group">
                    {!! Form::label('Materia', 'Nombre de la materia') !!}
                    {!! Form::text('Materia', '', ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Clave', 'Clave de la materia') !!}
                    {!! Form::text('Clave', '', ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Semestre', 'Elige el Semestre') !!}
                    {!! Form::select('Semestre', $semestre,'', ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Profesor', 'Elige el Profesor') !!}
                    <select name="Profesor" class="form-control">
                        @foreach ($profesores as $profesor)
                            <option value="{{$profesor->codigo}}">{{$profesor->nombre}}</option> 
                        @endforeach 
                    </select> 
                </div>
                <div class="form-group">
                    {!! Form::label('Carrera', 'Elige la Carrera') !!}
                    <select name="Carrera" class="form-control">
                        @foreach ($carreras as $carrera)
                            <option value="{{$carrera->id}}">{{$carrera->nombre}}</option> 
                        @endforeach
                    </select>   
                </div>
                {!! Form::submit('Guardar', ['class'=>'btn btn-warning']) !!}
            {!! Form::close() !!}
         </div>
     </div>
 </div>
@endsection