$(document).ready(function(){

	$('.thumbnail').hover(
		function(){
			$(this).find('.caption').fadeIn(250);
		},
		function(){
			$(this).find('.caption').fadeOut(205);
		}
  );
  
  var contactform =  document.getElementById('contactForm');
    contactform.setAttribute('action', '//formspree.io/' + 'eleanor52' + '@' + 'live' + '.' + 'ca');
  
  $.ajax({
    url: "//formspree.io/eleanor52@live.ca", 
    method: "POST",
    data: {message: "hello!"},
    dataType: "json"
  });
  
//  $("#contactForm").submit(function(event){
//    // cancels the form submission
//    event.preventDefault();
//    submitForm();
//  });
//  
//  function submitForm(){
//    // Initiate Variables With Form Content
//    var name = $("#name").val();
//    var email = $("#email").val();
//    var message = $("#message").val();
// 
//    $.ajax({
//        type: "POST",
//        url: "index.php",
//        data: "name=" + name + "&email=" + email + "&message=" + message,
//        success : function(text){
//            if (text == "success"){
//                formSuccess();
//            }
//        }
//    });
//  }
//  
//  function formSuccess(){
//    $( "#msgSubmit" ).removeClass( "hidden" );
//  }
  
});	