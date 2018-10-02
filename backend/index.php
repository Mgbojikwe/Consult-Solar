<?php
include('config.php');
// fetching admin email where mail will send

$sql ="SELECT emailId from tblemail";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0):
foreach($results as $result):
$adminemail=$result->emailId;
endforeach;
endif;
if(isset($_POST['submit']))
{
// getting Post values	
$name=$_POST['name'];
$phoneno=$_POST['phonenumber'];
$email=$_POST['emailaddres'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$uip = $_SERVER ['REMOTE_ADDR'];
$isread=0;
// Insert quaery
$sql="INSERT INTO  tblcontactdata(FullName,PhoneNumber,EmailId,Subject,Message,UserIp,Is_Read) VALUES(:fname,:phone,:email,:subject,:message,:uip,:isread)";
$query = $dbh->prepare($sql);
// Bind parameters
$query->bindParam(':fname',$name,PDO::PARAM_STR);
$query->bindParam(':phone',$phoneno,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':subject',$subject,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);
$query->bindParam(':uip',$uip,PDO::PARAM_STR);
$query->bindParam(':isread',$isread,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
//mail function for sending mail
$to=$email.",".$adminemail; 
$headers .= "MIME-Version: 1.0"."\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
$headers .= 'From:My Site Contact Form <My Site>'."\r\n";
$ms.="<html></body><div>
<div><b>Name:</b> $name,</div>
<div><b>Phone Number:</b> $phoneno,</div>
<div><b>Email Id:</b> $email,</div>";
$ms.="<div style='padding-top:8px;'><b>Message : </b>$message</div><div></div></body></html>";
mail($to,$subject,$ms,$headers);




echo "<script>alert('Your info submitted successfully.');</script>";
}
else 
{
echo "<script>alert('Something went wrong. Please try again');</script>";
}


}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Contact Form</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>

<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Josefin+Sans:400,100,300,600,700' rel='stylesheet' type='text/css'>
<!--web-fonts-->
</head>
<body>
	<div class="container mt-5">
		<div class="col-md-8 offset-2">
			<div class="card">
				<div class="card-header text-white bg-info text-center">
					<h1 class="header-text">Contact Us</h1>
				</div>
				<div class="card-body">
				<form name="ContactForm" method="post">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="name" class="user form-control input-sm" placeholder="Full Name"  autocomplete="off" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="phonenumber" class="phone form-control" placeholder="Phone Number" maxlength="11" required autocomplete="off">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="email" name="emailaddres" class="email form-control" placeholder="Email Address" required autocomplete="off">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="subject" class="email form-control" placeholder="Subject" autocomplete="off">
								</div>
							</div>
						</div>						
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<textarea class="mess form-control" name="message" placeholder="Your Message" required></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<button type="submit" class="btn btn-info btn-block" name="submit">Send Message</button>
									
								</div>
								<div class="col-md-12">
									<div class="form-group">
									<a href="" >Click here to go Back</a>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>