<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\helpers\html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
?>
<div class="row">
	<dir class="col-md-12">
		<div class="row">
			<div class="col-md-12" id="description-form">
				<p>Хотите получить верное решение поставленной задачи?</p>
				<p>пишите нам, МЫ поможем в ее реализации</p>

			</div>
			<div class="row">
				<div class="col-md-12">
						<div class="row">
							<div class="col-md-2"></div>
							<div class="col-md-9">
								<?php $form = ActiveForm::begin() ?>
								<div id="for-form-1" class="col-md-6">
									<div class="col-md-5">
										<?php 
										// $items = ArrayHelper::map($categories,'id','name');
										$params = [
									        'prompt' => 'Укажите тип расчетов'
									    ];
									    $items = [];
									    foreach ($categories as $category) {
									    	 $items += [$category->name => $category->name];
									    }
									    echo $form->field($order, 'type')->dropDownList($items,$params);
										?>
										<?= $form->field($order, 'name') ?>
										<?= $form->field($order, 'company') ?>
										<?= $form->field($order, 'phone') ?>
									</div>
								</div>
								<div id="for-form-2" class="col-md-6">
									<div class="col-md-5">
										<?= $form->field($order, 'email') ?>
										<?= $form->field($order, 'city') ?>
										<?= $form->field($order, 'price') ?>
										<?= $form->field($order, 'data')->widget(\yii\jui\DatePicker::classname(), [
    'language' => 'ru',
   	'dateFormat' => 'yyyy-MM-dd',
]) ?>
									</div>
								</div>
							</div>
							<div class="col-md-1"></div>
						</div>
						
						<div class="row">
							<div class="col-md-12" id="text">
								<div class="col-md-2"></div>
								<div class="col-md-8">
									<?= $form->field($order, 'text')->textarea(['rows' => 10]) ?>
								</div>
								<div class="col-md-2"></div>
							</div>
						</div>
						<div><?= Html::submitButton('Заказать', ['id' => 'success'])?></div>
					<?php ActiveForm::end() ?>
				</div>
			</div>
		</div>
	</dir>
</div>