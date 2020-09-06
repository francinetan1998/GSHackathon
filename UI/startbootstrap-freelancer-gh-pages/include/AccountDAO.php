<?php

require_once 'common.php';

class AccountDAO {

    public function authenticate($email, $password) {
        
        $connMgr = new ConnectionManager();
        $pdo = $connMgr->getConnection();

        $sql = "SELECT * FROM account WHERE email=:email";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $status = $stmt->execute();

        if (!$status) {
            $err = $stmt->errorinfo();
            var_dump($err);
        }
        
        $return_msg = "";

        if ($row = $stmt->fetch()) {
            // Found Email
            if ($row['pass'] == $password) {
                $return_msg = "SUCCESS";
            } else {
                $return_msg = "Password is incorrect.";
            }
        } else {

            $return_msg = "Email is not registered with us.";
        }

        $stmt = null;
        $pdo = null;

        return $return_msg;
    }

    public function signUp($fullname, $email, $password, $invesment, $achievement, $capital) {
        
        $connMgr = new ConnectionManager();
        $pdo = $connMgr->getConnection();
        
        $sql = "SELECT * FROM points";
        $stmt = $pdo->prepare($sql);

         $stmt->setFetchMode(PDO::FETCH_ASSOC);
         $status = $stmt->execute();

         while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $rules[$row['category'] . "_" . $row['opt']] = $row['points'];
        }

        $stmt = null;
        $pdo = null;

        $connMgr = new ConnectionManager();
        $pdo = $connMgr->getConnection();

        $total = $rules[$invesment] + $rules[$achievement] + $rules[$capital];

        $sql = "INSERT INTO ACCOUNT (fullname, email, pass, points) values (:fullname, :email, :pass, :points)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":fullname", $fullname, PDO::PARAM_STR);
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->bindParam(":pass", $password, PDO::PARAM_STR);
        $stmt->bindParam(":points", $total, PDO::PARAM_INT);

        $status = $stmt->execute();

        if ($status) {
            $returnMsg = $pdo->lastInsertId();
        } else {
            $returnMsg = "FAILED";
        }

        $stmt = null;
        $pdo = null;

        return $returnMsg;

    }

    public function toRecommend($invesment, $achievement, $capital) {
        
        $connMgr = new ConnectionManager();
        $pdo = $connMgr->getConnection();
        
        $sql = "SELECT * FROM points";
        $stmt = $pdo->prepare($sql);

         $stmt->setFetchMode(PDO::FETCH_ASSOC);
         $status = $stmt->execute();

         while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $rules[$row['category'] . "_" . $row['opt']] = $row['points'];
        }

        $total = $rules[$invesment] + $rules[$achievement] + $rules[$capital];

        $stmt = null;
        $pdo = null;


    }
}

?>