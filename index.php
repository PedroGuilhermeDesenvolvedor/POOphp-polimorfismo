<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<pre>
		
		<?php 
			require_once 'Mamifero.php';
			require_once 'Reptil.php';

			$lagarto = new Reptil  ();
			$humano  = new Mamifero();
			
			$lagarto->alimentar();
			$humano->alimentar(); 
		?>

	</pre>
</body>
</html>