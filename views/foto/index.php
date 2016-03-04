<?php
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'foto')->fileInput() ?>

    <button>Subir</button>

<?php ActiveForm::end() ?>