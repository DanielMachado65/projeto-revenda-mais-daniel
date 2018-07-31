<?php
  $consumer_body = '';
  $consumer_secret = '';
  $acess_token = '';
  $acess_token_secret = '';

  require "twitteroauth/autoload.php";
  use TwitterOAuth\TwitterOAuth;

  //Connect to API
  $connection = new TwitterOAuth($consumer_body,$consumer_secret,$acess_token,$acess_token_secret);
  $content = $connection->get('account/verify_credentials');

  // Create Tweet
  $new_status = $connection->post('statuses/update',['status' => "ola mundo"]);

  // get Tweets
  $status = $connection->get('statuses/home_timeline', ["count" => 25, "exclude_replices" => true]);
  print_r($status);
?>
