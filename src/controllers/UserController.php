<?php
namespace erpproject\usermodule\controllers;

use yii\web\Controller;

class UserController extends Controller
{
    public function actionIndex()
    {
        return [
            'status' => 'success',
            'message' => 'User Module API working!'
        ];
    }
}
