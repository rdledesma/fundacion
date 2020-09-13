@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Nueva Noticia</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <input type="text" placeholder="Titulo" required name="title" class="form-control">
                </div>

                <div class="form-group">
                    <input type="file" placeholder="Imagen" required name="image" class="form-control">
                </div>

                <div class="form-group">
                    <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>
</div>
@endsection
