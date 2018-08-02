<?php
namespace app\controllers;

use yii\web\Controller;

/*
  Como temos o NameSpace os C anteriores não precisamos mais.
*/
class HelloController extends Controller{
  // podemos renderizar, com o nome da action + uma lista de parametros
  public function actionSaySomething($message = 'Hello'){
    // o mesmo nome da action é o nome da view.
    return $this->render('say-something', [
      'message' => $message
    ]);
  }
}
