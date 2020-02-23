<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;


class TestController extends Controller
{

    public function actionIndex()
    {

        $nombre = 'jonathan';

        return $this->render('index',['nombre' => $nombre]);
    }


     public function Id($id)
    {

        // echo $id;

        print_r($id);

        // return $id;

    }


}
