<section id="websites">
	<? foreach ($videos as $catalogo):?>
		<article>
			<img src="<?php echo base_url()?>images/portada/<?=$catalogo->portada?>" alt="la mejor web del mundo" height="150" width="150"/>
			<p><?= $catalogo->titulo?></p>
			<p><?= $catalogo->costo?> $</p>
			<p><?= $catalogo->formato?></p>
		</article>
	<? endforeach?>
</section>