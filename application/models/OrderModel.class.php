<?php

class OrderModel{
   private $db;

   function __construct(){
       $this->db=new database();

   }
   function getMealList() {
    return $this->db->query('SELECT * FROM meal', []);
}

}