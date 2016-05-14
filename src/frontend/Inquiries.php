<?php

class Inquiries{
    
    function saveInquiry(){
        $connection = DBConnection::getDBConnection();

        if(@$_POST){
	
            $statement1 = ' INSERT INTO inquiries( firstname )
                            VALUES ('.@$_POST['firstname'].')';

            $stmt1 = $connection->prepare($statement1);
            //$stmt1->bindValue(":NAME", strip_tags($_POST["name"]), PDO::PARAM_STR);
            //$stmt1->bindValue(":COMMENT", strip_tags($_POST["comment"]), PDO::PARAM_STR);
            $stmt1->execute();
        }
    }
}
