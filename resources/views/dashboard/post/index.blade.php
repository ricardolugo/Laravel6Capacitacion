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
                    <td>
                        <a class="btn btn-primary" href="{{ route('post.show', $post->id) }}">Ver</a>
                        <a class="btn btn-warning" href="{{ route('post.edit', $post->id) }}">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


    {{ $posts->links() }}
</div>



@endsection

