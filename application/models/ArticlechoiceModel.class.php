<?php
class ArticleChoiceModel{
    private $db;

    function __construct() {
        $this->db = new Database();
    }

    function getMealList() {
        return $this->db->query('SELECT * FROM meal', []);
    }
}