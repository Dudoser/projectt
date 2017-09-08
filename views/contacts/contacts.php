<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\helpers\html;
use yii\widgets\ActiveForm;
?>
<div class="container">
	<div class="row">
	<dir class="col-md-12">
		<div class="row">
			<div class="col-md-10" id="about-us">
				<div class="col-md-7">
					<p class="about-us-desc">
						МЫ - молодая инжиниринговая компания, основаная в 2012 году инженерами, имеющими большой опыт решения сложныз задач. Задачей нашей команды является наиболее быстрое и эфффективное решение задач клиента.
					</p>
					<p class="about-us-desc">
						Своим заказчикам мы предлагаем самые передовые решения в области систем автоматизации и измерения, управления электродвигателями, расчета ультразвуковых датчиков.
					</p>
				</div>
				<div class="col-md-5">
					<?= Html::img("@web/images/index/abaut us.jpg", ['alt' => 'Электрика', 'id' => 'about-us-img'])?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12">
							<p id="description-abuot-us">КАК С НАМИ СВЯЗАТЬСЯ</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="col-lg-6 col-md-7 col-sm-12 col-xs-12" id="map">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2643.679540518816!2d32.24678481534444!3d48.50103667925405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d04297e9625f33%3A0x70d4e160d4f43990!2z0KPQutGA0LDQuNC90LAg0YbQtdC90YLRgA!5e0!3m2!1sru!2snl!4v1497428582570" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
							<div class="col-lg-5 col-md-6 col-sm-12 col-xs-12" id="contact">
								<div class="row">
									<div class="col-md-12" id="address">
										<span class="con">Наш адрес:</span><span><?= Yii::$app->params['address'] ?></span>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12" id="tel">
										<div class="col-md-4">
											<span class="con">телефон: </span>
										</div>
										<div class="col-md-8">
											<ul type="none" >
												<li><?= Yii::$app->params['adminPhone-1'] ?></li>
												<li><?= Yii::$app->params['adminPhone-2'] ?></li>
												<li><?= Yii::$app->params['adminPhone-3'] ?></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="row" id="mail">
									<div class="col-md-12">
										<span class="con">E-mail: </span><span><?= Yii::$app->params['adminEmail'] ?></span>
									</div>
								</div>
								<div class="row" id="time">
									<div class="col-md-12">
										<div class="con">Время работы компании: </div><span>Пн-Пт с 09:00 до 18:00 часов</span>
									</div>
								</div>
							</div>
							<div class="col-md-3"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3"></div>
						<div class="col-md-6" id="contact-form">
							<?php $form = ActiveForm::begin() ?>
								<?= $form->field($contact, 'name')?>
								<?= $form->field($contact, 'phone')?>
								<?= $form->field($contact, 'email')?>
								<?= $form->field($contact, 'message')->textarea(['rows' => 5])?>
									<?= Html::submitButton('Отправить', ['id' => 'success'])?>
							<?php ActiveForm::end() ?>
							<div class="col-md-3"></div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</dir>
</div>
</div>