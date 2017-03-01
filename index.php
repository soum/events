<!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="www/node_modules/bootstrap/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script type='text/javascript' data-main="www/js/common" src='www/node_modules/requirejs/require.js'></script>
</head>

<body>
	<div class="container">
	    <div class="page-header">
	        <h1>Event Portal</h1>
            <p class="lead">Create your event schedule and let your friend RSVP</h1>
        </div>
        
		<form class="event-form row">
    		<div class="form-group col-md-4">
    		    <label for="col-form-label">Select Event Type</label>
    		    <select class="form-control" id="event" name="event">
    		      <option></option>
    		      <option>badminton</option>
    		      <option>pickleball</option>
    		      <option>handball</option>
    		    </select>
    		</div>
    		<div class="form-group col-md-4">
    		  <label for="example-datetime-local-input" class="col-form-label">Select Date</label>
    		  
    		    <input class="form-control" name="date" type="date" value="" id="date">
    		  
    		</div>
    		<div class="form-group col-md-2">
    		  <label for="example-datetime-local-input" class="col-form-label">Select Time</label>
    		  
    		    <input class="form-control" name="time" type="time" value="" id="time">
    		  
    		</div>
    		<div class="col-md-2">
    		     <label for="example-datetime-local-input" class="col-form-label" style="color: white;">Submit</label>
    		  <button type="submit" class="btn btn-primary">Create Evenet</button>
    		</div>
		</form>
		<div class="col-md-4 response"></div>
	</div>
	<script type='text/javascript'>
		require(['common'], function(){
			require(['www/js/app.js']);
		})
	</script>
</body>

</html>
