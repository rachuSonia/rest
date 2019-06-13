<?php
class MealModel {
    //private $db;

    function __construct() {
        $this->db = new Database();
    }

    function getMealList() {
        return $this->db->query('SELECT * FROM meal', []);
    }
    function getMealListByName() {
        return $this->db->query('SELECT * FROM meal', []);
    }

    function getMealById($id) {
        return $this->db->queryOne('SELECT Id, Name, Photo, Description, SalePrice FROM meal WHERE Id = ?', [$id]);
    }

    
    function addNewMeal($name, $description,$pictureName,$quantityInStock,$buyPrice,$salePrice) {
        $this->db->executeSql('INSERT INTO `meal` (`Name`,`Description`,`Photo`,`QuantityInStock`,`BuyPrice`,`SalePrice`) VALUE (?,?,?,?,?,?)',[$name, $description,$pictureName,$quantityInStock,$buyPrice,$salePrice]);
    }

    function removeMeal($id) {
        $this->db->executeSql('DELETE FROM `meal` WHERE `Id`=? ',[$id]);
    }

    function getOrder(){
       return  $this->db->query('SELECT * FROM `order`',[]);
    }

    function getDetailsOrder($id){
        return $this->db->query('SELECT * FROM `orderline` WHERE `Order_Id`=?',[$id]);
    }
}