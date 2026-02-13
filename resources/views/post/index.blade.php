<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Romabeli | Menú</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body{
            margin:0;
            font-family:'Segoe UI', sans-serif;
            background:#111;
            color:white;
        }

        .container{
            max-width:1100px;
            margin:auto;
            padding:60px 20px;
        }

        h1{
            text-align:center;
            font-size:50px;
            color:#d2b48c;
            margin-bottom:40px;
            letter-spacing:3px;
        }

        .btn-crear{
            display:inline-block;
            margin-bottom:40px;
            padding:12px 25px;
            background:#d2b48c;
            color:#111;
            text-decoration:none;
            font-weight:bold;
            border-radius:30px;
            transition:0.3s ease;
        }

        .btn-crear:hover{
            background:white;
            transform:scale(1.05);
        }

        .menu-grid{
            display:grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap:25px;
        }

        .card{
            background:#1c1c1c;
            padding:25px;
            border-radius:20px;
            transition:0.3s ease;
            border:1px solid #2a2a2a;
        }

        .card:hover{
            transform:translateY(-8px);
            border:1px solid #d2b48c;
            box-shadow:0 10px 25px rgba(0,0,0,0.6);
        }

        .card a{
            text-decoration:none;
            color:white;
            font-size:20px;
            font-weight:bold;
            display:block;
        }

        .card a:hover{
            color:#d2b48c;
        }

        .empty{
            text-align:center;
            color:#aaa;
            margin-top:40px;
        }

        footer{
            margin-top:60px;
            padding:20px;
            text-align:center;
            background:#000;
            color:#aaa;
        }

        @media(max-width:768px){
            h1{
                font-size:35px;
            }
        }

    </style>
</head>
<body>

<div class="container">

    <h1>MENÚ</h1>

    <a href="/posts/create" class="btn-crear">
        + Crear nuevo platillo
    </a>

    @csrf

    @if($posts->count())
        <div class="menu-grid">
            @foreach ($posts as $item)
                <div class="card">
                    <a href="/posts/{{ $item->id }}">
                        {{ $item->nombre_plato }}
                    </a>
                </div>
            @endforeach
        </div>
    @else
        <p class="empty">Aún no hay platillos registrados.</p>
    @endif

</div>

<footer>
    © {{ date('Y') }} Restaurante Romabeli
</footer>

</body>
</html>
