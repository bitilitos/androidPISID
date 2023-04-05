<?php
	$db="localhost";
	$database="rats"; // Alterar nome da BD se necessario

    $username = $_POST["username"];
    $password = $_POST["password"];

//    $username = "Catarina";
//    $password = "password";

    $conn = mysqli_connect($db,$username,$password,$database);
	$sql = "SELECT Message, Measure, Room, Sensor, AlertType, Hour, WrittenTime 
	from alert where Hour >= now() - interval 60 minute ORDER BY Hour DESC";

	$result = mysqli_query($conn, $sql);
	$response["alerts"] = array();
	if ($result){
		if (mysqli_num_rows($result)>0){
			while($r=mysqli_fetch_assoc($result)){
				$ad = array();
				// Alterar nome dos campos da tabela se necessario
				$ad["Mensagem"] = $r['Message'];
				$ad["Leitura"] = $r['Measure'];
				$ad["Sala"] = $r['Room'];
				$ad["Sensor"] = $r['Sensor'];				
				$ad["TipoAlerta"] = $r['AlertType'];
				$ad["Hora"] = $r['Hour'];
				$ad["HoraEscrita"] = $r['WrittenTime'];
				array_push($response["alerts"], $ad);
			}
		}
	}
	mysqli_close ($conn);
	
	header('Content-Type: application/json');
	// tell browser that its a json data
	echo json_encode($response);
	//converting array to JSON string
?>