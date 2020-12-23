<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ProdiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Prodi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prodi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Prodi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_prodi',
            'nama_prodi',
            'jurusan',
            'telpon',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
