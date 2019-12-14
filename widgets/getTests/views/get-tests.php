<?php
/* @var $this yii\web\View */
use yii\widgets\ListView;
use yii\helpers\Html;

?>


<div class="border">

<div class="testing">    
  
<span style="display: none;" id="test-id"><?= $id ?></span>  

<hr>
<?= ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => 'questions', 
]); ?>
<div id="error"></div>
<?= Html::button('Получить оценку?', ['class' => 'btn btn-success', 'id' => 'btn']) ?>
</div>
</div>

