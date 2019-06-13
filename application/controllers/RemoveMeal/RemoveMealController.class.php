<?php

class RemoveMealController{
    public function httpGetMethod(Http $http, array $queryFields){

    }
    public function httpPostMethod(Http $http, array $formFields){
        $ids=$formFields['selectMeal'];
        var_dump($ids);
        $model=new MealModel();
        foreach($ids as $id) {
            $model-> removeMeal($id);
        }
        $http->redirectTo('/AddArticle');
    }
}