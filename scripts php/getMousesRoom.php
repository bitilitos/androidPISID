<?php
	$db="localhost";
	$database="rats"; // Alterar nome da BD se necessario

    $username = $_POST["username"];
    $password = $_POST["password"];

    //    $username = "Catarina";
    //    $password = "password";

    $conn = mysqli_connect($db,$username,$password,$database);
	$sql = "SELECT Room, TotalMouses FROM mousesperroom ORDER BY Room ASC";
	$result = mysqli_query($conn, $sql);
	$response["readings"] = array();
	if ($result){
		if (mysqli_num_rows($result)>0){
			while($r=mysqli_fetch_assoc($result)){
				$ad = array();
				// Alterar nome dos campos se necessario
				$ad["Room"] = $r['Room'];
				$ad["TotalMouses"] = $r['TotalMouses'];
				array_push($response["readings"], $ad);
			}
		}	
	}
	mysqli_close ($conn);
	
	header('Content-Type: application/json');
	// tell browser that its a json data
	echo json_encode($response);
	//converting array to JSON string
?>