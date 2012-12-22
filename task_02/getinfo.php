<?php
require_once("data.php");

$ArrayURL = split('/', $_SERVER[REQUEST_URI]);
$id = $ArrayURL[(count($ArrayURL)-1)];
$data = new condoData();

if (is_object($data)) $status = '200 OK';
$status_header = 'HTTP/1.1 $status';

header($status_header);
return json_encode( $data->getAll($id) );

?>