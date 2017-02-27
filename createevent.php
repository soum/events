<?php 
	header("Content-Type:application/json");

	$event_name = $_GET['eventName'];
	$event_type = $_GET['eventType'];
	$event_date = $_GET['eventDate'];
	$event_creation_date = $_GET['eventCreationDate'];

	function makeDbCall(){
		
		//Connect to the database
    	$host = "127.0.0.1";
    	$user = "soum";                     //Cloud 9 username
    	$pass = "";                         //NO password by default!
    	$db = "events";                     //database name you want to connect to
    	$port = 3306;                       //The port #. It is always 3306

		// Create connection
		$con = new mysqli($host, $user, $pass, $db, $port);
		// Check connection
		if (mysqli_connect_errno($con))
	      {
	      echo "Failed to connect to MySQL: " . mysqli_connect_error();
	      }
	     $sql = "INSERT INTO newevent (eventid) VALUES ('ghosh')";
	    		
	    if (!mysqli_query($con,$sql))
	      {
	      die('Error: ' . mysqli_error($con));
	      }
	    echo "1 record added";
	    mysqli_close($con);
	}

	function response($status, $message, $data) {
		header("HTTP/1.1 $status $status_message");
		$response['status'] = $status;
		$response['message'] = $message;
		$response['data'] = $data;
		
		$json_response = json_encode($response);
		echo $json_response;
	}

	makeDbCall();

?>