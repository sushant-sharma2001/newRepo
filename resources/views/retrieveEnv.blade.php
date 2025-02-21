<?php
  $appName=env('APP_NAME');
  $appUrl=env('APP_URL');
  $debug = env('APP_URL', false);               //if this key exists it will return its value otherwise nothing will displayed
  $check=env('APP_ENV');
  echo"$appName<br>";
  echo "$appUrl<br>";
  echo "$debug<br>";
  echo "$check<br>";
?>
  