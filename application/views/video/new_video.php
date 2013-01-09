<h4>Seleccione una imagen un tamaño no mayor a 1Mb<h4>
<p><?=$error?></p>
<?php echo form_open_multipart('video/save');?>
	<p>
		<?=form_label('Titulo Video:', 'titulo')?>
		<?= form_input('titulo');?>
	</p>
	<p>
		<?=form_label('Costo Video:', 'costo')?>
		<?= form_input('costo');?>
	</p>
	<p>
		<?=form_label('Formato Video:', 'formato')?>
		<?= form_input('formato');?>
	</p>
	<?=form_label('Seleccione una Imagen', 'image')?>
	<input type="file" name="userfile" size="20" />
	<br><?= form_submit('Guardar', 'Guardar')?>
<?=form_close()?>