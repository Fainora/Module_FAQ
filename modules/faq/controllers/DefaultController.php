<?php

namespace app\modules\faq\controllers;

use yii\web\Controller;
use app\modules\faq\models\Category;
use app\modules\faq\models\Question;
use app\models\User;

class DefaultController extends Controller
{

    public function actionIndex()
    {
        $categories = Category::find()->all();
        $questions = Question::find()->all();
        $users = User::find()->all();

        return $this->render('index', compact('categories','questions','users'));
    }

    public function actionCategory($id)
    {
        $categories = Category::findOne($id);
        $questions = Question::find()->all();
        
        return $this->render('category', compact('categories', 'questions'));
    }

}
