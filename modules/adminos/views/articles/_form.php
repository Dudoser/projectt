<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\modules\adminos\models\Category;

/* @var $this yii\web\View */
/* @var $model app\modules\adminos\models\Articles */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="articles-form">

    <?php $form = ActiveForm::begin(); ?>



    <?php

        $categories = Category::find()->all();
        // $items = ArrayHelper::map($categories,'id','name');
        $params = [
            'prompt' => 'Укажите категорию'
        ];
        $items = [];
        foreach ($categories as $category) {
             $items += [$category->id => $category->name];
        }
        echo $form->field($model, 'category_id')->dropDownList($items,$params);

    ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'img')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
