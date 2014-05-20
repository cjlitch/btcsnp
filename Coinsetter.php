<?php
    $data = [];

    $raw = file_get_contents("https://api.coinsetter.com/v1/marketdata/ticker");
     
    //Decode the JSON into a php object
    $raw = json_decode($raw);

    $raw->Last->Price = floatval($raw->Last->Price);
    $raw->Bid->Price = floatval($raw->Bid->Price);
    $raw->Ask->Price = floatval($raw->Ask->Price);
    
    array_push($data, array(
        'last' => $raw->Last->Price,
        'bid' => $raw->Bid->Price,
        'ask' => $raw->Ask->Price
        )
    );
     
    //Print out the final JSON object
    echo json_encode($data);
?>
