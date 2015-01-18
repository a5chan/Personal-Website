<?php

class language {
    private $filepath;
    public function __construct($lang_pref = null) {
   
        $languages = array(
          "en-ch.php" =>  "en-ch",     
            "en-ca.php" => "en-ca");
        
        foreach($languages as $file => $i){
            if($lang_pref == $i){
                $this -> filepath = $file;
            }
        }    
    }
    
    public function localizeit($key = null){
        include $this -> filepath;
        
        foreach($list as $title => $translate){
            if($key == $title){
                $msg = $translate;
            }
        }
        return $msg;
        
    }
}

?>