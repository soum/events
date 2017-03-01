define(['jquery', 'createeventformhandler'], function($, eventform){

  $('.event-form').on('submit', function(e){
  	e.preventDefault();
  	
  	var serialize = new eventform();
  	var formObj = serialize.serialize($(this));
  	
  	$.ajax({
      type: "POST",
      url: "./createevent.php",
      dataType: "html",
      data: formObj,
      success: function (data) {
        //var o = JSON.parse(data);
        $('.response').append(data);
      }
    });
  	
  })
});
