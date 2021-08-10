<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Template
 *
 * @author pprod
 */
class Template extends SmartyBC{
    
    function __construct() {
        parent::__construct();
        
        $this->setTemplateDir('view/');
        $this->setCompileDir('view/compile/');
        $this->setCacheDir('view/cache/');
    }
}
