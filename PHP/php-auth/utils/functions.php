<?php

function print_pre(array $array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

function activeLink(string $uri,$initial=false) {
    $url=$_SERVER['REQUEST_URI'];
    $url=explode("/",$url);
    $url=end($url);
    if($url==$uri){
        return 'active';
    }elseif(empty($url) && $initial){
        return 'active';
    }else{
        return '';
    }
}