<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Jurusan */

$this->title = 'Tambah Jurusan';            // edit eyd
$this->params['breadcrumbs'][] = ['label' => 'Jurusan', 'url' => ['index']]; // edit eyd
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jurusan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
