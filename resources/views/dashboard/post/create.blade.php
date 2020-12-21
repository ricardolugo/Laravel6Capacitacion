@extends('dashboard.master')

@section('content')

@include('dashboard.partials.validation-error')

    <form action="{{ route("post.store")}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Titulo</label>
            <input class="form-control" type="text" name="title" id="title">
            
            @error('title')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="url_clean">Url limpia</label>
            <input class="form-control" type="text" name="url_clean" id="url_clean">
        </div>
        <div class="form-group">
            <label for="content">Contenido</label>
            <textarea class="form-control" type="text" name="content" id="content" rows="3"></textarea>
        </div>
        <input type="submit" value="Enviar" class="btn btn-primary">
    </form>

@endsection