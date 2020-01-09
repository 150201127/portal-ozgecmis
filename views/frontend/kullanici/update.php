<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Kullanici */

$this->title = 'Özgeçmiş Güncelleme' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kullanicis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kullanici-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    <p>        
        <a class="btn btn-lg btn-primary" href="http://portal.kouosl/admin/ozgecmis/kullanici/index">Vazgeç</a></a>        
    </p>
</div>
