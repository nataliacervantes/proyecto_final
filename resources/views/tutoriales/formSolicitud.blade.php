@extends('layout.template')

@section('content')
 <div class="container">
     <br><br><br>
     <div class="row">
         <div class="col-md-4">
             {!! Form::open(['url'=>'guardarSolicitud']) !!}
                <div class="form-group">
                    {!! Form::label('Fecha', 'Día a suplir') !!}
                    {!! Form::date('Fecha', '', ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('idClase', 'Elige la clase a suplir') !!}
                    {!! Form::select('idClase', $clase,'', ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Salon', 'Elige el salón de la clase') !!}
                    {!! Form::text('Salon', '', ['class'=>'form-control']) !!}
                </div>
                {!! Form::submit('Guardar', ['class'=>'btn btn-warning']) !!}
            {!! Form::close() !!}
         </div>
     </div>
 </div>
@endsection
