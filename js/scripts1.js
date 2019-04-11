$(document).ready(function(){
  $(".login").click(function(){
      $(".login-block").toggle();
      $(".trends").toggle();
    })
    $(".sign").click(function(){
      $(".login-block").hide();
      $(".signup-block").show();
    })
    $(".login-form").submit(function(event){
      event.preventDefault();
      userName = $(".name").val();
      userEmail = $(".email").val();
      $(".login-block").fadeOut();
      $(".trends").fadeIn();
    })
});
