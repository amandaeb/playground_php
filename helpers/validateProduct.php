<?php
function validateType($type){
    $errors = array();
    if(empty($type['name'])){
        array_push($errors, 'name is required');
    }
    $existingType = selectOne('types', ['name' => $type['name']]);
    if($existingType){
        array_push($error, 'that type is already in use');
    }
    return $errors;
}