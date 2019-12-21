<?php
namespace technic\test\widgets\getQuestions;

use yii\data\ActiveDataProvider;
use technic\test\models\Questions;
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
class GetQuestions extends Widget{
    
    public function run() {
        
        $dataProvider = new ActiveDataProvider([
            'query' => Questions::find()->orderBy('rand()')->limit(10),
            'pagination' => false,
        ]);
        
        \technic\test\AppAsset::register($this->view);
        
        return $this->render('get-questions',[
            'dataProvider' => $dataProvider
        ]);
    }
}
