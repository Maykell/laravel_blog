<?php

if(!function_exists('dateBr')){
    function dateBr($date){
        if(!$date instanceof \DateTime){
            $date = new \DateTime($date);
        }
        return $date->format('d/m/Y');
    }
}