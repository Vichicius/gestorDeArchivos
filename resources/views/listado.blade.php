<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
        img{
            height:50px;
            width:50px;
            object-fit: cover;
        }

      table {
            background: white; /* triada colores E3B186 FFCEA6*/
            font: 2rem 'Calibri', sans-serif;
            margin: auto;
            border-collapse:collapse;
        }
    
        td {
            padding: 5px 20px;
            border-bottom: #bbb solid;
        }
        
        tr:nth-child(odd) td {
            background: lightgrey;
        }
  </style>
</head>
<body>
	<header class="jumbotron">
		<h1>Gestor de archivos</h1>
		<h2>Lista de archivos</h2>
	</header>


<div class="container">
    <h1>Archivos para descargar</h1>

    <table class="table">
        
        @foreach($arrayArchivos as $archivo)
        <tr>
            <td><a download="" href="..\storage\app\archivos\{{$archivo}}">{{$archivo}}</a></td>
            <td>
                @if(explode("/", Storage::disk('local')->mimeType("\archivos\\".$archivo))[0] == "image")
                <a download="" href="..\storage\app\archivos\{{$archivo}}">
                    <img src="..\storage\app\archivos\{{$archivo}}">
                </a>
                @endif
            </td>
        </tr>
        @endforeach

    </table>

    <br><br>
    <a href="inicio"><input type="button" value="Volver al inicio"></a>
</div>   

</body>
</html>