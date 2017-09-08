<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\helpers\html;
?>
<div class="row" id="row-aricle">
	<div class="col-md-12">
	<?php if(!empty($article)) :?>
		<div class="row">
			<div class="col-md-12">
				<a href="<?= Url::to(['articles/index', 'id' => $article->category_id])?>"><div id="back">Назад</div></a>
				<p id="description-article_0"><?= $article->title ?></p>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<div id="container-img">
					<?= Html::img("@web/images/index/$article->img", ['alt' => 'статья', 'id' => 'img-article'])?>
				</div>
					<p id="description-article_1">
						<?= $article->text ?>
					</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<p class="section-article"><span class="blue-section-article">Раздел:</span><?= $article->category->name ?></p>
				<a href="<?= Url::to(['articles/index', 'id' => $article->category_id])?>"><div id="back">Назад</div></a>
				<p class="section-article"><span class="blue-section-article">Автор:</span><?= $article->author ?></p> 
			</div>
		</div>
	</div>
	<?php else :?>
		<div class="container">
			<h2>Нет такой страницы...</h2>
		</div>
	<?php endif; ?>
</div>