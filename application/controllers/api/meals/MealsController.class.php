<?php

class MealsController{
    public function httpGetMethod(Http $http, array $queryFields){
        $mealId = $queryFields['id'];
        $model=new MealModel();
        $result=$model->getMealById($mealId);

        return [
            '_raw_template' => true,
            'meal' =>$result
        ];
    }
    public function httpPostMethod(Http $http, array $formFields){
        
    }
}
