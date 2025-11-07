<?php
require_once '../source/database.php';


var_dump( $_SERVER['REQUEST_URI'] );
$request_url = explode('/', $_SERVER['REQUEST_URI']);
$mijn_pagina = end($request_url);
echo '' . $mijn_pagina;

$query = 'SELECT * FROM songs WHERE slug=?';
$stmt = $connection->prepare($query);
$stmt->bind_param('s', $mijn_pagina);
$stmt->execute();
$result = $stmt->get_result();
print_r($mijn_pagina);

