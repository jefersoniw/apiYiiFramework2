<?php

namespace app\modules\api\controllers;

use yii\rest\ActiveController;
use yii\web\Controller;

/**
 * Default controller for the `api` module
 */
class DefaultController extends ActiveController
{

    public $modelClass = 'app\models\Noticia';

    //REMOVER PERMISSÃO PARA DELETAR E CRIAÇÃO DE REGISTRO
    public function actions()
    {
        $actions = parent::actions();
        unset($actions['delete'], $actions['create']);
        return $actions;
    }
}
