@extends('layout.template')

@section('content')
    <div class="container">
        <br><br><br>
        <div class="row">
        <a href="{{ url('crearProfesor')}}" class="btn btn-warning" style="margin-left: 800px">Crear Profesor</a>
        <br><br><br><br><br><br>
            <table class="table table-bordered" style="margin-top: 30px">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>A. Materno</th>
                        <th>A. Paterno</th>
                        <th>Email</th>
                        <th>Título</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($profesores as $profesor )
                        <tr>
                            <td>{{$profesor->codigo}}</td>
                            <td>{{$profesor->nombre}}</td>
                            <td>{{$profesor->am}}</td>
                            <td>{{$profesor->ap}}</td>
                            <td>{{$profesor->email}}</td>
                            <td>{{$profesor->titulo}}</td>
                        <td><button class="btn btn-info" id="editButton" data-toggle="modal" data-target="#exampleModal" data-whatever="{{$profesor->codigo}}" >Editar</button></td>
                            <td><a href="{{ url('eliminarProfesor/'.$profesor->codigo) }}" class="btn btn-danger">Eliminar</a></td>
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
        {!! Form::open(['url'=>'actualizarProfesor']) !!}
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
            
            $.get('{{url("getDataProfesor")}}/'+value, function(returnData){
                // alert(returnData.titulo)
                $('#Codigo').val(returnData.codigo);
                $('#Nombre').val(returnData.nombre);
                $('#AM').val(returnData.am);
                $('#AP').val(returnData.ap);
                $('#Email').val(returnData.email);
                $('#Titulo').val(returnData.titulo);
                $('#id').val(returnData.codigo);
            })
        })
    </script>
@endsection