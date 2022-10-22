<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html>

<head>
	<title>Register</title>

	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Photocall Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
      Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
	<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">
</head>

<body>
	<div class="top_header" id="home">
		<!-- Fixed navbar -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="nav_top_fx_w3layouts_agileits">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
					    aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		        <div class="logo">
						<h1> <a class="navbar-brand" href="index.php"> Driverless </a></h1>
					</div>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<div class="nav_right_top_agile_w3ls">
						<ul class="nav navbar-nav">

							<!--
							<li ><a href="index.php">Home</a></li>
							<li><a class="scroll" href="index.php#about">About</a></li>
							<li><a class="scroll" href="index.php#gallery">Gallery</a></li>

						-->

							<li class="active" class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a class="scroll" href="login.php">Login</a></li>
									<li><a class="scroll" href="register.php">Register</a></li>
								</ul>
							</li>





						</ul>
					</div>
				</div>
				<!--/.nav-collapse -->
			</div>
		</nav>
		<div class="clearfix"></div>
    </div>


	<br><br><br><br><br>
    <br><br><br><br><br>

	<div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-4">

  						<h2 class="text-info" >Register</h2>
                      	<p>register your account</p>



						<br><br><br>


 					 <form id="register">


                    <div  class="form-group">
											<div class="alert alert-success alert-dismissible" id="success" style="display:none;">
														<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

													</div>

													<div class="alert alert-danger alert-dismissible" id="error" style="display:none;">
														<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
													</div>

						<label for="firstname">Firstname</label>



				 <input class="form-control item" type="text" id="firstname"></div>


					<div class="form-group"  ><label for="surname">Sirname</label>
					<input  class="form-control " type="text" id="sirname"></div>

					<div class="form-group"><label for="username">Username</label>
					<input  class="form-control " type="text" id="username"></div>

					<div class="form-group"  ><label for="email">Email</label>
					<input  class="form-control " type="text" id="email"></div>

					<div class="form-group" ><label for="password">Password</label>
					<input  class="form-control " type="password" id="password"></div>

					<div class="form-group"  ><label for="dob">Date of Birth</label>
					<input  class="form-control " type="date" id="dob"></div>

					<div class="form-group" ><label for="address">Address</label>
					<input  class="form-control " type="address" id="address"></div>




                    <div class="form-group">
                        <div class="form-check"><label> Not registered yet? <a href="login.php">click here!!!</a></label></div>
                    </div><button class="btn btn-danger btn-block" value="Register" id="butsave">Register</button>



					</form><br><br> </div>
  <div class="col-sm-4"></div>
</div>












            </div>
        </section>


	<!-- //footer -->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<script src="js/responsiveslides.min.js"></script>



	<script>


		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: false,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>

	<script>
		$('ul.dropdown-menu li').hover(function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
	</script>

	<!-- js -->
	<!--/tooltip -->
	<script>
		$(function () {
			$('[data-toggle="tooltip"]').tooltip({
				trigger: 'manual'
			}).tooltip('show');
		});

		// $( window ).scroll(function() {
		// if($( window ).scrollTop() > 10){  // scroll down abit and get the action
		$(".progress-bar").each(function () {
			each_bar_width = $(this).attr('aria-valuenow');
			$(this).width(each_bar_width + '%');
		});

		//  }
		// });
	</script>
	<!--//tooltip -->
	<!-- script for responsive tabs -->
	<script src="js/easy-responsive-tabs.js"></script>
	<script>
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	</script>
	<!--// script for responsive tabs -->

	<!--gallery -->
	<script src="js/jquery.chocolat.js"></script>
	<!--light-box-files -->
	<script type="text/javascript">
		$(function () {
			$('.gallery-grid1 a').Chocolat();
		});
	</script>
	<!-- //gallery -->
	<!-- Smooth-Scrolling-JavaScript -->
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll, .navbar li a, .footer li a").click(function (event) {
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //Smooth-Scrolling-JavaScript -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear'
							 		};
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>







<script>

	//register code...................................................................................,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,




    	$("#error").hide();
      	$("#success").hide();


        $(document).ready(function() {



        	$('#butsave').on('click', function() {
        	//	$("#butsave").attr("disabled", "disabled");
					$('#register').submit(function(e){
						e.preventDefault();
					});


					    	$("#error").hide();
					      	$("#success").hide();


        		var firstname = $('#firstname').val();
        		var sirname = $('#sirname').val();
        		var username = $('#username').val();
        		var password = $('#password').val();
        		var email = $('#email').val();
            var dob = $('#dob').val();
            var address = $('#address').val();


        		if(firstname!="" && sirname!="" && username!="" && password!="" && email!="" && dob!="" && address!="" ){

							$.ajax({
				        				url: "v1/register.php",
				        				type: "POST",
				        				data: {
				        					type: 1,
				        					firstname: firstname,
				        					sirname: sirname,
				        					username: username,
				        					password: password,
				        					email: email,
				                  dob: dob,
				                  address: address
				        				},
				        				cache: false,
												success: function(dataResult){
							            var dataResult = JSON.parse(dataResult);
							            if(dataResult.statusCode==200){

				        						$("#success").show();
				        						$('#success').html('Registration successful !');
														$("#error").hide();


				        					}else if (dataResult.statusCode==204) {
							              $("#error").show();
							              $('#error').html('Use a diffrent username');

							            }
													else if (dataResult.statusCode==203) {
							              $("#error").show();
							              $('#error').html('Use a diffrent email');

							            }
				        					else if(dataResult.statusCode==201){
				        						$("#error").show();
				        						$('#error').html('Email and username already exists !');
																$("#success").hide();
				        					}

				        				}
				        			});
        		}
        		else{

							$("#error").show();
							$('#error').html('Please fill all the field !');
									$("#success").hide();

        		}

        	});

});


</script>




	<script src="js2/jquery-1.11.3.min.js"></script>
	<script src="js2/bootstrap.min.js"></script>

	


	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>

</html>
