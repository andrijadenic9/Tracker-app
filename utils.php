<?php 

function dd($val){
    echo '<pre>';
    die(var_dump($val));
    echo '</pre>';
}

function vd($val){
    echo '<pre>';
    var_dump($val);
    echo '</pre>';
}