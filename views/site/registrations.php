<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Registrations */
/* @var $form ActiveForm */
?>
<div class="site-registrations">
    <?php $form = ActiveForm::begin(); ?>

        <?= \app\widgets\Alert::widget() ?>

        <?= $form->field($model, 'type')->dropDownList([
                $model::TYPE_USER => 'Физ. лицо',
                $model::TYPE_COMPANY => 'Юр. лицо',

        ]) ?>
        <?= $form->field($model, 'is_employer')->checkbox() ?>
        <?= $form->field($model, 'fio') ?>
        <?= $form->field($model, 'email')->input('email') ?>
        <?= $form->field($model, 'inn') ?>
        <?= $form->field($model, 'company_name') ?>

        <div class="form-group">
            <?= Html::submitButton('Регистрация', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-registrations -->
