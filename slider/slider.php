<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>slider</title>
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<div class="contenido_todo">
		<input type="radio" id="1" name="image-slide" hidden/>
		<input type="radio" id="2" name="image-slide" hidden/>
		<input type="radio" id="3" name="image-slide" hidden/>

		<div class="slide">
			<div class="objetoslide">
				<img src="images/img1.png">
			</div>
			<div class="objetoslide">
				<img src="images/img2.png">
			</div>
			<div class="objetoslide">
				<img src="images/img3.png">
			</div>
		</div>

	<div class="paginacion">
		<label class="pequeñaimagen" for="1">
			<img src="images/img1.png">
		</label>
		<label class="pequeñaimagen" for="2">
			<img src="images/img2.png">
		</label>
		<label class="pequeñaimagen" for="3">
			<img src="images/img3.png">
		</label>
	</div>
	</div>
</body>
</html>