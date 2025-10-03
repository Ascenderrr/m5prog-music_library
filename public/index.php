<?php
$request_url = explode('/', $_SERVER['REQUEST_URI']);
$mijn_pagina = end($request_url);
echo 'ik bekijk nu het bericht: ' . $mijn_pagina;
print_r($request_url);

if ( empty($mijn_pagina) ) {
  require_once ('../views/overview.php');
exit;
} else {
  require_once ('../views/single.php');
}



?>
