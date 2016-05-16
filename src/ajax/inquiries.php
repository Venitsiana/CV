<?php
include '../../DBConnection.php';

//var_dump($_POST['firstname']);die('ddd');
$connection = DBConnection::getDBConnection();
if($_POST){
    $post = $_POST;
    //var_dump($_POST);die('dsds');
    $statement1 = 'INSERT INTO inquiries( FIRSTNAME, LASTNAME)
                                   VALUES (:FIRSTNAME, :LASTNAME)';

    $stmt1 = $connection->prepare($statement1);
    $stmt1->bindValue(":FIRSTNAME", strip_tags($post['firstname']), PDO::PARAM_STR);
    $stmt1->bindValue(":LASTNAME", strip_tags($post['lastname']), PDO::PARAM_STR);
    $isInsert=$stmt1->execute();
    
    $name = $post['firstname'] . ' ' . $post['lastname'];
    // correct this
    if($isInsert){
        include "C:" . DIRECTORY_SEPARATOR . "xampp\htdocs\CV" . DIRECTORY_SEPARATOR . "src". DIRECTORY_SEPARATOR ."frontend\sendLocalEmail.php";
        sendLocalEmail($name);
    }
    echo $name;
}
        
