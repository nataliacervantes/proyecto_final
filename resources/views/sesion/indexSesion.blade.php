@extends('layout.template')

@section('content')
    <div class="container">
        <br><br><br>
        <div class="row">
        <a href="{{ url('crearSesion')}}" class="btn btn-warning" style="margin-left: 800px">Crear Sesion</a>
        <br><br><br><br><br><br>
            <table class="table table-bordered" style="margin-top: 30px">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Planeación</th>
                        <th>Sugerencias</th>
                        <th>Material</th>
                        <th>Hora</th>
                        <th>Aula</th>
                        <th>Profesor</th>
                        <th>Carrera</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sesiones as $sesion )
                        <tr>
                            <td>{{$sesion->fecha}}</td>
                            <td>{{$sesion->planeacion}}</td>
                            <td>{{$sesion->sugerencias}}</td>
                            <td>{{$sesion->material}}</td>
                            <td>{{$sesion->hora}}</td>
                            <td>{{$sesion->aula}}</td>
                            <td>{{$sesion->profesores->nombre}}</td>
                            <td>{{$sesion->carreras->nombre}}</td>
                            <td><button class="btn btn-info" id="editButton" data-toggle="modal" data-target="#exampleModal" data-whatever="{{$sesion->id}}" >Editar</button></td>
                            <td><a href="{{ url('eliminarSesion/'.$sesion->id) }}" class="btn btn-danger">Eliminar</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edita la Clase</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {!! Form::open(['url'=>'actualizarSesion']) !!}
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
      </div>
      <div class="modal-footer">
            <input type="hidden" name="id" id="id">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        {!! Form::submit('Guardar', ['class'=>'btn btn-warning']) !!}
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection
@section('scripts')
    <script>
        $('#exampleModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) 
           
            var value = button.data('whatever') 
            
            $.get('{{url("getDataSesion")}}/'+value, function(returnData){
                $('#Fecha').val(returnData.fecha);
                $('#Planeacion').val(returnData.planeacion);
                $('#Sugerencias').val(returnData.sugerencias);
                $('#Material').val(returnData.material);
                $('#Hora').val(returnData.hora);
                $('#Aula').val(returnData.aula);
                $('#Profesor').val(returnData.id_profesor);
                $('#Carrera').val(returnData.id_carrera);
                $('#id').val(returnData.id)
            })
        })
    </script>
@endsection