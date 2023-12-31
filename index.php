<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Ideal Bits</title>
 		<link rel="stylesheet" href="css/style.css" type="text/css" />
 		<script type="text/javascript" src="Script/jquery.js"></script>
 		<script src="http://maps.googleapis.com/maps/api/js"></script>

 		
	</head>
 
<body id="index" class="home">
	<div class="wrapper">
		<div class="header">

			<img src="assets/logo.jpg" alt="logo" class="logo" />

			<div class="rightcontainer">
			<form class="signform" method="get" action="Script/validate.php" >
				<ul>
					<li class="signIN">	
					<label for="mailID">
						Email
					</label>
					<input type="text" name="name1" value="" id="mailID" autocomplete = "off" />
					</li>
					<li class="signIN" >
					<label for="password">
						Password
					</label>
					<input type="password" value="" name="password1" class="pwd" id="password" autocomplete = "off" />
					<input type="submit" value="Submit" class="submitButton"/>
					<p class="red" style="clear:left;" id="invalid">please enter valid credentials</p>
					</li>
					
					
					
				</ul>
			</form>
			</div>

		</div>
		<div class="nav">

		</div>
		<div class="Banner">
			<img src="assets/banner.jpg" class="bannerImg" />
				<div class="signUp">
					<div class="signuser">
						<a href="userReg.php"> Sign Up Users</a>
					</div>
					<div class="signartist">
						<a href="artistReg.php">  Sign Up Artists</a>
					</div>
				</div>
		</div>
		<div class="content">
			<div class="left-content">
			<h1 style="text-decoration:underline;color:#fff;"  >ABOUT US</h1>
				<p style="color:#fff;">Connect through your musical tastes... </p>
			</div>
			<div class="middle-content" id="googleMap" style="background:#000;">

				
			</div>
			<div class="right-content">
				<h1 style="margin-top:32px;text-decoration:underline">Latest Upcoming Events </h1>
					<h2>Bangalore City Music festival</h2>
					<h2>September 22 ,2023 </h2>
					<h2>Venue : HKBK College </h2>
			</div>

		</div>
		<div class="footer">
			<div class="left-content wifooterdthalign">
				<h1>Subscribe to Us</h1>
				<a href="mailto:idealbits@gmail.com">idealbits@gmail.com</a>
			</div>
			<div class="left-content wifooterdthalign" style="margin-left:0px">
				<h1>Contact Us</h1>
				<h2>123-456-7890</h2>
			</div>
			<div class="left-content social-network" style="margin-left:0px">
				<h1>Follow Us</h1>
				<a href="https://www.facebook.com/idealbitsmusical" class="socialnet" style="clear:left"></a>
				<a href="https://twitter.com/music" class="socialnet twitter"></a>
				<a href="http://www.youtube.com/user/FlyingBalalaikaBros" class="socialnet youtube"></a>
			</div>
			<div class="left-content wifooterdthalign" style="margin-left:0px">
				<h2 style="margin-top:0px;font-size:14px">Copyrights reserved 2023.</h2>
				<h2 style="margin-top:5px;font-size:10px">Developed and managed by Samreen and Sahana and Swati</h2>


			</div>



		</div>
	</div>
</body>
<script type="text/javascript">
	$(document).ready(function(e){

		
 		$('.signform').attr('autocomplete','off');
		

		/*validating login */


		$(window).on('load',function(e){

		function getParameterByName( name,href )
		{
		  name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
		  var regexS = "[\\?&]"+name+"=([^&#]*)";
		  var regex = new RegExp( regexS );
		  var results = regex.exec( href );
		  if( results == null )
		    return "";
		  else
		    return decodeURIComponent(results[1].replace(/\+/g, " "));
		}


			var link=window.location.href;
			var validationsuccess=getParameterByName("login",link);
			if(validationsuccess=="failed")
			{
				$('#invalid').show();
			}
		});

		$('.signuser').on('click',function(e){

			document.location.href="userReg.php";

		});
		$('.signartist').on('click',function(e){

			document.location.href="artistReg.php";
			
		});	

	});

</script>
<script>
var myCenter=new google.maps.LatLng(40.7506,-73.9936);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:5,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
</html
