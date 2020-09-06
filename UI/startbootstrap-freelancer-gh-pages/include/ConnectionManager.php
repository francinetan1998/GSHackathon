<?php

class ConnectionManager {

    public function getConnection() {
        $servername = 'ec2-18-140-60-54.ap-southeast-1.compute.amazonaws.com';
        $username = 'admin';
        $password = '!QAZ2wsx';
        $dbname = 'gshdb';
        
        // Create connection
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);     
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // if fail, exception will be thrown

        // Return connection object
        return $conn;
    }

}