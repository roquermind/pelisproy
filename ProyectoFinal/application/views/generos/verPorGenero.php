<h3>Listado por género</h3>
<?php
if($genero!=null){
		foreach ($genero as $info):?>
		<table border="0">
			<tr>
			<td>
			<h4>
				<?php 
					echo $info['nombreGenero']."<br/>";
				?>
			</h4>
				<a href="<?=base_url("/films/verPeli/".$info['id']);?>"><?=$info['nombre']?></a>
				<img src="<?=base_url("/assets/images/films/".$info['caratula']);?>" height="400" width="280"/><br/>
			</td>
			</tr>
			</table>
	<?php endforeach;
	}