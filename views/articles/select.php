<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\helpers\html;
?>
<div class="row">
	<dir class="col-md-12">
		<div class="row">
		<?php if(!empty($categorys)) :?>
			<div class="col-md-12" id="description-form">
				<p>Выберите интересующий Вас раздел</p>

			</div>
			<?php $i = 0; foreach ($categorys as $category) : ?>
			<?php if($i % 2) : ?>
				<div class="row">
				<div class="col-md-12">
			<?php endif; ?>
					<div class="col-md-5" id="img-0">
						<a href="<?= Url::to(['articles/index', 'id' => $category->id]) ?>">
							<div class="fo">
								<?= Html::img("@web/images/index/$category->img")?>
								
							</div>
							<div>
								<p id="category-names"><?= $category->name ?></p>
							</div>
						</a>
					</div>
			<?php if($i % 2) : ?>
				</div>
			</div>
			<?php endif; ?>
			<?php endforeach; ?>
			<?php else :?>
				<div class="container">
					<h2>Нет такой страницы...</h2>
				</div>
			<?php endif; ?>
		</div>
	</dir>
</div>