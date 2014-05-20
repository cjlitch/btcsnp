<?php
    $data = [];
    $raw = file_get_contents("https://www.bitstamp.net/api/ticker/");
     
    //Decode the JSON into a php object
    $raw = json_decode($raw);

    $raw->last = floatval($raw->last);
    $raw->bid = floatval($raw->bid);
    $raw->ask = floatval($raw->ask);
    
    array_push($data, array(
        'last' => $raw->last,
        'high' => $raw->high,
        'low' => $raw->low,
        'volume' => $raw->volume,
        'bid' => $raw->bid,
        'ask' => $raw->ask
        )
    );
     
    //Print out the final JSON object
    echo json_encode($data);
?>
