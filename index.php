<?php
	include "include/dbcon.php";
?>
<!DOCTYPE html>
<html>
<title>Thesis Panel Repository 2.0</title>
<meta charset="UTF-8">
<link rel="shortcut icon" href="images/logo.png" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" type="text/css" href="google/fafa.css">
<link href="dist/css/select2.min.css" rel="stylesheet" />
<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
    background-image: url('images/bg.jpg');
    min-height: 100%;
    background-position: center;
    background-size: cover;
}
</style>
<body>


<div class="bgimg w3-display-container w3-animate-opacity w3-text-white ">
  <div class="w3-display-middle w3-card-4 w3-padding-large w3-round w3-dark-grey">
	 <h3 class="w3-text-shadow" style="text-shadow:2px 2px 0px #444">
	 <img src="images/logo.png" class="w3-white" width="60" height="60" style="position:relative !important;top:33px;z-index:99999;"/> 
	 <span class="w3-hide-small w3-hide-medium">Research Repository System</span><span class=" w3-hide-large"><strong>RSS</strong></span><hr class="w3-animate-left" style="margin-top:0px;border-top:3px solid #eee;min-width:250px"></h3>
	 <p style="position:relative;top:-25px;font-size:11px" class="w3-right w3-text-small">© 2017 <span class="w3-hide-small w3-hide-medium">Research Repository System</span><span class="w3-hide-large">RSS</span>. All Rights Reserved.</p>
	 
      <div class="w3-container w3-padding-16" id="loginFormCon">
		<form class="w3-form" id="login_form" method="" action="">
			<div class="w3-padding-16" style="position:relative;">
				<span class="fa fa-user w3-opacity fa-lg w3-text-black" style="position:absolute;right:10px;top:40%;z-index:99999;" id="i1"></span>
				<input class="w3-input w3-medium w3-round w3-opacity" style="padding-left: 20px;" type="text" id="username" name="username" placeholder="Username" required>
			</div>
			<div class="w3-padding-16" style="position:relative;">
				<span class="fa fa-lock fa-lg w3-text-black "style="position:absolute;right:10px;top:40%;z-index:99999;" id="i2"></span>
				<input class="w3-input w3-medium w3-round w3-opacity" style="padding-left: 20px;" type="password" id="password" name="password" placeholder="Password" required>
			</div>
			<div class="w3-padding-16" style="position:relative;">
				<button class="w3-btn w3-btn-block w3-btn-small w3-grey w3-block w3-hover-opacity" type="button" onClick="logmein()"><i class="fa fa-unlock fa-lg"></i> <span class="w3-wide" style=""> LOGIN</span></button>
			</div>
			<div class="w3-container" style="display:none;" id="status_on_login"></div>
		</form>
    </div>
  </div>
</div>

</body>
<script type="text/javascript" src="js/jquery.js" ></script>
<script type="text/javascript" src="js/jquery-ui.js" ></script>  
<script type="application/javascript" src="js/actions.js"></script>
<script src="dist/js/select2.min.js"></script>
<script>
$( document ).ready(function() {
	
   $(':input').on('focus', function() {
	  var id = this.id;
	  if(id == 'username'){
		  $('#i1').removeClass('w3-text-black');
		  $('#i1').addClass('w3-text-red');
		  $('#i1').removeClass('w3-opacity');
	  }else{
		  $('#i2').removeClass('w3-text-black');
		   $('#i2').addClass('w3-text-red');
		  $('#i2').removeClass('w3-opacity');
	  }
	}).on('blur', function() {
		 var id = this.id;
	  if(id == 'username'){
		   $('#i1').addClass('w3-text-black');
		  $('#i1').removeClass('w3-text-blue');
		  $('#i1').addClass('w3-opacity');
	  }else{
		   $('#i2').addClass('w3-text-black');
		   $('#i2').removeClass('w3-text-blue');
		  $('#i2').addClass('w3-opacity');
	  }
	});
});
</script>
</html>
