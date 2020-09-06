<?php

require_once 'include/common.php';

$url = "https://www.alphavantage.co/query?function=OVERVIEW&symbol=" . $_POST["symbol"] . "&apikey=3QLNMU88JUJD7Q50";

$results = json_decode(file_get_contents($url), true);

if (empty($results)) {
    $_SESSION["results"] = '<p style="color: red;">No results for requested stock symbol!</p>';
} else {
    $_SESSION["results"] = '<div class="card" >
    <div class="card-body">
      <h5 class="card-title">' . $results["Name"] . ' (' . $results["Symbol"] .')</h5>
      <p class="card-text">' . $results["Description"] . '</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">52 Week High: ' . $results["52WeekHigh"] . '</li>
      <li class="list-group-item">52 Week Low: ' . $results["52WeekLow"] . '</li>
      <li class="list-group-item">50 Day Moving Average: ' . $results["50DayMovingAverage"] . '</li>
      <li class="list-group-item">200 Day Moving Average: ' . $results["200DayMovingAverage"] . '</li>
      <li class="list-group-item">Dividend Per Share: ' . $results["DividendPerShare"] . '</li>
    </ul>
  </div>';
    
}

header("Location: 12_markets.php");
return;

?>