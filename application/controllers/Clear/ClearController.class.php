<?php
class ClearController{
    public function httpGetMethod(Http $http, array $queryFields){
        
        $model = new PanierModel();
        
        $clear = $model->clear();
        $http->redirectTo('/Order');
    }
    public function httpPostMethod(Http $http, array $formFields){
        
    }
}