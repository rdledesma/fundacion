@extends('layouts.app')

@section('content')
<div class="container">


        @csrf
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <input disabled value="{{$course->title}}" type="text" placeholder="Titulo" required name="title" class="form-control">
                </div>

                <div class="form-group">
                    <img src="/images/{{$course->image}}" alt="" class="img-fluid">
                </div>

                <div class="form-group">
                    <textarea name="description" disabled id="" cols="30" rows="10" class="form-control">{{$course->description}}</textarea>
                </div>

                <a href="{{route('course.index')}}" class="btn btn-primary">Volver</a>
            </div>
        </div>

</div>
@endsection
