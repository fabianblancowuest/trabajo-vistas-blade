<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f4f4f4;
            color: #222;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background: #111;
            color: white;
            padding: 20px;
        }

        nav a {
            color: white;
            margin-right: 15px;
            text-decoration: none;
            font-weight: bold;
        }

        main {
            flex: 1;
            max-width: 900px;
            margin: 30px auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
        }

        footer {
            text-align: center;
            padding: 20px;
            background: #ddd;
        }

        .producto {
            border: 1px solid #ddd;
            padding: 0 15px;
            margin-bottom: 12px;
            border-radius: 8px;
        }

        .sin-stock {
            color: red;
            font-weight: bold;
        }

        .con-stock {
            color: green;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <header>
        <h1>Mi tienda online</h1>
        <nav>
            <a href="/">Inicio</a>
            <a href="/productos">Productos</a>
            <a href="/contacto">Contacto</a>
            <a href="/nosotros">Nosotros</a>
        </nav>
    </header>
    <main>
        @yield('contenido')
    </main>
    <footer>
        <p>Trabajo practico de Laravel 13 - Vistas Blade</p>
    </footer>
</body>

</html>
