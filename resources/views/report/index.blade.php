@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Noticias</h3>
    <a href="{{route('report.create')}}" class="btn btn-primary">Nueva</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Titulo</th>
            <th scope="col">Acción</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($reports as $item)
          <tr>
            <td>{{$item->title}}</td>


                <td>
                    <form action="{{route('report.destroy', $item->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{route('report.show', $item->id)}}" class="btn btn-info">Ver</a>
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>

          </tr>
          @endforeach

        </tbody>
      </table>


</div>
@endsection
