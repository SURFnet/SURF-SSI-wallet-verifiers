<?php

  require_once('../simplesamlphp/lib/_autoload.php');
  $as = new \SimpleSAML\Auth\Simple('pizza');
  $as->requireAuth();
  $attributes = $as->getAttributes();
//  print_r($attributes);

//  print_r($attributes["irma-demo.surf.surfconext.affiliation"][0]);
  $i = strtolower($attributes["irma-demo.surf.surfconext.affiliation"][0]); 

  switch ($i) {
    case "student":
        echo "Affiliation: Student";
        echo '</br><img src="pizza3.png" alt="Pizza time!" width="1200">';
        break;
    case "member":
        echo "Affiliation: Member";
        echo "</br>Sorry, no free Pizza :(";
        break;
    case "employee":
        echo "Affiliation: Employee";
        echo "</br>Sorry, no free Pizza :(";
        break;
  }
?>
