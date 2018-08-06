<?php
namespace app\controllers;
use Yii;
use yii\web\Controller;
use yii\web\Response;
use Abraham\TwitterOAuth\TwitterOAuth;


class TwitterController extends Controller{
  public $layout = 'twitter';
  public function actionIndex(){
    return $this->render('index',[]);
  }

  /*HACK: em theory is a function on config singleton*/
   private function configSingleton(){
     $consumer_key = Yii::$app->params['API key'];
     $consumer_secret  = Yii::$app->params['API secret key'];
     $access_token = Yii::$app->params['Access token'];
     $access_token_secret = Yii::$app->params['Access token secret'];
     return new TwitterOAuth($consumer_key, $consumer_secret, $access_token,$access_token_secret);
  }

  /*HACK: search on the params in function */
  public function actionSearch($query){
    if (empty($query)) {
      echo "não foi possivel";
    }else {
      $query = trim($query);
      $query = stripslashes($query);
      $query = htmlspecialchars($query);
      $conexao = $this->configSingleton();
      $content = $conexao->get("account/verify_credentials");
      $query = array(
        "q" => $query,
        "count" => 10,
        "locale" => 'brazil',
        "lang" => 'pt-br',
        "result_type" => "mixed"
      );
      $tweets = $conexao->get('search/tweets', $query);
      return json_encode($tweets);
    }

  }
  //TODO: is working now, but a need to passed for view
  public function actionTrends(){
    $conexao = $this->configSingleton();
    $content = $conexao->get("account/verify_credentials");
    $tweets = $conexao->get("trends/place", ["id" => 455819 ])[0];
    $arrayName = array();
    for ($i=0; $i < 10; $i++) {
      array_push($arrayName, $tweets->trends[$i]->name );
    }
    return json_encode($arrayName);
  }

}
?>
