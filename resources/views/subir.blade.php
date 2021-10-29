<!DOCTYPE html>
<html>
<head>
    <title>Subir archivos</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<body >

<header class="jumbotron">
	<h1>Gestor de archivos</h1>
	<h2>Introduce un archivo</h2>
</header>
<div style="text-align: center;">
<form method="POST" action="" enctype="multipart/form-data">
    @csrf
    <input type="text" name="nombreInput" > <br><br>
    <input type="file" name="archivoInput" > <br><br>
    <input type="submit" value="Subir archivo" class="btn btn-success">
</form>
<br>
{{ $output }}
<br><br>
<a href="inicio"><input type="button" class="btn btn-primary" value="Volver al inicio"></a>
</div>
</body>
</html>