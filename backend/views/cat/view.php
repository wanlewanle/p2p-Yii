<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\base\cms\Cat */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', '分类信息'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cat-view">



    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            [
                'attribute' => 'status',
                'value' => $model->statusLabel,
            ],
            'created_at:datetime',
            'updated_at:datetime',
        ],
    ]) ?>

</div>
