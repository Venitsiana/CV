<?php
include '../../DBConnection.php';

$connection = DBConnection::getDBConnection();

if($_POST){

    $statement1 = 'SELECT username, pass FROM users';
    $stmt1 = $connection->prepare($statement1);
    $stmt1->execute();
    $users = $stmt1->fetch();
    var_dump($users);die('ddsdsd');
    foreach ($users as $user){
    }
    
}
