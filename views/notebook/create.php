<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($notebook, 'title') ?>
    <?= $form->field($notebook, 'body') ?>
    <div class="form-group">
        <?= Html::submitButton('Zapisz', ['class' => 'btn btn-success']); ?>
    </div>
<?php ActiveForm::end(); ?>