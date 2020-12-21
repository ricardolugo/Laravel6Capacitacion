@extends('dashboard.master')

@section('content')

<div class="row py-1" >
    <a class="btn btn-success" href="{{route('post.create')}}" >Crear</a>
</div>
<div class="row">
    <table class="table ">
        <thead>
            <tr>
                <td>Id</td>
                <td>Titulo</td>
                <td>Posteado</td>
                <td>Creacion</td>
                <td>Actualizacion</td>
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->posted}}</td>
                    <td>{{$post->created_at->format('d-M-Y')}}</td>
                    <td>{{$post->updated_at->format('d-M-Y')}}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>



@endsection

