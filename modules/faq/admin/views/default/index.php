<?php
use yii\helpers\Url;

$this->title = 'Админка'; 
$this->params['breadcrumbs'][] = ['label' => 'Module FAQ', 'url' => ['/faq']];
$this->params['breadcrumbs'][] = $this->title;
?>

<a href="<?= Url::toRoute('/admin/category')?>">
    <li class="group-item">Категории</li>
</a>
<a href="<?= Url::toRoute('/admin/question')?>">
    <li class="group-item">Вопросы и ответы</li>
</a>

