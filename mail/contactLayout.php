<?php

/* @var $this yii\web\View */

use yii\helpers\html;

?>


<div class="teble-responsive">
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th>Имя</th>
				<th>Телефон</th>
				<th>E-mail</th>
				<th>Сообщение</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?= $contact->name?></td>
				<td><?= $contact->phone?></td>
				<td><?= $contact->email?></td>
				<td><?= $order->name?></td>
				<td><?= $contact->message?></td>

			</tr>
		</tbody>
	</table>
</div>
