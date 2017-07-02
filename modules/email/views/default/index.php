<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\email\models\EmailSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Emails';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="email-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Email', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    
    <div class="row">
<?php foreach($posts as $arr) { ?>
<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <div class="caption">
        <h3><?= $arr->email ?></h3>
        <p><a href="/web/index.php?r=email/default/view&id=<?= $arr->id ?>" class="btn btn-primary" role="button">Button</a> 
      </div>
    </div>
  </div>
<?php } ?>
</div>
</div>
<?= \yii\widgets\LinkPager::widget([
    'pagination' => $pages,
    ])
?>
</div>
