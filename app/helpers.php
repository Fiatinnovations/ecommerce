<?php

define( 'DS', DIRECTORY_SEPARATOR );

function pr($ar, $bool=false){

    echo '<pre>';
    print_r($ar);
    echo '</pre>';
    if ($bool){
        exit;
    }
}