<?php



?>
<!doctype html>

<html>

 <head>

<title>datos</title>
<style type="text/css">
	.text{
		color: #333333;
	  front-family: ahoma;
	  front-size: small;
	}
	</style>

 </head>
 <body>
 	<span class="text">
 		
 		las denuncias son: <?php echo $_POST ['denuncias']; ?> <br/>
 		la infomacion del home es:: <?php echo $_POST ['home']; ?> <br/>
 		las noticias de la region son: <?php echo $_POST ['noticias_de_la_region']; ?> <br/>
 		los seguimientos de denuncias que tienes son: <?php echo $_POST ['seguimiento_de_la_denuncia']; ?> <br/>
 		su registro de denuncias es: <?php echo $_POST ['registro_de_denuncias']; ?> <br/>
        la justicia se define con la paz y no con las armas.

 	</span>
 </body>

</html>