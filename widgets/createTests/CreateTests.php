<?php
namespace technic\test\widgets\createTests;

use yii\base\Widget;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CreateTests
 *
 * @author Admin
 */
class CreateTests extends Widget{
   
    public function run() {
        

        \technic\test\AppAsset::register($this->view);
        
        return $this->render('create-tests',[
            'dataProvider' => $dataProvider
        ]);
    }
}
