@extends('layout.template')

@section('content')
    <div class="container">
        <br><br><br>
        <div class="row">
        <a href="{{ url('crearMateria')}}" class="btn btn-warning" style="margin-left: 800px">Crear Materia</a>
        <br><br><br><br><br><br>
            <table class="table table-bordered" style="margin-top: 30px">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Clave</th>
                        <th>Semestre</th>
                        <th>Profesor</th>
                        <th>Carrera</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($materias as $materia )
                        <tr>
                            <td>{{$materia->Nombre}}</td>
                            <td>{{$materia->Clave}}</td>
                            <td>{{$materia->Semestre}}</td>
                            <td>{{$materia->profesores->nombre}}</td>
                            <td>{{$materia->carreras->nombre}}</td>
                            <td><button class="btn btn-info" id="editButton" data-toggle="modal" data-target="#exampleModal" data-whatever="{{$materia->CRN}}" >Editar</button></td>
                            <td><a href="{{ url('eliminarMateria/'.$materia->CRN) }}" class="btn btn-danger">Eliminar</a></td>
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
        {!! Form::open(['url'=>'actualizarMateria']) !!}
        <div class="form-group">
            {!! Form::label('Materia', 'Nombre de la materia') !!}
            {!! Form::text('Materia', '', ['class'=>'form-control','id'=>'Materia']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Clave', 'Clave de la materia') !!}
            {!! Form::text('Clave', '', ['class'=>'form-control','id'=>'Clave']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Semestre', 'Elige el Semestre') !!}
            {!! Form::select('Semestre', $semestre,'', ['class'=>'form-control','id'=>'Semestre']) !!}
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
            // alert(value)
            var value = button.data('whatever') 
            // alert(value)
            $.get('{{url("getDataMateria")}}/'+value, function(returnData){
                // alert(returnData)
                $('#Materia').val(returnData.Nombre);
                $('#Clave').val(returnData.Clave);
                $('#Semestre').val(returnData.Semestre);
                $('#Profesor').val(returnData.id_profesor);
                $('#Carrera').val(returnData.id_carrera);
                $('#id').val(value);
            })

        })
    </script>
@endsection