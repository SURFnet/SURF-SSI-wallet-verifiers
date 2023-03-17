<?php

  require_once('../simplesamlphp/lib/_autoload.php');
  $as = new \SimpleSAML\Auth\Simple('ey');
  $as->requireAuth();
  $attributes = $as->getAttributes();

  //print_r($attributes);

  echo "<style>";
  echo "  body, h1, h2, h3, h4, h5, h6 {";
  echo "   font-family: Arial, Helvetica, sans-serif;";
  echo " }";
  echo "</style>";

  echo '<img src="ey-end-top.png" alt="ey_header" width="1200">';
  echo '</br>';
  echo '<table border="0">';
  echo '<tr>';
  echo '  <td width="150px"></td>';
  echo '  <td></td>';
  echo '  <td width="20"></td>';
  echo '  <td></td>';
  echo '</tr>';
  echo '<tr>';
  echo '  <td width="150px" colspan="4">About you (based on eduID)</td>';
  echo '</tr>';
  echo '<tr>';
  echo '  <td width="150px"></td>';
  echo '  <td>Name</td>';
  echo '  <td width="20"></td>';
  echo '  <td>';
  echo $attributes["irma-demo.surf.eduid.displayname"][0];
  echo '</td>';
  echo '</tr>';
  echo '<tr>';
  echo '  <td width="150px"></td>';
  echo '  <td>Email</td>';
  echo '  <td width="20"></td>';
  echo '  <td>';
  echo $attributes["irma-demo.surf.eduid.emailadres"][0];
  echo '</td>';
  echo '</tr>';
  echo '<tr>';
  echo '  <td width="150px"></td>';
  echo '  <td>Identifier</td>';
  echo '  <td width="20"></td>';
  echo '  <td>';
  echo $attributes["irma-demo.surf.eduid.eppn"][0];
  echo '</td>';
  echo '</tr>';
  echo '<tr>';
  echo '  <td width="150px" height="15px"></td>';
  echo '  <td></td>';
  echo '  <td width="20"></td>';
  echo '  <td></td>';
  echo '</tr>';
  echo '<tr>';
  echo '  <td width="150px" colspan="4">Your skills (based on eduBadges)</td>';
  echo '</tr>';

  echo '<tr>';
  echo '  <td width="150px"></td>';
  echo '  <td>eduBadge</td>';
  echo '  <td width="20"></td>';
  echo '  <td>';
  echo $attributes["irma-demo.surf.edubadge.badge_title"][0];
  echo '</td>';
  echo '</tr>';

  echo '<tr>';
  echo '  <td width="150px"></td>';
  echo '  <td colspan="3"><img width="500" src="';
  echo $attributes["irma-demo.surf.edubadge.badge_logo_url"][0];
  echo '"></td>';
  echo '</tr>';
  echo '<tr>';
  echo '  <td width="150px"></td>';
  echo '  <td>Issued by</td>';
  echo '  <td width="20"></td>';
  echo '  <td>';
  echo $attributes["irma-demo.surf.edubadge.badge_issuer"][0];
  echo '</td>';
  echo '</tr>';

  echo '<tr>';
  echo '  <td width="150px"></td>';
  echo '  <td></td>';
  echo '  <td></td>';
  echo '  <td colspan="3"><img width="100" src="';
  echo $attributes["irma-demo.surf.edubadge.badge_issuer_logo_url"][0];
  echo '"></td>';
  echo '</tr>';

  echo '<tr>';
  echo '  <td width="150px"></td>';
  echo '  <td>Issued on</td>';
  echo '  <td width="20"></td>';
  echo '  <td>';
  echo $attributes["irma-demo.surf.edubadge.badge_issued_on"][0];
  echo '</td>';
  echo '</tr>';


  echo '<tr>';
  echo '  <td width="150px"></td>';
  echo '  <td>Issued to</td>';
  echo '  <td width="20"></td>';
  echo '  <td>';
  echo $attributes["irma-demo.surf.edubadge.learner_id"][0];
  echo '</td>';
  echo '</tr>';










  echo '</table>';



/*
  foreach ($attributes as $key => $value) {
    print($key);
    print("</br>");
    print($value[0]);
    print("</br></br>");
  }
*/
?>
