<header>
	
		<div class="contenedor">
		
			<div class="logo izquierda">
			<a href="<?php echo $dato[0]; ?>">
				<div id="logo"><img src="img/p1logo.png" width="80" height="80" alt="">
								
			</a>
				</div>
				
			</div>
			
			<div class="derecha">
			
			
				<?php if(!isset($_SESSION['iduser'])){ ?>
					<a href="iniciar" class="boton boton-azul"> iniciar</a>
					<a href="registro" class="boton boton-verde"> Registro</a>	
				<?php } else { ?>
					<a href="#" class="boton boton-azul"><?php echo $_SESSION['nombreuser']; ?></a>
					<a href="<?php echo $dato[0]; ?>inc/salir.php?cerrar=yes" class="boton boton-azul">&times;</a>
				<?php } ?>
				
			</div>
			
		</div>

	</header>