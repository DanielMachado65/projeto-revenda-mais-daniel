<?php
use yii\bootstrap\Html;
?>

  <?php $this->beginPage(); ?>
  <!DOCTYPE html>
  <html lang="<?= Yii::$app->language ?>" dir="ltr">

  <head>
    <?= Html::csrfMetaTags() ?>
      <meta charset="<?= Yii::$app->charset ?>">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js" charset="utf-8"></script>
      <?= $this->registerMetaTag(['name' => 'viewport', 'content'=> 'width=device-widthm initial-scale=1'])?>
        <?php $this->head() ?>


        <title>
          Searching and Trending
        </title>
  </head>

  <?php $this->beginBody() ?>

  <body>

    <?= $content; ?>

      <?php $this->endBody () ?>
  </body>

  </html>
  <?php $this->endPage() ?>
