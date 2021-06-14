<!-- Exercise on pages 215-217 -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Web Template Project</title>
</head>
<body>
	<?php include("inc_header.html"); ?>
	<div style="width: 20%; text-align: center; float: left;">
		<?php include("inc_buttonnav.html"); ?>
	</div>
	<!-- Start of dynamic content section -->
	<?php 
		if(isset($_GET["content"])){
			switch($_GET["content"]){
				case "About Me":
					include("inc_about.html");
					break;
				case "Contact Me":
					include("inc_contact.html");
					break;
				case "Home": //A value of "home" means to
							 //display the default page
				default:
					include("inc_home.html");
					break;
			}
		}
		else{
			//no button has been selected
			include("inc_home.html");
		

		}
	 ?>
	 <!-- end of dynamic content section -->
	 <?php include("inc_footer.php"); ?>
</body>
</html>