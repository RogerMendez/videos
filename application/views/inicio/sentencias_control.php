<? if($var % 2 == 0): ?>
	<p>Es Numero par</p>
<? else:?>
	<p>No es Numero Par</p>
<? endif ?>
<br><br>
<? foreach ($vector as $valor):?>
	<p><?= $valor ?></p>
<? endforeach ?>