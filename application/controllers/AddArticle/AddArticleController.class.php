<?php

class AddArticleController{
    public function httpGetMethod(Http $http, array $queryFields){
		$mealModel = new MealModel();
		$data = $mealModel->getMealListByName();

		return [
			'nameMeal' => $data
		];
    }
    public function httpPostMethod(Http $http, array $formFields){
        $name=$formFields['name'];
        $description=$formFields['description'];
        $photo=$formFields['avatar'];
        $stock=$formFields['stock'];
        $buyPrice=$formFields['buyPrice'];
        $salePrice=$formFields['salePrice'];
        $model=new MealModel();
        $result=$model->addNewMeal($name, $description,$photo, $stock,$buyPrice,$salePrice);
        
        $mealModel = new MealModel();
		    $data = $mealModel->getMealListByName();

        return [
          'nameMeal' => $data
        ];
    }
}

