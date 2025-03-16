<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $applications app\models\Application[] */

$this->title = 'Applications';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="application-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Application', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Date of Birth</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($applications as $application): ?>
                <tr>
                    <td><?= Html::encode($application->id) ?></td>
                    <td><?= Html::encode($application->first_name) ?></td>
                    <td><?= Html::encode($application->last_name) ?></td>
                    <td><?= Html::encode($application->date_of_birth) ?></td>
                    <td>
                        <?= Html::a('View', ['view', 'id' => $application->id], ['class' => 'btn btn-info']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
