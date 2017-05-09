<?php
/**
 * Twitter API SEARCH
 * Selim Hallaç
 * selimhallac@gmail.com
 */

include "twitteroauth/twitteroauth.php";

$consumer_key = "jsIwmkEXmT1gLBsAxVHapiGyd";
$consumer_secret = "CVfFzCfCarvHlvsRrwosbsQvDRIZNhxx80pVvCAP3W0C2W2uY1";
$access_token = "841601775081795584-QGzNQOHlmi9Naa7fGVAIKRncohyVU5y";
$access_token_secret = "WFEm4C1z8hE9U21zymZI2zNzmtbLeq80cYxfS1IKgDe7W";

$twitter = new TwitterOAuth($consumer_key,$consumer_secret,$access_token,$access_token_secret);


?>