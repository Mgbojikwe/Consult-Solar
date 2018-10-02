<?php
    $error = "";
    $name = "";
    $email = "";
    $subject = "";
    $message = "";

    function clean_text($string){
        $string = ($tring);
        $string = stripslashes($string);
        $string = htmlspecialchars($string);
        return $string;
     }

     if ($_POST['submit']) {
         if(empty($_POST['name'])){
             $error .= '<p><label class="text-danger"> Please enter your name </label></p> ';
         } else {
             $name = clean_text($_POST['name']);
             if(!preg_match("/^[a-zA-Z]*$/", $name)){
                $error .= '<p><label class="text-danger"> nly text and characters allowed </label></p> ';
             }
         }
        if(empty($_POST["email"])){
            $error .= '<p><label class="text-danger"> Please enter your email </label></p> ';
        } else {
            $email = clean_text($_POST['email']);
        }
     }
     

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/css/mdb.min.css" rel="stylesheet">
    <title>Contact Us</title>
</head>
<style>
    *{
    box-sizing: border-box;
}
    body{
        margin: 0;
}
    /*Web Title*/
#header{
    text-align: left;
    padding: 13px;
    padding-left: 50px;
    font-size: 25px;
    background-color: white;
}
span{
    color:cadetblue;
}
    /*Navigation Bar*/
#list{
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:dimgray;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6), 0 6px 20px 0 rgba(0, 0, 0, 0.6);
}
li.ex1{
    float: left;
    font-size: 18px;
    padding-left: 50px;
}
li#dropdown{
    display: inline-block;
}
li a, #dropbtn{
    display: inline-block;
    background-color:dimgray;
    color: white;
    text-align: center;
    padding: 28px 16px;
    text-decoration: none;
    width: 150px;
}
#dropcontent{
    display: none;
    position: absolute;
    min-width: 150px;
    overflow:auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}
#dropcontent a{
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}
#dropcontent a:hover {background-color: cadetblue}
#dropdown:hover #dropcontent {
    display: block;
}
a:hover, #dropdown:hover #dropbtn {
    background-color: cadetblue;
}
#active {background-color: cadetblue}

#head{
    background-color: cadetblue;
    display: flex;
    text-align: center;
    padding-left: 80px;
}

#flexcontainer{
    display: flex;
    flex-wrap: nowrap;
    justify-content: center;
    background-color:azure;
}
#flexcontainer #hit{
    width:50%;
    line-height: 50px;
    padding: 40px;
}
img{
    height:auto;
    display: block;
    margin-left: auto;
    margin-right: auto;

}
#flexcontainer #up{
    width:50%;
    padding: 40px;
    line-height: 50px;
}
#footer{
    display: flex;
    background-color: cadetblue;
    justify-content: center;
    font-size:18px;
    padding: 5px;
}
#hit p{
    padding-left: 40px;
}


/*Designing For Mobile 1st*/
/* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 600px) {
    #header{
    padding-left: 20px;
    font-size: 10px;
}
#head{
    padding-left: 50px;
    font-size: 10px;
}
#flexcontainer{
    flex-direction: column;
}
#flexcontainer #up{
    width:100%;
}
img{
    width:100%;
    height: auto;
    margin-left: auto;
    margin-right: auto;
}   
#flexcontainer #hit{
    width:100%;
    text-align: left;
    line-height: 30px;
}
p{
    font-size: 17px;
}

#hit p{
    padding-left: 10px;
}
}
/* Small devices (portrait tablets and large phones, 600px to 900px) */
@media screen and (max-width: 900px) and (min-width: 600px){
    #head{
    font-size: 15px;
}

#flexcontainer{
    flex-direction: column;
}
#flexcontainer #up{
    width:100%;
}
img{
    width:100%;
    height: auto;
    margin-left: auto;
    margin-right: auto;
}   
#flexcontainer #hit{
    width:100%;
    text-align: center;
    line-height: 30px;
}
p{
    font-size: 17px;
}
}


</style>
<body>
    <div id="header">
        <h1>Solar <span>Security</span> Consult</h1>
    </div>

    <ul id="list">
        <li class="ex1"><a href="./Index.html">Home</a></li>
        <li class="ex1" id="dropdown">
            <a href="###" id="dropbtn">About Us</a> 
            <div id="dropcontent">
                <a href="./Background.html">Background</a>
                <a href="./Who We Are.html">Who We Are</a>
                <a href="./Our Vision.html">Our Vision</a>
                <a href="./Culture and Values.html">Culture and Values</a>
            </div>
        </li>
        <li class="ex1" id="dropdown">
            <a href="###" id="dropbtn">Our Services</a>
            <div id="dropcontent">
                <a href="./Services.html">Services</a>
                <a href="./Our Clients.html">Our Clients</a>
                <a href="./Management.html">Management Expertise</a>
            </div>
        </li>
        <li class="ex1"><a id="active" href="./Contact Us.html">Contact Us</a></li>
    </ul><br>

    <div id="head">
            <h1><b>Contact Us</b></h1>
    </div>
    
    <div id="flexcontainer">
        <div id="hit">
            <p style="font-size:20px;"><b>Telephone:</b> <br>
                <b>Email:</b><br>
                <b>Corporate Headquarter:</b><br>
                    House 1A,
                    Plot 2,
                    Mike Okiro Close,
                    Metro Command Estate,
                    Wuye,
                    Abuja,
                    Nigeria</p>
        </div>
        <div id="up">
            <img src="./Images/contact-us-2993000_1920.jpg" alt="Contact Us" width="300" height="200">
            <!-- Form Started -->
	<div class="container form-top">
		<div class="row">
			<div class="col-md-12 col-md-offset-3 col-sm-12 col-xs-12">
				<div class="panel panel-danger">
					<div class="panel-body">
						<form id="form" name="form" method="post">
						 	<div class="form-group">
						 		<label><i class="fa fa-user" aria-hidden="true"></i> Name</label>
						 		<input type="text" name="name" class="form-control" placeholder="Enter Name">
						 	</div>
						 	<div class="form-group">
						 		<label><i class="fa fa-envelope" aria-hidden="true"></i> Email</label>
						 		<input type="email" name="email" class="form-control" placeholder="Example 'mgbojikwechukwuebuka@gmail.com' ">
                             </div>
                             <div class="form-group">
						 		<label><i class="fa fa-list" aria-hidden="true"></i> Subject</label>
						 		<input type="text" name="subject" class="form-control" placeholder="Subject">
						 	</div>
						 	<div class="form-group">
						 		<label><i class="fa fa-comment" aria-hidden="true"></i> Message</label>
						 		<textarea rows="3" name="message" class="form-control" placeholder="Type Your Message"></textarea>
						 	</div>


						 	<div class="form-group">
						 		<button class="btn btn-outline-success" name="submit">Send Message</button>
						 	</div>
                        </form>
                        <h3><?php //include "secure_email_code.php"; ?></h3>
						<div id="error_message" style="width:100%; height:100%; display:none; ">
						<h4>Error</h4>
						Sorry there was an error sending your form.
						</div>
						<div id="success_message" style="width:100%; height:100%; display:none; ">
                        Success! Your Message was Sent Successfully.
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- Form Ended -->
        </div>
    </div>
    <div id="footer">
            <p>www.Solar Security Consult.com</p>
    </div>
</body>
</html>