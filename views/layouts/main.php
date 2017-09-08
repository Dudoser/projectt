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
	<header class="row" id="header">
		<div class="fon">
			<div class="row">
				<div class="row">
					<div class="col-md-12">
						<h1>ИНЖЕНЕРНЫЕ РЕШЕНИЯ</h1>
					</div>
				</div>
				<div class="row">
					<p>Все, что нам нужно - это ТЫ!</p>
					<p>Есть вопрос - задавай,</p>
					<p>МЫ поможем тебе найти на него отвтет.</p>
					<p>Быстро, легко и правильно!</p>
				</div>
			</div>
			<div class="row btn-head">
				<div class="col-md-5 col-lg-5 col-sm-5 col-xs-10 btn-header-1">
					<span>Свяжитесь с нами:</span> <span><?= Yii::$app->params['adminPhone-1'] ?></span>
				</div>
				<div class="col-md-5 col-lg-5 col-sm-5 col-xs-10 btn-header-2">
					<span>Перезвоните мне:  </span><span><?= Yii::$app->params['adminPhone-2'] ?></span>
				</div>
			</div>
		</div>
	</header>
	<div class="row container-for-menu">
	    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
	        <ul>
	            <a href="<?= Url::home() ?>"><li class="active">Главная</li></a>
	            <a href="<?= Url::to(['solution/index']) ?>"><li>Решение онлайн</li></a>
	            <a href="<?= Url::to(['articles/select']) ?>"><li>Статьи</li></a>
	            <a href="<?= Url::to(['contacts/index']) ?>"><li>Контакты</li></a>
	        </ul>
	        <div class="borders"></div>
	    </div>
	</div>
	<script type="text/javascript"> 
	// alert(location.href);
	</script>
	<?= $content ?>

	<footer class="row">
		<div class="borders"></div>
		<div class="col-md-12">
			<div class="col-md-2 col-lg-2 col-sm-12 col-xs-12 " >

				<a href="#header"><?= Html::img("@web/images/index/stock-illustration-23046850-up.jpg", ['alt' => 'стрелка вверх', 'id' => 'arrow'])?></a>
			</div>
			<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
				<ul>
					<li><a href="<?= Url::home()?>">Главная</a></li>
					<li><a href="<?= Url::to(['solution/index']) ?>">Решение онлайн</a></li>
					<li><a href="<?= Url::to(['articles/select']) ?>">Статьи</a></li>
					<li><a href="<?= Url::to(['contacts/index']) ?>">Контакты</a></li>
				</ul>
			</div>
			<div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
				<div id="cont">
					<div id="img">
						<?= Html::img("@web/images/index/18944437_440115436365745_968225829_n.jpg", ['alt' => 'Контакты', 'id' => 'im-1'])?>
						<?= Html::img("@web/images/index/18944478_440115443032411_1393551944_n.jpg", ['alt' => 'Контакты', 'id' => 'im-2'])?>
						<?= Html::img("@web/images/index/18944574_440115433032412_1291029829_n.png", ['alt' => 'Контакты', 'id' => 'im-3'])?>
					</div>
					<div id="cont">
						<p><?= Yii::$app->params['adminPhone-1'] ?></p>
						<p><?= Yii::$app->params['adminPhone-2'] ?></p>
						<p><a href="<?= Url::to(['contacts/index']) ?>"><?= Yii::$app->params['adminEmail'] ?></a></p>
						<a href="<?= Yii::$app->params['pageFacebook'] ?>"><p><?= Yii::$app->params['pageFacebook'] ?></p></a>
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