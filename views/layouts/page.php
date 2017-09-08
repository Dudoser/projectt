<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
	<?php $this->beginBody() ?>
	<header class="row" id="backg">
		<div class="fons">
			<div class="row">
				<h1>ИНЖЕНЕРНЫЕ РЕШЕНИЯ</h1>
			</div>
			<div class="row">
				<div class="row container-for-menu">
				<div class="col-md-12">
					<ul id="ul">
						<a href="<?= Url::home() ?>"><li>Главная</li></a>
			            <a href="<?= Url::to(['solution/index']) ?>"><li>Решение онлайн</li></a>
			            <a href="<?= Url::to(['articles/select']) ?>"><li>Статьи</li></a>
			            <a href="<?= Url::to(['contacts/index']) ?>"><li>Контакты</li></a>
					</ul>
				</div>
			</div>
		</div>
		
	</header>
	<div class="borders" id="border"></div>
	
	<?= $content ?>

	<footer class="row">
		<div class="borders"></div>
		<div class="col-md-12">
			<div class="col-md-2" >
				<a href="#backg"><?= Html::img("@web/images/index/stock-illustration-23046850-up.jpg", ['alt' => 'Контакты', 'id' => 'im-1'])?></a>
			</div>
			<div class="col-md-7">
				<ul>
					<li><a href="<?= Url::home()?>">Главная</a></li>
					<li><a href="<?= Url::to(['solution/index']) ?>">Решение онлайн</a></li>
					<li><a href="<?= Url::to(['articles/select']) ?>">Статьи</a></li>
					<li><a href="<?= Url::to(['contacts/index']) ?>">Контакты</a></li>
				</ul>
			</div>
			<div class="col-md-3">
				<div id="cont">
					<div id="img">
						<?= Html::img("@web/images/index/18944437_440115436365745_968225829_n.jpg", ['alt' => 'Контакты', 'id' => 'im-1'])?>
						<?= Html::img("@web/images/index/18944478_440115443032411_1393551944_n.jpg", ['alt' => 'Контакты', 'id' => 'im-2'])?>
						<?= Html::img("@web/images/index/18944574_440115433032412_1291029829_n.png", ['alt' => 'Контакты', 'id' => 'im-2'])?>
					</div>
					<div id="cont">
						<p><?= Yii::$app->params['adminPhone-1'] ?></p>
						<p><?= Yii::$app->params['adminPhone-2'] ?></p>
						<p><a href="<?= Url::to(['contacts/index']) ?>"><?= Yii::$app->params['adminEmail'] ?></a></p>
						<p><?= Yii::$app->params['pageFacebook'] ?></p>
					</div>
					<span id="copy">&copy;Все права защищиены</span>
				</div>
			</div>
		</div>
	</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>