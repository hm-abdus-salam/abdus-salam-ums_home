<?php

error_reporting(0);
session_start();
session_destroy();

if($_SESSION['message'])

    {
        $message=$_SESSION['message'];
        echo "<script type='text/javascript'> 

        alert('$message');

        </script>";
    }


?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>University Management System</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

	<nav>
		<label class="logo"> 
            <img src="logo.png"
            alt="Logo" class="nav-logo">
            <span> University Management System</span>
        </label>
    

		<ul>
			<li><a href="index.php">Home</a></li>
            <li><a href="about_us.php">About us</a></li>
            <li><a href="admission.php">Admission</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li><a href="login.php" class="btn btn-success">Login</a></li>
		</ul>
	</nav>


	<div class="section1">
		
		<label class="img_text">Committed To World Class University</label>
		<img class="main_img" src="university.png">
	</div>


	<div class="container">

		<div class="row">

			<div class="col-md-4">

				<img class="welcome_img" src="welcome.jpg">
				
			</div>

			<div class="col-md-8">

				<h1>Welcome to University Management System</h1>

				<p>Our University has been committed to global learning long before it became an indispensable feature of contemporary education. Established in 1997, we proudly stand as the 1st English medium school in Bangladesh to adopt both Pearson Edexcel and Cambridge curriculum (in O and A levels), drawing together students in a vibrant, academically challenging, and encouraging environment where manifold viewpoints are prized and celebrated.Our University has been committed to global learning long before it became an indispensable feature of contemporary education. Established in 1997, we proudly stand as the 1st English medium school in Bangladesh to adopt both Pearson Edexcel and Cambridge curriculum (in O and A levels), drawing together students in a vibrant, academically challenging, and encouraging environment where manifold viewpoints are prized and celebrated.</p>
				
			</div>
			

		</div>
		

	</div>


	<center>
		<h1>Our Teachers</h1>
	</center>


	<div class="container">

		<div class="row">

			<div class="col-md-4">

				<img class="teacher" src="Rathindra Nath Mohalder.jpg">
                <h3>Rathindra Nath Mohalder</h3>

				<p>Rathindra Nath Mohalder is an Assistant Professor and Head (In-Charge) of the Department of Computer Science and Engineering at Our University. He also serves as Dean (In-Charge) of the Faculty of Arts and Social Sciences and Director (In-Charge) of the ICT Cell. His research interests include Artificial Intelligence, Machine Learning, Deep Learning, IoT, and Networking, with several publications in national and international forums.</p>
				
			</div>

			<div class="col-md-4">

				<img class="teacher" src="Sadman Sakib.jpg">
                <h3>Sadman Sakib</h3>

				<p>Sadman Sakib is a Lecturer of the Department of Computer Science and Engineering at Our University. His research interests include Computer Vision, Natural Language Processing (NLP), Human Computer Interaction (HCI), Artificial Intelligence, Machine Learning.</p>
				
			</div>

			<div class="col-md-4">

				<img class="teacher" src="Mushfiq Shahrier Shafi.jpg">
                <h3>Mushfiq Shahrier Shafi</h3>

				<p>Mushfiq Shahrier Shafi is a Lecturer of the Department of Computer Science and Engineering at Our University. He also serves as Proctor (In-Charge) of this University. His research interests include Software Engineering, Software Maintenance and Evolution, Machine Learning, Deep Learning.</p>
				
			</div>
			

		</div>
		

	</div>






	<center>
		<h1>Our Courses</h1>
	</center>


	<div class="container">

		<div class="row">

			<div class="col-md-4">

				<img class="teacher" src="web_development.png">
				<h3>Web Development</h3>
				
				
			</div>

			<div class="col-md-4">

				<img class="teacher" src="graphic_design.png">
				<h3>Graphics Design</h3>
				
			</div>

			<div class="col-md-4">

				<img class="teacher" src="digital_marketing.png">
				<h3>Marketing</h3>
				
			</div>
			

		</div>
		

	</div>


	<center>
		<h1 class="adm">Admission Form</h1>

	</center>


	<div align="center" class="admission_form">

		<form action="data_check.php" method="POST">
			
		<div class="adm_int">
			<label class="label_text">Name</label>
			<input class="input_deg" type="text" name="name">
		</div>

		<div class="adm_int">
			<label class="label_text">Email</label>
			<input class="input_deg" type="text" name="email">
		</div>

		<div class="adm_int">
			<label class="label_text">Phone</label>
			<input class="input_deg" type="text" name="phone">
		</div>
		<div class="adm_int">
			<label class="label_text">Message</label>
			<textarea class="input_txt" name="message"></textarea>
		</div>

		<div class="adm_int" >
			
			<input class="btn btn-primary" id="submit" type="submit" value="apply" name="apply" >
		</div>


		</form>
		
	</div>


	<footer>
		<h3 class="footer_text">All @copyright reserved by HM Abdus Salam</h3>
	</footer>


</body>
</html>