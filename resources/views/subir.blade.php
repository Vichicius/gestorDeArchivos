<!DOCTYPE html>
<html>
<head>
    <title>Subir</title>
</head>

<body style="text-align: center;">
<h1>Subir archivos</h1>
<h2>Introduce un archivo</h2>
<form method="POST" action="" enctype="multipart/form-data">
    @csrf
    <input type="text" name="nombreInput"> <br><br>
    <input type="file" name="archivoInput"> <br><br>
    <input type="submit">
</form>
<br>
{{ $output }}
<br><br>
<a href="inicio"><input type="button" value="Volver al inicio"></a>

</body>
</html>