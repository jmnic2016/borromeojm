<?php
    require_once('connect.php');
    require_once('tokens.php');
    
    session_start();

    $user = $_POST['username'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM tbl_tokentest WHERE username = '" . $user . "' AND password = '" . $password . "'";
	$result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    
	if($count == 1){
		$sql = "SELECT * FROM tbl_tokentest WHERE username = '" . $user . "'";
		$result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);

        $id = $row['id'];
        $jwt = generateToken($id, 0, $conn);
    
        $_SESSION['id'] = $id;
        $_SESSION['jwt'] = $jwt;
        
        header("Location: ../validate.html");
    }else{
        echo "Erro login";
    }
?>