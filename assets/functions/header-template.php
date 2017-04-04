<?php

function skh_get_header_template($v){
    $version = $v;
    require get_template_directory() . '/layouts/header-'.$version.'.php';
}