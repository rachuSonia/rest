<?php

class OrderController{
    public function httpGetMethod(Http $http, array $queryFields){
        $model=new OrderModel();
        $result=$model->getMealList() ;
        $panierModel = new PanierModel();

        $panier = $panierModel->get();

        return [
            'meals' =>$result,
            'paniers' => $panier,
        ];
    }
    public function httpPostMethod(Http $http, array $formFields){
        $itemToAdd = $formFields; // name du select
        $itemQtt = $formFields ;
        $panierModel = new PanierModel();

        $panier = $panierModel->add(id, itemQtt);
        $http->redirectTo('/Order');
    }
}
