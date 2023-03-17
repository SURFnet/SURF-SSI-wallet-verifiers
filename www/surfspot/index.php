<?php

  require_once('../simplesamlphp/lib/_autoload.php');
  $as = new \SimpleSAML\Auth\Simple('surfspot');
  $as->requireAuth();
  $attributes = $as->getAttributes();
  print_r($attributes);

?>
