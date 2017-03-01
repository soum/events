<?php 
	header("Content-Type:application/json");

	$event_type = $_POST['event'];
	echo $event_type;
	// $event_date = $_POST['date'];
	// $event_time = $_POST['time'];
	// $event_id = $event_type.$event_date.$event_time;
	// $event_creation_date = date("Y-m-d");

	// function makeDbCall(){
		
	//     //response(200, 'success', $event_type);
	//     echo $event_type;

	// }

	function response($status, $message, $data) {
		header("HTTP/1.1 $status $status_message");
		$response['status'] = $status;
		$response['message'] = $message;
		$response['data'] = $data;
		
		$json_response = json_encode($response);
		echo $json_response;
	}

	//makeDbCall();

?>