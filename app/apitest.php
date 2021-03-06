<?php

// function callAPI($method, $url, $data){
//    $curl = curl_init();
//    switch ($method){
//       case "POST":
//          curl_setopt($curl, CURLOPT_POST, 1);
//          if ($data)
//             curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
//          break;
//       case "PUT":
//          curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
//          if ($data)
//             curl_setopt($curl, CURLOPT_POSTFIELDS, $data);			 					
//          break;
//       default:
//          if ($data)
//             $url = sprintf("%s?%s", $url, http_build_query($data));
//    }

//    // OPTIONS:
//    curl_setopt($curl, CURLOPT_URL, $url);
//    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
//       'Content-Type: application/json',
//    ));

//    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

//    // EXECUTE:
//    $result = curl_exec($curl);
//    if(!$result){ die("Connection Failure"); }
//    curl_close($curl);
//    return $result;
// }

// $data = array(
//     'category' => 'business',
//     'sortBy' => 'publishedAt',
//     'apiKey' => 'daa1f687c4e149de9f5a46ab6604003c'
// );

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
   if(!$result){ die("Connection Failure"); }
   curl_close($curl);
   return $result;
}

$results = json_decode(callAPI("http://newsapi.org/v2/everything?category=business&sortBy=publishedAt&apiKey=daa1f687c4e149de9f5a46ab6604003c"), true);

var_dump($results);

?>