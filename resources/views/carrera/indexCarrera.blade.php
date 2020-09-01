@extends('layout.template')

@section('content')
    <div class="container">
        <br><br><br>
        <div class="row">
        <a href="{{ url('crearCarrera')}}" class="btn btn-warning" style="margin-left: 800px">Crear Carrera</a>
        <br><br><br><br><br><br>
            <table class="table table-bordered" style="margin-top: 30px">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($carreras as $carrera )
                        <tr>
                            <td>{{$carrera->nombre}}</td>
                            <td><button class="btn btn-info" id="editButton" data-toggle="modal" data-target="#exampleModal" data-whatever="{{$carrera->id}}" >Editar</button></td>
                            <td><a href="{{ url('eliminarCarrera/'.$carrera->id) }}" class="btn btn-danger">Eliminar</a></td>
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
        <h5 class="modal-title" id="exampleModalLabel">Edita la Materia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {!! Form::open(['url'=>'actualizarCarrera']) !!}
        <div class="form-group">
            {!! Form::label('Carrera', 'Nombre de la Carrera') !!}
            {!! Form::text('Carrera', '', ['class'=>'form-control']) !!}
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
            // alert(value)
            var value = button.data('whatever') 

            $.get('{{url("getDataCarrera")}}/'+value, function(returnData){
                // alert(returnData)
                $('#Carrera').val(returnData.nombre);
                $('#id').val(value);
            })

        })
    </script>
@endsection