<?php

App::uses('AppHelper', 'View/Helper');

class CkeditorHelper extends AppHelper {
    public $helpers = Array('Html', 'Javascript');

    public function load($id) {
        $did = '';
        foreach (explode('.', $id) as $v) {
            $did .= ucfirst($v);
        } 
        $code = "CKEDITOR.config.toolbar = 'Basic';";
        //$code .= "\n";
        $code .= "CKEDITOR.replace( '".$did."' );";
        
        return $this->Html->scriptBlock($code); 
    } 
}