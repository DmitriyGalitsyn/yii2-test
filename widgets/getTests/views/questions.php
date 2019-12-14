<div class="question" id="question-<?= $model->id ?>" data-id="<?= $model->id ?>">
<h2><?= $index+1; ?> Вопрос: <?= $model->question ?></h2>

<?php $i = 1; foreach($model->answers as $item): ?>
<span style="font-size: 20px;"># <?= $i ?> Ответ: <?= $item->answer ?></span> 
<input  type="radio" id="answer-<?= $item->id ?>" name="question-<?= $model->id ?>" value="<?= $item->id ?>"><br>

<?php $i++; endforeach; ?>
</div>
<hr>

