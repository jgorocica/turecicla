<nav class="menu menu-negro">
			<div class="contenedor">
			
			<div class="menu-boton menu-boton-negro" id="menu1"></div>
			<div class="menu-lista" id="menu1">			
			<ul>
				<li <?php if($menu=='index') echo 'class="menu-activo"'; ?>><a href="<?php echo $dato[0]; ?>">Inicio</a></li>
				<li <?php if($menu=='contacto') echo 'class="menu-activo"'; ?>><a href="<?php echo $dato[0]; ?>contacto">Contacto</a></li>
				
				
				<li><a href="<?php echo $dato[0]; ?>agregar">Agregar</a></li>
			</ul>
			</div>			
			
			</div>	
</nav>