<?php
date_default_timezone_set('America/Sao_Paulo'); 

$enderecoIP = filter_input(INPUT_SERVER, 'REMOTE_ADDR', FILTER_VALIDATE_IP);

$dados = array(
    'ip' => $enderecoIP,
    'data' => date('Y-m-d'), 
    'hora' => date('H:i:s')
);

header('Content-Type: application/json');
echo json_encode($dados);
?>
