<?php

namespace frontend\controllers;

class TestController extends \yii\web\Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionTest1() {
        $a = 3;
        $b = 5;
        $Sum = $a + $b;
        return $this->render('test1', ['Sum' => $Sum]);
    } //test1
    public function actionTest2($name,$lname) {
        $info = "Your name is : $name $lname";
        return $this->render('test2',['info' => $info]);
    }
}
