
<?php

class RegisterModel{
    private $db;
    function __construct(){
        $this->db=new Database();
    }
    function addNewRegister($firstname,$lastName,$mail,$password,$BirthDate,$adress,$city,$postalCode,$country,$phone){
        $password = password_hash($password, PASSWORD_BCRYPT);
        return $this->db->executeSql('INSERT INTO `user` (`FirstName`,`LastName`,`Email`,`Password`,`BirthDate`,`Address`,`City`,`ZipCode`,`Country`,`Phone`,`CreationTimestamp`,`LastLoginTimestamp`)
                                VALUE (?,?,?,?,?,?,?,?,?,?,NOW(),NOW())',[$firstname,$lastName,$mail,$password,$BirthDate,$adress,$city,$postalCode,$country,$phone]);
    }
}