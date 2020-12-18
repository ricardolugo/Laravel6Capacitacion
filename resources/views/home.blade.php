<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi primera vista</title>
</head>
<body>
    <h1>Hola mundo Laravel -  {!!"Hola mundo $nombre $apellido"!!}</h1>

    <ul>


        @isset($posts3)
          Isset
        @endisset

        @empty($posts3)
          Empty    
        @endempty
        @forelse ($posts as $post)

        <?php //dd($loop) ?>

        <li>
            @if ($loop->first)
            Primero:
            
            @elseif ($loop->last)
            Ultimo:

            @else 
            Medio:
            @endif
            

            {{ $post }}

        </li>
        @empty
        <li>Vacio</li>    
        
        @endforelse
    </ul>

</body>
</html>