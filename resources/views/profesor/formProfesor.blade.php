@extends('layout.template')

@section('content')
 <div class="container">
     <br><br><br>
     <div class="row">
         <div class="col-md-4">
             {!! Form::open(['url'=>'guardarProfesor']) !!}
                <div class="form-group">
                    {!! Form::label('Nombre', 'Nombre del profesor') !!}
                    {!! Form::text('Nombre', '', ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('AP', 'A. Paterno') !!}
                    {!! Form::text('AP', '', ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('AM', 'A. Materno') !!}
                    {!! Form::text('AM', '', ['class'=>'form-control']) !!}
                   
                </div>
                <div class="form-group">
                    {!! Form::label('Email', 'Email') !!}
                    {!! Form::text('Email', '', ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Titulo', 'Título del profesor') !!}
                    {!! Form::text('Titulo', '', ['class'=>'form-control']) !!}
                </div>
                {!! Form::submit('Guardar', ['class'=>'btn btn-warning']) !!}
            {!! Form::close() !!}
         </div>
     </div>
 </div>
@endsection