<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

session_start();

function printErrors() {
    $error_string = "";
    if(isset($_SESSION['errors'])){
        $error_string = '<div class="container">
        <div class="row justify-content-md-center">
            <div class="w-50 alert alert-warning alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                ' . $_SESSION['errors'] . '
            </div>
      </div>
    </div><br>';
        unset($_SESSION['errors']);
    }

    return $error_string;
}

function callAPI($url){
    $curl = curl_init();
 
    // OPTIONS:
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
       'Content-Type: application/json',
    ));
 
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
 
    // EXECUTE:
    $result = curl_exec($curl);

    echo $result;
    // if(!$result){ die("Connection Failure"); }
    // curl_close($curl);
    // return $result;
 }

?>