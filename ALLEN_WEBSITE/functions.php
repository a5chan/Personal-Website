<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    function getMessage($i){
        $options = array('My Skillset', 'Projects I have done', 'Past Work Places');
           switch($i){
               case 0:
                   $msg =  $options[0];
                break;
               case 1;
           $msg = $options[1];
            break;
               case 2:
                $msg =  $options[2];
                   break;
               default:
                   
                   break;               
         }
         return $msg;
       }
?>