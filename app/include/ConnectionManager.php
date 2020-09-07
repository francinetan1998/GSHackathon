<?php

class ConnectionManager {

    public function getConnection() {
        $servername = 'db_server_name';
        $username = 'db_username';
        $password = '!db_password';
        $dbname = 'gshdb';
        
        // Create connection
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);     
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // if fail, exception will be thrown

        // Return connection object
        return $conn;
    }

}
