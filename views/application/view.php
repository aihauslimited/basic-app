<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Application */

$this->title = 'Application Details: ' . $model->first_name . ' ' . $model->last_name;
$this->params['breadcrumbs'][] = ['label' => 'Applications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="application-view">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <!-- < ?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?> -->
    </p>

    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <td><?= Html::encode($model->id) ?></td>
        </tr>
        <tr>
            <th>First Name</th>
            <td><?= Html::encode($model->first_name) ?></td>
        </tr>
        <tr>
            <th>Last Name</th>
            <td><?= Html::encode($model->last_name) ?></td>
        </tr>
        <tr>
            <th>Date of Birth</th>
            <td><?= Html::encode($model->date_of_birth) ?></td>
        </tr>
        <tr>
            <th>Description</th>
            <td><?= Html::encode($model->description) ?></td>
        </tr>
        <tr>
            <th>Income</th>
            <td><?= Html::encode($model->income) ?></td>
        </tr>
        <tr>
            <th>Number of Dependants</th>
            <td><?= Html::encode($model->number_of_dependants) ?></td>
        </tr>
        <tr>
            <th>Created At</th>
            <td><?= Html::encode($model->created_at) ?></td>
        </tr>
        <tr>
            <th>Updated At</th>
            <td><?= Html::encode($model->updated_at) ?></td>
        </tr>
    </table>
</div>
