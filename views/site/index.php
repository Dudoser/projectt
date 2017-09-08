<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\helpers\html;
?>

<div class="row" id="content">
<?php foreach($categories as $category ) : ?>
    <div class="row" >
        <div class="col-md-12">
            <div class="row">
                <h2 class="block-h2"><?= $category['name'] ?> <?php echo $a ?></h2>
            </div>
            <div class="row">
                <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                    <?php
                        $img = $category['img'];
                    ?>
                    <?= Html::img("@web/images/index/$img", ['alt' => $category['name'] , 'class' => 'img-for-blocks'])?>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 for-description">
                    <p class="block-desc">Описание:</p>
                    <span class="block-description">
                        <?= $category['description'] ?>
                    </span>
                </div>
            </div>
            <div class="row button-solution">
                <a href="<?= Url::to(['solution/index']) ?>"><div>РЕШИТЬ ЗАДАЧУ</div></a>
            </div>
            <?php if( $category['id']  != $count) :?>
                <div class="border"></div>
                <div class="border"></div>
                <div class="border"></div>
                <div class="border"></div>
                <div class="border"></div>
            <?php endif; ?>
        </div>
    </div>
<?php endforeach; ?>
</div>