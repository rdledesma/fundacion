@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Cursos</h3>
    <a href="{{route('course.create')}}" class="btn btn-primary">Nuevo</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Titulo</th>
            <th scope="col">Acción</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($magazines as $item)
          <tr>
            <td>{{$item->title}}</td>


                <td>
                    <form action="{{route('course.destroy', $item->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{route('course.show', $item->id)}}" class="btn btn-info">Ver</a>
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>

          </tr>
          @endforeach

        </tbody>
      </table>


</div>
@endsection
