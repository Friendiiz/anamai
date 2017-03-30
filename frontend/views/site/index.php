
<?php
//* @var $this yii\web\View *
$this->title = 'กรมอนามัย';
?>
<?php
$route1 = Yii::$app->urlManager->createUrl('test/test1');
?>
<a href="<?=$route1?>">ไปที่ Test 1 </a>
<br>
<?php

$route2 = Yii::$app->urlManager->createUrl(['test/test2','name' => 'basz','lname' => 'boochakiat']);
?>
<a href="<?=$route2?>">ไปที่ Test 2 </a>
<br>

<?=
\yii\helpers\Html::a('แบบที่ 3 ',['test/test1','a'=>'1']);
?>
<br>

