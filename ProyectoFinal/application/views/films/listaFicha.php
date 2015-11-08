<?php if ($this->session->userdata('username')):?>
<p>Si quieres añadir una nueva película a la base de datos, haz click <a href="<?=base_url();?>films/cargarFormCrearFicha">aquí</a>
<p>actualizar ficha: <a href="<?=base_url();?>films/cargarFormModFicha">aquí</a>
<?php endif;?>
<h1>Lista de películas</h1>


<?php
//echo print_r($contenido);
if($contenido!=null){
foreach ($contenido as $pelicula):?>
<table border="0">
<tr>
<td>
<?php 
echo $pelicula['nombre'];
echo $pelicula['sinopsis'];
echo $pelicula['anyo'];
?>
<img src="<?=base_url("../assets/images/films/".$pelicula['caratula']);?>"/>;
</td>
</tr>
</table>
<br/>
<?php if ($this->session->userdata('username')):?>
<a href="<?=base_url();?>films/cargarFormModFicha?id=<?=$pelicula['id']?>">Actualizar película</a>
<p>
<a href="<?=base_url();?>films/borrarFicha/<?=$pelicula['id']?>">Borrar película</a>
<?php endif;?>
<?php endforeach;}
else{
	echo "Aún no hay ninguna película en la base de datos";
}
?>