<?php

class ArticleChoiceController{
    public function httpGetMethod(Http $http, array $queryFields){
        $model = new ArticleChoiceModel();
		$results = $model->getMealList();

		return [
			'meals' => $results
		];
    }
    public function httpPostMethod(Http $http, array $formFields){
        
    }
}