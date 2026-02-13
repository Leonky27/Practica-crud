<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Romabeli | Bienvenida</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body{
            margin:0;
            font-family: 'Segoe UI', sans-serif;
            background-color:#111;
            color:white;
        }

        .hero{
            height:100vh;
            display:flex;
            align-items:center;
            justify-content:center;
            text-align:center;
            position:relative;
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.9)),
                        url('/images/fondo-romabeli.jpg');
            background-size:cover;
            background-position:center;
        }

        .hero-content{
            max-width:800px;
        }

        .hero h1{
            font-size:60px;
            margin-bottom:20px;
            letter-spacing:3px;
            color:#d2b48c;
        }

        .hero h2{
            font-size:28px;
            font-weight:300;
            margin-bottom:40px;
        }

        .btn-romabeli{
            display:inline-block;
            padding:15px 35px;
            background:#d2b48c;
            color:#111;
            text-decoration:none;
            font-weight:bold;
            border-radius:40px;
            transition:0.3s ease;
        }

        .btn-romabeli:hover{
            background:white;
            transform:scale(1.05);
        }

        .info{
            padding:80px 20px;
            background:#1a1a1a;
            text-align:center;
        }

        .info h3{
            font-size:40px;
            color:#d2b48c;
            margin-bottom:20px;
        }

        .info p{
            max-width:700px;
            margin:auto;
            font-size:18px;
            line-height:1.6;
            color:#ccc;
        }

        footer{
            padding:20px;
            text-align:center;
            background:#000;
            color:#aaa;
        }

        @media(max-width:768px){
            .hero h1{
                font-size:40px;
            }
            .hero h2{
                font-size:20px;
            }
        }

    </style>
</head>
<body>

<section class="hero">
    <div class="hero-content">
        <h1>ROMABELI</h1>
        <h2>El sabor que conquista cada antojo</h2>
        <a href="/posts" class="btn-romabeli">Ver Menú</a>
    </div>
</section>

<section class="info">
    <h3>Bienvenido a Romabeli</h3>
    <p>
        Disfruta las mejores hamburguesas, perros calientes, patacones,
        salchipapas y asados preparados con ingredientes frescos y
        el auténtico sabor urbano que nos caracteriza.
    </p>
</section>

<footer>
    © {{ date('Y') }} Restaurante Romabeli | Todos los derechos reservados
</footer>

</body>
</html>

