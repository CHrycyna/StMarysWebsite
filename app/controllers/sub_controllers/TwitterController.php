<?php
include_once 'includes/codebird.php';

class TwitterController {
  const CONSUMER_KEY = 'GCALojl85E7rai5LmypsMEvfq';
  const CONSUMER_SECRET = 'HKtUNoWD7d1dAq3G0qG0bHpoJLXT9mQV04dcaElLZslMUzjuoE';
  const ACCESS_TOKEN = '109068887-SBI7oWJteUbQPo3jvbwQ44qxKXSXQf8OGP0aufGF';
  const ACCESS_TOKEN_SECRET = 'e8RgfxeNRNFdQCylQsGAzqKMsCHSMaMH1TpvSQB3olU3b';
  
  public static function getTweets() {
    Codebird::setConsumerKey(self::CONSUMER_KEY, self::CONSUMER_SECRET);
    $cb = Codebird::getInstance();
    $cb->setToken(self::ACCESS_TOKEN, self::ACCESS_TOKEN_SECRET);
    //retrieve posts
    $q = $_POST['q'];
    $count = $_POST['count'];
    $api = $_POST['api'];
    //https://dev.twitter.com/docs/api/1.1/get/statuses/user_timeline
    //https://dev.twitter.com/docs/api/1.1/get/search/tweets
    $params = array(
        'screen_name' => $q,
        'q' => $q,
        'count' => $count
    );
    //Make the REST call
    $data = (array) $cb->$api($params);
    //Output result in JSON, getting it ready for jQuery to process
    echo json_encode($data);
  }
}
?>