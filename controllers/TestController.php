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


    public function actionId()
    {

        // echo $id;

        // print_r($id);

        echo 'hola';

        // return $id;

    }


    public function actionRaro($id)
    {
        // algo pasa con los parametros que no los imprime en el metodo

        // echo $id;

        // print_r($id);

        echo $id;

        // return $id;

    }

     public function actionUsers()
    {

        // echo $id;

        return $this->render('otra');

        // return $id;

    }


    public function actionRedi() {
   
     // return $this->redirect('http://google.com');

        return $this->redirect(['users']);
    } 


}
