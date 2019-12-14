<?php
namespace technic\test\widgets\getTests;

use yii\base\Widget;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GetTests
 *
 * @author Admin
 */
class GetTests extends Widget{
    
    public function run() {
        
        return $this->render('get-tests');
    }
}
