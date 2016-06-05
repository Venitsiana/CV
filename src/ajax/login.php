<?php
include '../../DBConnection.php';

$connection = DBConnection::getDBConnection();

if($_POST){

    $statement1 = 'SELECT id, username, pass FROM users';
    $stmt1 = $connection->prepare($statement1);
    $stmt1->execute();
    $users = $stmt1->fetchAll();

    $hasUser=false;
    foreach ($users as $user){
        if($user['username'] == $_POST['username'] && $user['pass'] == $_POST['password']){
            $stmUpdate = 'UPDATE users SET is_log=1 WHERE id='.$user['id'];
            $connection->prepare($stmUpdate)->execute();
            $hasUser=true;
            break;
        }
    }

    if($hasUser){
        echo 'http://localhost/CV/index.php';
    }
    else{
        die('nqma takuv');
    }
}
