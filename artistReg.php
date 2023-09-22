<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Ideal Bits</title>
 		<link rel="stylesheet" href="css/style.css" type="text/css" />
 		<script type="text/javascript" src="Script/jquery.js"></script>
	</head>
 
<body id="index" class="home">
	<div class="wrapper">
		<div class="header">

			<img src="assets/logo.jpg" alt="logo" class="logo" />

			<div class="rightcontainer">


				

			</div>

		</div>
		<div class="nav">

		</div>
		<div class="Banner">
	
			<div class="left-content">
			</div>
			<div class="signUpDetails">
					<h1>
						Sign Up 
					</h1>
					<div class="fillform">
						<form name="signupForm" method="get" id="bandsignup" >
							<ul>
								<li class="signUP signalign">	
									<label for="userID">
										ArtistID <span class="red">*</span>
									</label>
									<input type="text" name="UserID" value="" placeholder="" id="userID" />
									<span class="required">Re-enter</span>
								</li>
								<li class="signUP signalign">	
									<label for="uname1">
										ArtistName <span class="red">*</span>
									</label>
									<input type="text" name="uname" value="" placeholder="" id="uname1" />
									<span class="required">Re-enter</span>
								</li>
								<li class="signUP signalign" >
									<label for="password">
										Password <span class="red">*</span>
									</label>
									<input type="password" value="" name="passwordenter" class="pwd" id="password" />
									<span class="required">Re-enter</span>								
								</li>
								<li class="signUP signalign">	
									<label for="year">
										Year of Birth
									</label>
									<input type="text" name="year" value="" placeholder="Enter the year of birth" id="year" />
								</li>
								<li class="signUP signalign">	
									<label for="city">
										City
									</label>
									<input type="text" name="city" value="" placeholder="Enter the city" id="city" />
								</li>
								<li class="signUP signalign">	
									<label for="email">
										Email
									</label>
									<input type="text" name="email" value="" placeholder="" id="email" />
									<span class="required">Re-enter</span>	
								</li>
								<li class="signUP signalign">	
									<label for="bio">
										Bio
									</label>
									<textarea  cols="40" class="bio" name="bio"></textarea>
									
								</li>
								<li class="signUP signinArtist">	
									
									<input type="submit" name="subuser" value=" Sign Up" class="signupButton" />
								
								</li>
								<li class="signUP">	
								<p class="regfail" id="regfail" style="display:none;">Your Registration failed !</p>
								</li>
							</ul>

						</form>
					</div>
			
			</div>			
			
		</div>
		<div class="content">
			<div class="left-content">
			</div>
			<div class="middle-content">
				<h1 style="text-decoration:underline" >ABOUT US</h1>
				<p>
				Check out this band for some great musician bio examples. At a glance, you know who each musician is, what they do, and one interesting detail about them. Short and sweet this music band website created by my team Ideal bits.
				</p>
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
				<a href="https://www.facebook.com/Connectionsoriginalmusicall" class="socialnet" style="clear:left"></a>
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

		/*user already exists*/

		$(window).on('load',function(e){

		function getParameterByName(name,href )
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
			var validationsuccess=getParameterByName("registeration",link);
			if(validationsuccess=="registered")
			{
				$('#regfail').show();
			}
		});


		/*signup user*/
		$('.signupButton').on('click',function(e){

			var ck_id = /[A-Za-z]+[0-9]+/ig;
			var ck_name=/[A-Za-z]+/;
			var ck_email=/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
			var countVal=0;
			var userID=$('#userID').val();
			var newname=$('#uname1').val();
			var newemail=$('#email').val();
			//console.log(userID);

			//alert(ck_id.test(userID));
			//validating UserID as a seq of alphabets and number
			if(ck_id.test(userID)==true)
			{
				
				countVal++;
					
				$('#userID').next().hide();
			}
			else
			{
			
				$('#userID').next().show();
			}
			//name validation
			if(ck_name.test(newname)==true)
			{
				countVal++;
					
				$('#uname1').next().hide();
			}
			else
			{
				
				$('#uname1').next().show();
			}
			//email validation

			console.log(newemail);
			if(ck_email.test(newemail)==true)
			{
				console.log("xyz");
				countVal++;
					
				$('#email').next().hide();
			}
			else
			{
				console.log("123");
				$('#email').next().show();
			}
						

			/*console.log(countVal);
			if(countVal==3)
			{

			}*/

		});		






		/*on click of save the band data is saved*/
	$('#bandsignup').on('submit',function(e){


					event.preventDefault();
					
				  
				    var values = $(this).serialize();
				  
					var userID=$('#userID').val();
				    if(userID !="")
				    {
				    	  //alert(userID);
				    	  console.log(userID);
				    $.ajax({
				        url: "Script/bsignup.php",
				        type: "get",
				        data: values,
				        success: function(response){
						//alert("success");
						var array1 = JSON.parse(response);
						var flag=array1.flag;
						
							if(flag !=1)
							{
							document.location.href="http://localhost/DB-Final-Project/index.php";
					        }else
					        {
					        document.location.href="http://localhost/DB-Final-Project/artistReg.phpl?registeration=registered";
					        $('#regfail').show();
					        }
				        },
				        error:function(){
				            alert("failure");
				            //$("#result").html('There is error while submit');
				        }
				    });
				}
				else
				{
					document.href.location="http://localhost/DB-Final-Project/artistReg.php";
				}
	});	
	});

</script>
</html>
