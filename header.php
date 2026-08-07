<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librería Online</title>
    <style>
        * { box-sizing: border-box; font-family: Arial, sans-serif; margin: 0; padding: 0; }
        body { background-color: #f4f6f9; color: #333; }
        header { background-color: #2c3e50; color: #fff; padding: 20px 0; text-align: center; }
        nav { background-color: #34495e; text-align: center; padding: 12px 0; }
        nav a { color: #fff; text-decoration: none; padding: 10px 20px; font-weight: bold; }
        nav a:hover { background-color: #1abc9c; border-radius: 4px; }
        .container { max-width: 1000px; margin: 30px auto; padding: 0 15px; }
        table { width: 100%; border-collapse: collapse; background: #fff; border-radius: 6px; overflow: hidden; box-shadow: 0 2px 5px rgba(0,0,0,0.1); margin-top: 20px; }
        th, td { padding: 12px 15px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background-color: #2c3e50; color: #fff; }
        tr:hover { background-color: #f1f1f1; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; font-weight: bold; }
        .form-group input, .form-group textarea { width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 14px; }
        .btn-submit { background-color: #27ae60; color: white; border: none; padding: 12px 20px; border-radius: 4px; cursor: pointer; font-size: 16px; }
        .btn-submit:hover { background-color: #2ea043; }
        .alert { padding: 15px; margin-bottom: 20px; border-radius: 4px; }
        .alert-success { background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .alert-danger { background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
    </style>
</head>
<body>

<header>
    <h1>Librería Online</h1>
</header>

<nav>
    <a href="libros.php">Libros Disponibles</a>
    <a href="autores.php">Listado de Autores</a>
    <a href="contacto.php">Contacto</a>
</nav>

<div class="container">