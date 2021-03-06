// JavaScript Document
$(document).ready(function() {
	$.ajax({
		url : "../data.php",
		type : "GET",
		success : function(data){
			console.log($.parseJSON(data));
			$('#calendar').fullCalendar({
				header: {
					left: 'prev,next today',
					center: 'title',
					right: 'month,listWeek'
				},
				editable: false,
				eventLimit: true, // allow "more" link when too many events
				events: $.parseJSON(data),
				eventClick: function(event) {
						if (event.url) {
							window.open(event.url,"_self");
							return false;
						}
					}
			});
		}
	});
	$('#userListTbl').DataTable({
		columnDefs: [
		   { orderable: false, targets: -1 }
		]
	});
	$('#researchTbl').DataTable({
		columnDefs: [
		   { orderable: false, targets: [-2,-1] }
		]
	});
	$('#res_desc').summernote({
		height: 200,
		 toolbar: [
		  ['style', ['bold', 'italic', 'underline', 'clear']],
		  ['font', ['strikethrough']],
		  ['fontsize', ['fontsize']],
		  ['para', ['ul', 'ol', 'paragraph']],
		  ['height', ['height']],
		  ['view', ['codeview']]
		]
	});
});
// Get the Sidebar
	var mySidebar = document.getElementById("mySidebar");

	// Get the DIV with overlay effect
	var overlayBg = document.getElementById("myOverlay");

	// Toggle between showing and hiding the sidebar, and add overlay effect
	function w3_open() {
		if (mySidebar.style.display === 'block') {
			mySidebar.style.display = 'none';
			overlayBg.style.display = "none";
		} else {
			mySidebar.style.display = 'block';
			overlayBg.style.display = "block";
		}
	}

	// Close the sidebar with the close button
	function w3_close() {
		mySidebar.style.display = "none";
		overlayBg.style.display = "none";
	}


	function open_nav_accord(y) {
		var x = document.getElementById(y);
		if (x.className.indexOf("w3-show") == -1) {
			x.className += " w3-show";
			x.previousElementSibling.className += " w3-blue";
		} else { 
			x.className = x.className.replace(" w3-show", "");
			x.previousElementSibling.className = 
			x.previousElementSibling.className.replace(" w3-blue", "");
		}
	}

function logmein(){
	var username=$("#username").val();
	var password=$("#password").val();
	
	if(username ==""){
		$("#loading_on_login").show().html("<div class='w3-panel w3-red w3-padding'>Enter a Username.</div>");
		$("#loginFormCon").effect("shake");
		setTimeout(function(){$("#loading_on_login").hide("slow");},2000);
		document.getElementById("username").focus();
		return false;
	}else if(password==""){
		$("#loading_on_login").show().html("<div class='w3-panel w3-red w3-padding'>Enter a Password.</div>");
		$("#loginFormCon").effect("shake");
		setTimeout(function(){$("#loading_on_login").hide("slow");},2000);
		document.getElementById("password").focus();
		return false;
	}else{
		var data="username="+username+"&password="+password;
		$.ajax({
			type: "POST",
			url: "include/actions.php",
			data: data,
			success: function(data){
				console.log(data);
				if(data == "1"){
					location="admin/";
				}else if(data == "2"){
					location="research/";
				}else if(data == "3"){
					location="panel/";
				}else if(data == "4"){
					location="adviser/";
				}else if(data=="ERROR"){
					$("#status_on_login").html("<div class='w3-panel w3-red w3-padding'>ACCESS DENIED!</div>").fadeIn("slow").delay(2000).hide("slow");
					//setTimeout(function(){$("#loading_on_login").hide("slow");},2000);
					document.getElementById("password").focus();
				}
			}
		});
	}
}
