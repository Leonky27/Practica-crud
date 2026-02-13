<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Romabeli | {{ $post->nombre_plato }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body{
            margin:0;
            font-family:'Segoe UI', sans-serif;
            background:#111;
            color:white;
            display:flex;
            justify-content:center;
            align-items:center;
            min-height:100vh;
        }

        .card{
            background:#1c1c1c;
            padding:50px;
            border-radius:25px;
            width:100%;
            max-width:600px;
            box-shadow:0 15px 40px rgba(0,0,0,0.6);
            border:1px solid #2a2a2a;
        }

        .back-link{
            text-decoration:none;
            color:#aaa;
            display:inline-block;
            margin-bottom:20px;
            transition:0.3s ease;
        }

        .back-link:hover{
            color:#d2b48c;
        }

        h1{
            color:#d2b48c;
            margin-bottom:20px;
            font-size:35px;
            letter-spacing:1px;
        }

        .precio{
            font-size:22px;
            margin-bottom:15px;
        }

        .descripcion{
            color:#ccc;
            line-height:1.6;
            margin-bottom:30px;
        }

        .btn-group{
            display:flex;
            gap:15px;
            flex-wrap:wrap;
        }

        .btn{
            flex:1;
            padding:12px;
            border:none;
            border-radius:30px;
            font-weight:bold;
            cursor:pointer;
            transition:0.3s ease;
            font-size:14px;
        }

        .btn-edit{
            background:#d2b48c;
            color:#111;
        }

        .btn-edit:hover{
            background:white;
            transform:scale(1.05);
        }

        .btn-delete{
            background:#8b0000;
            color:white;
        }

        .btn-delete:hover{
            background:#b22222;
            transform:scale(1.05);
        }

        @media(max-width:600px){
            .card{
                padding:30px;
            }
        }

    </style>
</head>
<body>

<div class="card">

    <a href="/posts" class="back-link">← Volver al menú</a>

    <h1>{{ $post->nombre_plato }}</h1>

    <p class="precio">
        <b>Precio:</b> ${{ number_format($post->precio, 0, ',', '.') }}
    </p>

    <p class="descripcion">
        <b>Descripción:</b><br>
        {{ $post->descripcion }}
    </p>

    <div class="btn-group">

        <a href="/posts/{{ $post->id }}/edit" style="flex:1;">
            <button type="button" class="btn btn-edit">
                Editar Platillo
            </button>
        </a>

        <form action="/posts/{{ $post->id }}" method="POST" style="flex:1;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-delete">
                Eliminar Platillo
            </button>
        </form>

    </div>

</div>

</body>
</html>
