<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\helpers\html;

?>
<div class="row">
		<dir class="col-md-12">
			<div class="row">
				<div class="col-md-12" id="description-form">
					<p><?= $metaCategory->name ?></p>
					<?php if(!empty($articless)) :?>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="row">
						<?php foreach ($articless as $article) :?>
							<div class="col-md-12">
								<p id="description-articles"><a href="<?= Url::to(['article/index', 'id' => $article->id]) ?>"><?= $article->title ?></a></p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="col-md-5">
									<p id="description-article">
										<?= $article->description ?>
									</p>
									<div class="col-md-12">
										<a href="<?= Url::to(['article/index', 'id' => $article->id]) ?>"><div id="button-articles">Читать дальше</div></a>
									</div>
								</div>
								<div class="col-md-6">
									 <?= Html::img("@web/images/index/$article->img", ['alt' => 'статья', 'class' => 'img-articles'])?>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
					</div>
				</div>
				</div>
				<?php
						echo \yii\widgets\LinkPager::widget([
							'pagination' => $pages,
							'registerLinkTags' => true
						]);
						?>
				<!-- <div class="row" id="pagination">
					<div class="clearfix"></div>
				
					<div class="col-md-12">
						<div class="col-md-6">
							<div id="arrow-l">
								<img src="/image/articles-l.jpg"><span>Предыдущая страница</span>
							</div>
						</div>
						<div class="col-md-6">
							<div id="arrow-r">
								<span>Следующая страница</span><img src="/image/articles-r.jpg">
							</div>
						</div>
					</div>
				</div> -->
			<?php else :?>
				<div class="container">
					<h2>В этой категории пока нет статей...</h2>
				</div>
			<?php endif; ?>
			</div>
		</dir>
	</div>