<?php

$telefones = array(
    '51 12345-6789',
    '(51) 99999-9999',
    '51999999999', // padronizado
    '51 99999',
    '5199999999999999999', //verifiquei as informações e não pede para padronizar por tamanho.
    '(51) 99999--9998',
);

function formatarFone($fone){
    $fone = str_replace('-', '', $fone);
    $fone = str_replace(')', '', $fone);
    $fone = str_replace('(', '', $fone);
    $fone = str_replace('.', '', $fone);
    $fone = str_replace('*', '', $fone);
    $fone = str_replace(' ', '', $fone);
    $fone = trim($fone);    
    return $fone;
}
// resolva abaixo
?>