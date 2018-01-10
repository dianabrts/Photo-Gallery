<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Galeria de Imagenes</title>
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700" rel="stylesheet">
	<link rel="stylesheet" href="CSS/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="CSS/estilos.css">
</head>
<body>
	<header>
		<div class="contenedor">
			<h1 class="titulo">Galeria de Imagenes</h1>
		</div>
	</header>

	<section class="fotos">
		<div class="contenedor">
			<?php foreach ($fotos as $foto): ?>
				<div class="thumb">
					<a href="foto.php?id=<?php echo $foto['id']; ?>">
						<img src="fotos/<?php echo $foto['ruta']; ?>">
					</a>
				</div>
		    <?php endforeach; ?>

			<div class="paginacion">
				<?php if ($paginaActual > 1): ?>
					<a href="index.php?p=<?php echo $paginaActual - 1; ?>" class="izquierda"><i class="fa fa-long-arrow-left"></i> Pagina Anterior </a>
				<?php endif; ?>

				<?php if ($totalPaginas != $paginaActual): ?>
					<a href="index.php?p=<?php echo $paginaActual + 1; ?>" class="derecha"> Pagina Siguiente <i class="fa fa-long-arrow-right"></i></a>
				<?php endif; ?>					
			</div>
		</div>
	</section>

	<footer>
		<p class="copyright"> Galeria Creada por Diana Bernal</p>
	</footer>
	
	<script src="https://www.gstatic.com/firebasejs/4.6.2/firebase.js"></script>
	<script>
	  // Initialize Firebase
	  var config = {
	    apiKey: "AIzaSyAr4_yQvgHx_aMo4BN4PWaB8LaNMk0M4oY",
	    authDomain: "awesome-project-9b92a.firebaseapp.com",
	    databaseURL: "https://awesome-project-9b92a.firebaseio.com",
	    projectId: "awesome-project-9b92a",
	    storageBucket: "awesome-project-9b92a.appspot.com",
	    messagingSenderId: "230879027851"
	  };
	  
	  firebase.initializeApp(config);
	</script>
</body>
</html>