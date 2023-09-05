<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/jrd+json');
if($_GET["rel"]=="http://openid.net/specs/connect/1.0/issuer" && preg_match("/@example\.com$/i", $_GET["resource"]) && preg_match("/^acct\:/", $_GET["resource"])) {
  echo "{\"subject\":\"" . $_GET["resource"] . "\",\"links\":[{\"rel\":\"http://openid.net/specs/connect/1.0/issuer\",\"href\":\"https://auth.example.com\"}]}";
} else {
  http_response_code(404);
  echo "{}";
}
?>
