<?php
$request_url = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
$mijn_pagina = end($request_url);

if (empty($mijn_pagina) || $mijn_pagina === '') {
    require_once('../views/overview.php');
    exit;
}

if (count($request_url) > 1 && $request_url[0] === 'single') {
    require_once('../views/singlestyling.php');
    exit;
}

require_once('../views/overview.php');
?>
