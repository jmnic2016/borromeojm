<?php
    require_once('connect.php');
    require_once('tokens.php');
    session_start();
    $jwt = $_SESSION['jwt'];    
    $id = $_SESSION['id'];
    validate($id, $jwt, $conn);


    function validate($id, $userToken, $conn){
        $existingToken = generateToken($id, 1, $conn);
        echo "Existing token: ". $existingToken;

        if($userToken===$existingToken){
            echo "<br> Authentication Success!";
            echo "<br>";
            echo "$userToken";
        }else{
            echo "<br> Authentication Faild";
            echo "<br>";
            echo "$userToken";
        }
    }
?>