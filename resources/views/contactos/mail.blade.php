<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Información de cliente</title>
</head>
<body>
	Cliente {{ $data['nombre'] }} <small>{{ $data['email'] }}</small> dice: <br>
	<p><strong>{{ $data['asunto'] }}</strong></p>
	<p>{{ $data['mensaje'] }}</p>
</body>
</html>