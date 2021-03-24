<?php
require "./class/Task.php";
require "./vendor/testTools/testTool.php";

$testCases = [
    [
        "dataDaTestare"=>"2030-03-23",
        "expired"=>FALSE
    ],
    [
        "dataDaTestare"=>"2001-03-23",
        "expired"=>TRUE
    ]
];

foreach($testCases as $testCase){
    $Compito = new Task();
    $Compito->$expirationDate=$testCase['dataDaTestare'];
    echo($Compito->getExpirationDate());
    //echo(new DateTime());
    assertEquals($testCase['expired'],$Compito->isExpired());
}


