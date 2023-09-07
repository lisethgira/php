<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Operaciones basicas</title>
</head>
<body>
	<div class="container">
		<h1 class="text-center">Operaciones basicas</h1>
		<form action="procesar.php" method="get">
			<div class="row justify-content-center mt-3">
				<div class="col-4">
					<input type="text" name="val1" class="form-control" placeholder="ingrese numero uno">
				</div>
			</div>

			<div class="row justify-content-center mt-3">
				<div class="col-4">
					<input type="text" name="val2" class="form-control" placeholder="ingrese numero dos">
				</div>
			</div>

			<div class="row justify-content-center mt-3">
				<div class="col-4">
					<select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="opcion">
						<option selected>Seleccione</option>
						<option value="suma">Suma</option>
						<option value="resta">Resta</option>
						<option value="multiplicacion">Multiplicacion</option>
						<option value="division">Division</option>
					</select>
				</div>
			</div>

			<div class="row justify-content-center mt-3">
				<div class="col-4 text-center">
					<button type="submit" class="btn btn-primary btn-lg " >Enviar</button>
				</div>
			</div>
		</form>
	</div>


</body>
</html>