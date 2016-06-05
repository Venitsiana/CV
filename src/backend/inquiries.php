<?php
/**
 * Created by PhpStorm.
 * User: venim
 * Date: 6/5/2016
 * Time: 3:32 PM
 */

class inquiries{

    public function getInquiries(){
        include '../../DBConnection.php';

        $connection = DBConnection::getDBConnection();
        $statement1 = 'SELECT * FROM inquiries';
        $stmt1 = $connection->prepare($statement1);
        $stmt1->execute();

        return $stmt1->fetchAll();
    }
}