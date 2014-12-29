<?php 
session_start(); 
include_once "includes/config.php";

$JobSubmitSuccess = $_REQUEST['ProjectSubmit'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>matchNEST | Simple, Efficient Home Renovation</title>
<meta name="description" content="Simple, efficient shopping for home renovations online. Schedule a free in-home Nestimate&#8482; and receive multiple online bids from trusted, pre-screened contractors in your area. Find your next carpenter, painter, flooring pro or general contractor for your bath or kitchen remodelling project at www.matchnest.com" />
<meta name="robots" content="index, follow"/>
<link href="css/matchnest.css" rel="stylesheet" type="text/css" media="screen"/>

<style type="text/css">
.ontop {
    position: absolute;
    top: 140px;
    bottom: 0;
    left: 10px;
    right:0;
    z-index: 100;
	color: #fff;
}
.carousel.fade {
  opacity: 1;
}
.carousel.fade .item {
  -moz-transition: opacity ease-in-out .7s;
  -o-transition: opacity ease-in-out .7s;
  -webkit-transition: opacity ease-in-out .7s;
  transition: opacity ease-in-out .7s;
  left: 0 !important;
  opacity: 0;
  top:0;
  position:absolute;
  width: 100%;
  display:block !important;
  z-index:1;
}
.carousel.fade .item:first-child {
  top:auto;
  position:relative;
}
.carousel.fade .item.active {
  opacity: 1;
  -moz-transition: opacity ease-in-out .7s;
  -o-transition: opacity ease-in-out .7s;
  -webkit-transition: opacity ease-in-out .7s;
  transition: opacity ease-in-out .7s;
  z-index:2;
}
</style>

</head>

<body>

<div class='container' style="margin:auto; text-align:center">
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-0"></div>
		<div class="col-lg-12">
			<div style=" margin:auto; text-align:center">
			<?php include 'sub_header.php';?>
			</div>
		</div>
		<div class="col-lg-0"></div>
	</div>
</div>
</div>


<!-- ///////////////////////////////////// -->	
<!--          Hero Graphic Overlay         -->
<!-- ///////////////////////////////////// -->
<div class="ontop" style="margin:auto; text-align:center;">
	<div class="container-fluid">
		<div class="row">
		<div class="col-lg-1"></div>
		<div class="col-lg-10">
			<br/>
			<div id="SubmitJob"> <!-- AJAX Replace with Job Submit Form -->
			<?php 
			if($JobSubmitSuccess == 'success')
			{
			echo '<div class="container_submit" style="margin:auto; padding:0 10px;  text-align:center; background-color:white; width:600px; height:450px; border-radius:10px; opacity:0.85">';
				echo '<br/>';
				echo '<img src="images/bird_house.png" height="75" width="306" />';	
				echo '<h4 style="text-align: center" class="text-muted">Your project request was received. Login to view contractor matches.</h4>';		
				echo '<br/>';
				echo '<div style="text-align:center; margin:0 100px"><form method="post" action="fn_homeowner_login.php"><input type="text" name="HomeownerEmail" id="HomeownerEmail" class="form-control" style="margin:5px 0" placeholder="Email"><input type="password" class="form-control" style="margin:5px 0" name="HomeownerPassword" id="HomeownerPassword" placeholder="Password"><button type="submit" class="btn btn-primary">Homeowner Login</button></form></div>';
			echo '</div>';
			}elseif($JobSubmitSuccess == 'signup'){
			echo '<div class="container_submit" style="margin:auto; padding:0 10px;  text-align:center; background-color:white; width:600px; height:450px; border-radius:10px; opacity:0.85">';
				echo '<br/>';
				echo '<img src="images/bird.png" height="75" width="auto" />';	
				echo '<h4 style="text-align: center" class="text-muted">Your account has been created. Login to look for jobs.</h4>';		
				echo '<br/>';
				echo '<div style="text-align:center; margin:0 100px"><form method="post" action="fn_index_contractor_login.php"><input type="text" name="Usr" id="UserEmail" class="form-control" style="margin:5px 0" placeholder="Email"><input type="password" class="form-control" style="margin:5px 0" name="Pwd" id="UserPassword" placeholder="Password"><button type="submit" class="btn btn-primary">Contractor Login</button></form></div>';
			echo '</div>';			
			}elseif($JobSubmitSuccess == 'fail'){
			echo '<div class="container_submit" style="margin:auto; padding:0 10px;  text-align:center; background-color:white; width:600px; height:450px; border-radius:10px; opacity:0.85">';
				echo '<br/>';
				echo '<img src="images/bird.png" height="75" width="auto" />';	
				echo '<h4 style="text-align: center" class="text-muted">An account with this email already exists.<br/>Login or request a password reminder below.</h4>';		
				echo '<br/>';
				echo '<div style="text-align:center; margin:0 100px"><form method="post" action="fn_index_contractor_login.php"><input type="text" name="Usr" id="UserEmail" class="form-control" style="margin:5px 0" placeholder="Email"><input type="password" class="form-control" style="margin:5px 0" name="Pwd" id="UserPassword" placeholder="Password"><button type="submit" class="btn btn-primary">Contractor Login</button></form></div>';
				echo '<h5 style="text-align:center; color:black; margin-top:20px"> - or - </h5>';
				echo '<a><h3 style="text-align:center; cursor:pointer" ><small>Forgot Password</small></h3></a>';
			echo '</div>';			
			}else{
			echo '<table width="100%"><tr>';
			
			echo '<td style="width:70%; vertical-align:top; text-align:center">';
			echo "<h1 style='font-size:60px'><b>You're at Home</b></h1>";
			echo '<h3>The simple way to find home improvement experts</h3>';
			echo '</td>';
			
			echo '<td style="width:30%;">';
			echo '<div style="background-color:white; border-radius:5px; height:450px; width:300px; opacity:0.85" >';
			echo '<br/>';
			echo '<img src="images/bird_house.png" style="width:265px; height:auto" />';
			echo '<br/>';
			echo '<h4 style="text-align:center" class="text-muted">Discover a simple way to find the best contractors</h4>';
			echo '<br/><br/>';
			
			echo '<select name="JobName" id="JobName" class="form-control" style="width:270px; margin-left:15px">';
			echo '<optgroup style="font-size:18px">';
			echo '	<option value="0">Project Type</option>';
			echo '	<option value="Bathroom">Bathroom</option>';
			echo '	<option value="Carpentry">Carpentry</option>';
			echo '	<option value="Concrete">Concrete</option>';				
			echo '	<option value="Decks">Deck</option>';
			echo '	<option value="Doors">Doors</option>';
			echo '	<option value="Drywall">Drywall</option>';
			echo '	<option value="Electrical">Electrical</option>';
			echo '	<option value="Fences">Fence</option>';
			echo '	<option value="Flooring">Flooring</option>';
			echo '	<option value="Gutters">Gutters</option>';
			echo '	<option value="Handyman">Handyman</option>';				
			echo '	<option value="Kitchen">Kitchen</option>';
			echo '	<option value="Masonry">Masonry</option>';				
			echo '	<option value="Painting">Paint</option>';
			echo '	<option value="Plumbing">Plumbing</option>';
			echo '	<option value="Remodeling">Remodeling</option>';
			echo '	<option value="Roofing">Roofing</option>';
			echo '	<option value="Siding">Siding</option>';
			echo '	<option value="Tile">Tile</option>';
			echo '	<option value="Windows">Windows</option>';
			echo '	<option value="Other">Other</option>';
			echo '</optgroup>';
			echo '</select>';
			echo '<br/>';
			echo '<input type="text" placeholder="Zip Code" name="JobPostalCode" id="JobPostalCode" class="form-control" style="width:270px; margin-left:15px"/>';
			echo '<br/>';
			echo '<button type="submit" value="Submit Job" class="btn btn-primary" style="width:270px" onclick="SubmitJob()"><h4><b>Simple Start</b></h4></button>';
			echo '<br/><br/><br/><br/><h3 style="margin:5px"><small>matchNEST is a free online marketplace for homeowners and contractors</small></h3>';
			echo '</div>';
			echo '</td>';
			
			echo '</tr></table>';
			}
			?>			
			</div> <!-- AJAX Replace with Job Submit Form -->
		</div>
		<div class="col-lg-1"></div>
		</div>	
	</div>
</div>

<!-- /////////////////////////////////////// -->	
<!--           Hero Graphic Carousel         -->
<!-- /////////////////////////////////////// -->           
<div id="myCarousel" class="carousel fade">
    <div class="carousel-inner">
        <div class="item active">
        	<div style="margin:auto; text-align:center; background-image:url('images/hero-tilt-shift-03.jpg'); height:600px; width:inherit" >
        	</div>
            <div class="carousel-caption">
                 <h4></h4>

                <p></p>
            </div>
        </div>
	        
<!--    <div class="item">
        	<div style="margin:auto; text-align:center; background-image:url('images/hero-tilt-shift-02.jpg'); height:500px; width:inherit" >
        	</div>
            <div class="carousel-caption">
                 <h4></h4>

                <p></p>
            </div>
        </div>
-->                      
    </div>
</div>

<!-- //////////////////////////////// -->	
<!--              About MN            -->
<!-- //////////////////////////////// -->
<br/><br/>
<div class='container' style="margin:auto; text-align:center">
	<div class='row'>
		<div class='col-md-4'>
			<h2 style="text-align:left; border-left:thick #2D4F16 solid; padding-left:10px">About matchNEST</h2>
			<h5 style="text-align:left; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-size:16px; line-height:1.5em">
			Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore. 
			<br/><br/>
			Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum 
			<br/><br/>
			Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus.   			 
			</h5>
		</div>
		<br/>
		<div class='col-md-8'>
			<img src="images/laptop_2.jpg" width="810px" height="auto"/>
		</div>
	</div>
<hr/>
</div>

</div>

</body>

<!-- //////////////////////////////// -->	
<!--         Google Analytics         -->
<!-- //////////////////////////////// -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-52529456-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- Add jQuery and JQuery UI libraries -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css" />
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>

<!-- //////////////////////////////// -->	
<!--         jQuery masking           -->
<!-- //////////////////////////////// -->
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/additional-methods.min.js"></script>
<script type="text/javascript" src="scripts/jquery.maskedinput.js"></script>

<script type="text/javascript">

$(document).on("focus", "#HomeownerPhone", function(){
	$("#HomeownerPhone").mask("(999) 999-9999"); 
});

// From Validation - Job Submit
$(document).on("click", "#SubmitJobButton", function(){	
       	$("#submitJobForm").validate({
            rules: {
	                HomeownerFirstName: "required",
	                HomeownerLastName: "required",         
	                HomeownerEmail: {
	                    required: true,
	                    email: true
	                },
	                ConfirmEmail: {
	                    required: true,
	                    equalTo: "#HomeownerEmail"
	                },	                
	                HomeownerPhone: {
	                    required: true,
	                    phoneUS: true
	                },
	                HomeownerPassword: "required",
	                JobStreet: "required",  
	                JobCity: "required",  
	                JobState: "required"  	                
	                },
			messages: {
                    HomeownerFirstName: " ",
                    HomeownerLastName: " ",                    
                    HomeownerEmail: {
                        required: " ",
                        email: " "
                    },
                    ConfirmEmail: {
                        required: " ",
                        equalTo: " "
                    },                    
                    HomeownerPhone: {
                        required: " ",
                        phoneUS: " "
                    },
					HomeownerPassword: " ",                    
	                JobStreet: " ",  
	                JobCity: " ",  
	                JobState: " "  	                                   
                	}                	
        }); 
});	

// From Validation and Masking - New Contractor Signup
$(document).on("focus", "#UserPhone", function(){
	$("#UserPhone").mask("(999) 999-9999"); 
});

$(document).on("click", "#ContractorSignupButton", function(){	
       	$("#ContractorSignupForm").validate({
            rules: {
	                UserFirstName: "required",
	                UserLastName: "required",         
	                UserEmail: {
	                    required: true,
	                    email: true
	                },
	                ConfirmEmail: {
	                    required: true,
	                    equalTo: "#UserEmail"
	                },	                
	                UserPhone: {
	                    required: true,
	                    phoneUS: true
	                },
	                UserPassword: "required",
	                UserStreet: "required",  
	                UserCity: "required",  
	                UserState: "required",
					UserPostalCode: "required"
	                },
			messages: {
                    UserFirstName: " ",
                    UserLastName: " ",                    
                    UserEmail: {
                        required: " ",
                        email: " "
                    },
                    ConfirmEmail: {
                        required: " ",
                        equalTo: " "
                    },                    
                    UserPhone: {
                        required: " ",
                        phoneUS: " "
                    },
					UserPassword: " ",                    
	                UserStreet: " ",  
	                UserCity: " ",  
	                UserState: " ",
					UserPostalCode: " "
                	}                	
        }); 
});	
	
</script>

<!-- //////////////////////////////// -->	
<!--         BOOTSTRAP CDN            -->
<!-- //////////////////////////////// -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
<!-- Optional theme -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css" />
<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


<!-- //////////////////////////////// -->	
<!--          Submit Job function     -->
<!-- //////////////////////////////// -->
<script>
function SubmitJob(){
	
	var JobName = document.getElementById("JobName").value;
	var JobPostalCode = document.getElementById("JobPostalCode").value;

	$.post('sub_index_job_submit.php',
		{
		JobPostalCode		: JobPostalCode,
		JobName				: JobName
		},
		function(result)
		{
		$('#SubmitJob').html(result);
		});
}	

function ContractorSignup(){

	$.post('sub_index_contractor_signup.php',
		{
		},
		function(result)
		{
		$('#SubmitJob').html(result);
		});
}	
	
</script>


</html>
