<?php

function getModelList($model){
    $model_list = null;
    if($model == 'job-roles'){
        $model_list = \App\Models\JobRole::all();
    }
    
    return $model_list;
}