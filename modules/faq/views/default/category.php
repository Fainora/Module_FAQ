<?php
$this->title = $categories->title;
$this->params['breadcrumbs'][] = ['label' => 'Module FAQ', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?php foreach($questions as $question): ?>
  <?php if($categories->title == $question->category->title): ?>
    <?php if($question->flag == 0): ?>

      <div class="panel panel-default">
        <div class="panel-heading">
          <a data-toggle="collapse" href="#collapse<?= $question->id;?>">
            <h4 class="panel-title"><?= $question->title; ?></h4>
          </a>
        </div>
        <div id="collapse<?= $question->id;?>" class="panel-collapse collapse">
          <div class="panel-body">
            <?= $question->answer; ?>
            <!-- Вывод последней даты изменения: -->
            <p><?php //echo Yii::$app->formatter->asDate($question->updated_at, 'php:d.m.Y H:i'); ?></p>
          </div>
        </div>
      </div>
      
    <?php endif; ?>
  <?php endif; ?>
<?php endforeach; ?>
