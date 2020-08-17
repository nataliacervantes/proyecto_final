@extends('layout.template')

@section('content')
 <div class="container">
     <br><br><br>
     <div class="row">
         <div class="col-md-4">
             {!! Form::open(['url'=>'guardarSesion']) !!}
                <div class="form-group">
                    {!! Form::label('Fecha', 'Nombre de la sesión') !!}
                    {!! Form::date('Fecha', '', ['class'=>'form-control','value'=>'YY-mm-dd']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Planeacion', 'Planeacion') !!}
                    {!! Form::text('Planeacion', '', ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Sugerencias', 'Sugerencias') !!}
                    {!! Form::text('Sugerencias', '', ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Material', 'Material') !!}
                    {!! Form::text('Material', '', ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Hora', 'Hora') !!}
                    {!! Form::text('Hora', '', ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Aula', 'Aula') !!}
                    {!! Form::text('Aula', '', ['class'=>'form-control']) !!}
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