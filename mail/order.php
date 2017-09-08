<?php

/* @var $this yii\web\View */

use yii\helpers\html;

?>


<div class="teble-responsive">
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th>Тип заказа</th>
				<th>Имя заказчика</th>
				<th>Название компании</th>
				<th>Телефон</th>
				<th>E-mail</th>
				<th>Город</th>
				<th>Бюджет задачи(ГРН)</th>
				<th>Строки</th>
				<th>Описание задачи</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?= $order->type?></td>
				<td><?= $order->name?></td>
				<td><?= $order->company?></td>
				<td><?= $order->phone?></td>
				<td><?= $order->email?></td>
				<td><?= $order->city?></td>
				<td><?= $order->price?></td>
				<td><?= $order->data?></td>
			</tr>
			<tr>
				<td colspan="2">Описание задачи</td>
				<td colspan="10"><?= $order->text?></td>
			</tr>
		</tbody>
	</table>
</div>
