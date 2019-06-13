<?php

class AdminController{
    public function httpGetMethod(Http $http, array $queryFields){
        $model=new MealModel();
        $order=$model->getOrder();
        return [
            'orders' =>$order,
        ];
    }
    public function httpPostMethod(Http $http, array $formFields){

    }
}