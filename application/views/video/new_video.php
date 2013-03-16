<h4>Seleccione una imagen un tamaño no mayor a 1Mb</h4>
<p><?=$error?></p>
   <?=validation_errors('<div class="errors">','</div>'); ?>
<?php echo form_open_multipart('video/save');?>
	<p>
		<?=form_label('Titulo Video:', 'titulo')?>
		<?=form_input(array('name'=>'titulo', 'id'=>'titulo', 'type'=>'text', 'value'=>set_value('titulo'), 'placeholder' => 'Ingrese el Titulo del Video', 'autofocus'=>'autofocus', 'size'=>'50'))?>
	</p>
	<p>
		<?=form_label('Costo Video:', 'costo')?>
        <?=form_input(array('name'=>'costo', 'id'=>'costo', 'type'=>'text', 'value'=>set_value('costo'), 'placeholder' => 'Ingrese el Costo del Video', 'size'=>'50'))?>
	</p>
	<p>
		<?=form_label('Formato Video:', 'formato')?>
        <?=form_input(array('name'=>'formato', 'id'=>'formato', 'type'=>'text', 'value'=>set_value('formato'), 'placeholder' => 'Ingrese el Formato del Video', 'size'=>'50'))?>
	</p>
    <p>
	    <?=form_label('Seleccione una Imagen', 'image')?>
        <?=form_input(array('name'=>'userfile', 'id'=>'userfile', 'type'=>'file', 'value'=>set_value('portada'), 'size'=>'20'))?>
    </p>
	<br><?= form_submit('Guardar', 'Guardar')?>
<?=form_close()?>