<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inicio </title>
</head>
<body>
<form action="procesar.php" method="post">
	<label>valor 1</label>
	<p></p>
	<input type="text" name="val1">
	<p></p>
	<label>valor 2</label>
	<p></p>
	<input type="text" name="val2">
	<p></p>
	<select name="opcion">
		<option value="suma">suma</option>
		<option value="resta">resta</option>
		<option value="division">division</option>
		<option value="multiplicacion">multiplicacion</option>
	</select>
	<p></p>
	<button>Calcular</button>
</form>
</body>
</html>
