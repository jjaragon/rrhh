<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class HojadevidaController extends Controller{
    
    public function actionIndex(){
        $model = new AccesoHojaDeVida();
        $this->render('crearHojaVida',array('model' => $model));
    }
    
}

