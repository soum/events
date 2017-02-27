define(['jquery'], function($){

  $('.event-form').on('submit', function(e){
  	e.preventDefault();
  	
  	$.ajax({
      type: "POST",
      url: "/createevent.php",
      dataType: "json",
      data: {serviceKey: "nncmzncjhasa_12388466400_jhashdgfhgasf"},
      success: function (data) {
        console.log(data)
      }
    });
  	
  })
});
