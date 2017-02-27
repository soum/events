<!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script type='text/javascript' data-main="js/common" src='node_modules/requirejs/require.js'></script>
</head>

<body>
	<div class="container">
		<h1>Create your event</h1>
		<form class="event-form">
		<div class="form-group">
		    <label for="exampleSelect1">Select Event Type</label>
		    <select class="form-control" id="exampleSelect1">
		      <option>badminton</option>
		      <option>pickleball</option>
		      <option>handball</option>
		    </select>
		</div>
		<div class="form-group">
		  <label for="example-datetime-local-input" class="col-2 col-form-label">Select Date and Time</label>
		  <div class="col-10">
		    <input class="form-control" type="datetime-local" value="" id="example-datetime-local-input">
		  </div>
		</div>
		<button type="submit" class="btn btn-primary">Create Evenet</button>
		</form>
	</div>
	<script type='text/javascript'>
		require(['common'], function(){
			require(['js/app.js']);
		})
	</script>
</body>

</html>
