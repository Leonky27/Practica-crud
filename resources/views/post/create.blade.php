<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Romabeli | Nuevo Platillo</title>
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

        .form-container{
            background:#1c1c1c;
            padding:50px;
            border-radius:25px;
            width:100%;
            max-width:500px;
            box-shadow:0 15px 40px rgba(0,0,0,0.6);
            border:1px solid #2a2a2a;
        }

        h1{
            text-align:center;
            color:#d2b48c;
            margin-bottom:40px;
            letter-spacing:2px;
        }

        label{
            display:block;
            margin-bottom:20px;
            font-weight:bold;
            color:#ccc;
        }

        input{
            width:100%;
            padding:12px;
            margin-top:8px;
            border-radius:12px;
            border:1px solid #333;
            background:#111;
            color:white;
            font-size:16px;
            transition:0.3s ease;
        }

        input:focus{
            outline:none;
            border:1px solid #d2b48c;
            box-shadow:0 0 8px rgba(210,180,140,0.5);
        }

        .btn-submit{
            width:100%;
            padding:15px;
            margin-top:20px;
            border:none;
            border-radius:30px;
            background:#d2b48c;
            color:#111;
            font-weight:bold;
            font-size:16px;
            cursor:pointer;
            transition:0.3s ease;
        }

        .btn-submit:hover{
            background:white;
            transform:scale(1.03);
        }

        .btn-back{
            display:block;
            text-align:center;
            margin-top:20px;
            text-decoration:none;
            color:#aaa;
            transition:0.3s ease;
        }

        .btn-back:hover{
            color:#d2b48c;
        }

        @media(max-width:600px){
            .form-container{
                padding:30px;
            }
        }

    </style>
</head>
<body>

<div class="form-container">

    <h1>Nuevo Platillo</h1>

    <form action="/posts" method="POST">

        @csrf
        
        <label>
            Platillo:
            <input type="text" name="nombre_plato" placeholder="Ej: Hamburguesa Romabeli">
        </label>

        <label>
            Descripción:
            <input type="text" name="descripcion" placeholder="Ingredientes o detalle del plato">
        </label>

        <label>
            Precio:
            <input type="number" name="precio" placeholder="Ej: 15000">
        </label>

        <button type="submit" class="btn-submit">
            Crear Platillo
        </button>
    </form>

    <a href="/posts" class="btn-back">← Volver al menú</a>

</div>

</body>
</html>
