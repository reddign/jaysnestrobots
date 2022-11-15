<?php

function get_type_type(){

    $con = connect_to_db();
    $data = con->query()->fetchAll();
    return $data;
}

function get_items(){

    $con = connect_to_db();
    $data = con->query("SELECT COL_LENGHT(items, 'itemID') as itemID");
    return $data;
}