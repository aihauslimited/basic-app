<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap5\Modal;
use yii\bootstrap5\Button;

// Begin Modal
Modal::begin([
    'title' => 'Create Application',
    'toggleButton' => ['label' => 'Open Form', 'class' => 'btn btn-primary'],
]);

// Begin ActiveForm
$form = ActiveForm::begin([
    'id' => 'application-form',
    'options' => ['class' => 'form-horizontal'],
    'enableAjaxValidation' => true,  // Enable AJAX validation
    'validationUrl' => ['create'],  // Ajax validation URL
]);

?>

<div class="form-container">
    <div class="mb-3">
        <?= $form->field($model, 'first_name')->textInput(['maxlength' => true, 'class' => 'form-control'])->label('First Name') ?>
    </div>
    <div class="mb-3">
        <?= $form->field($model, 'last_name')->textInput(['maxlength' => true, 'class' => 'form-control'])->label('Last Name') ?>
    </div>
    <div class="mb-3">
        <?= $form->field($model, 'date_of_birth')->input('date', ['class' => 'form-control'])->label('Date of Birth') ?>
    </div>
    <div class="mb-3">
        <?= $form->field($model, 'description')->textarea(['rows' => 3, 'class' => 'form-control'])->label('Description') ?>
    </div>
    <div class="mb-3">
        <?= $form->field($model, 'income')->textInput(['type' => 'number', 'class' => 'form-control'])->label('Income') ?>
    </div>
    <div class="mb-3">
        <?= $form->field($model, 'number_of_dependants')->input('number', ['class' => 'form-control'])->label('Number of Dependants') ?>
    </div>

    <div class="form-group text-end">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        <!-- < ?= Button::widget(['label' => 'Close', 'class' => 'btn btn-secondary', 'data-bs-dismiss' => 'modal']) ?> -->
    </div>
</div>

<?php
// End ActiveForm
ActiveForm::end();

// End Modal
Modal::end();
?>
