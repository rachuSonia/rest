<?php

class DetailsOrderController{
    public function httpGetMethod(Http $http, array $queryFields){
        $model=new MealModel();
        $id=$queryFields['id'];
        $detailss=$model->getDetailsOrder($id);
        return [
            'details' =>$detailss,
        ];
    $http->redirectTo('/Admin');
    }
    public function httpPostMethod(Http $http, array $formFields){

    }
}