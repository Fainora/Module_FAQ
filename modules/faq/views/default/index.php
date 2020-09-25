<?php 
use yii\helpers\Url;

$this->title = 'Module FAQ'; 
$this->params['breadcrumbs'][] = $this->title;
?>

<h1>FAQ</h1>

<?php if (!empty($categories)): ?>
  <?php if(count($categories) == 1): ?>
    <?php foreach($categories as $category): ?>

      <div class="panel panel-default">
        <div class="panel-heading"><?= $category->title; ?></div>
        <ul class="list-group">

          <?php foreach($questions as $question): ?>

            <li class="list-group-item">
                <a data-toggle="collapse" href="#collapse<?= $question->id;?>">
                  <h4 class="panel-title"><?= $question->title; ?></h4>
                </a>

                <div id="collapse<?= $question->id;?>" class="panel-collapse collapse">
                  <div class="panel-body"><?= $question->answer; ?></div>
                </div>
            </li>
            
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endforeach; ?>

  <?php else: ?>
    <?php foreach($categories as $category): ?>

      <a href="<?= Url::toRoute(['category', 'id'=>$category->id]);?>">
        <li class="group-item"><?= $category->title; ?></li>
      </a>

    <?php endforeach; ?>
  <?php endif;?>
<?php endif; ?>
JS +VueJS
