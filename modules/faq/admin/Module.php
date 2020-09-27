<?php

namespace app\modules\faq\admin;

use Yii;
use yii\filters\AccessControl;

class Module extends \yii\base\Module
{
    public $layout = '/admin';

    public $controllerNamespace = 'app\modules\faq\admin\controllers';

    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }

    public function behaviors()
    {
        return [
            'access'    =>  [
                'class' =>  AccessControl::className(),
                'denyCallback'  =>  function($rule, $action)
                {
                    throw new \yii\web\NotFoundHttpException();
                },
                'rules' =>  [
                    [
                        'allow' =>  true,
                        'matchCallback' =>  function($rule, $action)
                        {
                            return Yii::$app->user->identity->isAdmin;
                        }
                    ]
                ]
            ]
        ];
    }
}