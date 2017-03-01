<?php 
	//header("Content-Type:application/json");

	$event_type = $_POST['event'];
	$event_date = $_POST['date'];
	$event_time = $_POST['time'];
	$event_id = $event_type.'-'.$event_date.'-'.$event_time;
	$creation_date = date("Y-m-d");

	function makeDbCall($event_type, $event_date, $event_time, $event_id,$creation_date){
		
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
	     $sql = "INSERT INTO newevent (eventid,eventtype,eventdate,eventtime,creationdate) 
	     VALUES ('$event_id', '$event_type', '$event_date', '$event_time', '$creation_date')";
	    		
	    if (!mysqli_query($con,$sql)){
	      //die('Error: ' . mysqli_error($con));
	      response(400, 'error', mysqli_error($con));
	    }
	    
	    response(200, 'success', $sql);
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

	makeDbCall($event_type, $event_date, $event_time, $event_id,$creation_date);

?>