<?php

function datas($date){
    return date('d/m/Y',strtotime($date));
 }

 function mes($date){
    return date('m',strtotime($date));
 }

 function anoatual(){
   return date('Y');
 }


?>