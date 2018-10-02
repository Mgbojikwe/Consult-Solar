<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">
    <title>Services</title>
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
li{
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

#Text{
  display: flex;
  flex-wrap:nowrap;
  background-color: cadetblue;
  text-align:center;
  font-size: 25px;
}
#flex{
    display: flex;
    flex-wrap: nowrap;
    justify-content: center;
}
#flex .polaroid{
  width: 50%;
    text-align: center;
    line-height: 25px;
    padding:60px;
}
div.polaroid {
  width: 100%;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
}
.container p{
  font-size: 20px;
}
#footer{
    display: flex;
    background-color: cadetblue;
    justify-content: center;
    font-size:18px;
    padding: 5px;
}
/*Designing For Mobile 1st*/
/* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 600px) {
  #header{
    font-size: 10px;
    }
    #Text{
      font-size: 20px;
    }
    #flex{
      flex-direction: column;
    }
    #flex .polaroid{
  width: 100%;
  border: 1px solid cadetblue;
    }
}
</style>
<body>
    <div id="header">
        <h1>Solar <span>Security</span> Consult</h1>
    </div>

    <ul id="list">
        <li><a href="Index.php">Home</a></li>
        <li id="dropdown">
            <a href="###" id="dropbtn">About Us</a> 
            <div id="dropcontent">
                <a href="Background.php">Background</a>
                <a href="Who We Are.php">Who We Are</a>
                <a href="Our Vision.php">Our Vision</a>
                <a href="Culture and Values.php">Culture and Values</a>
            </div>
        </li>
        <li id="dropdown">
            <a href="###" id="active" id="dropbtn">Our Services</a>
            <div id="dropcontent">
                <a href="Services.php">Services</a>
                <a href="Our Clients.php">Our Clients</a>
                <a href="Management.php">Management Expertise</a>
            </div>
        </li>
        <li><a href="contact.php">Contact Us</a></li>
    </ul><br>
  
    <div id="content">
        <div id="Text">
          <p> <b>Services</b> - Although we pride ourselves as having the capacity for total security solution, we believe one 
            of our key strengths is the ability to provide:</p>
        </div>

        <div id="flex">
        <div class="polaroid">
            <img src="./Images/airport-690556_1920.jpg" class="img-thumbnail" alt="Airport Pickups" style="width:100%">
            <div class="container">
              <p><b>Airport pick-ups and mobile security escorts for Corporate Clients and other VIPs (our service covers all airports across the 
                country)</b></p>
            </div>
          </div>
          <div class="polaroid">
            <img src="./Images/1 forensics matrix-2953869_1920.jpg" class="img-thumbnail" alt="Forensics" style="width:100%">
            <div class="container">
              <p><b>Forensic Services</b></p>
            </div>
          </div>
        </div>


        <div id="flex">  
          <div class="polaroid">
            <img src="./Images/guard-1816309_1920.jpg" class="img-thumbnail" alt="Private Investigation" style="width:100%">
            <div class="container">
              <p><b>Private Investigation / Intelligence Functions (Plain Clothes Investigators / operatives dedicated to discreet criminal 
                investigation / intelligence engagements and Security Surveys as they affect the corporate security objectives of our clients)</b></p>
            </div>
          </div>
          <div class="polaroid">
            <img src="./Images/doctor-1010903_1920.jpg" class="img-thumbnail" alt="Paramedics" style="width:100%">
            <div class="container">
              <p><b>Paramedics</b></p>
            </div>
          </div>  
        </div>

        <div id="flex">
          <div class="polaroid">
            <img src="./Images/fingerprint-2904774_1920.jpg" class="img-thumbnail" alt="Biometrics" style="width:100%">
            <div class="container">
              <p><b>Pre-Employment Background Checks, Vetting and Biometric Processing; and on-the-job monitoring of personnel</b></p>
            </div>
          </div>
          <div class="polaroid">
              <img src="./Images/censorship-610101_1920.jpg" class="img-thumbnail" alt="Norway" style="width:100%">
              <div class="container">
                <p><b>Risk Assessment and Security Consultancy Services (including providing expertise for setting up security departments and 
                    recruitment of quality security personnel for corporate organisations)</b></p>
              </div>
          </div>  
        </div>

        <div id="flex">
          <div class="polaroid">
            <img src="./Images/scott-webb-274694-unsplash.jpg" class="img-thumbnail" alt="CCTV monitoring" style="width:100%">
            <div class="container">
              <p><b>Integrated Security Systems and Solutions (Integrated CCTV coverage and Remote Monitoring through an ISP Remote Monitoring 
                  Centre linked to the Solar Security Consult Data Centre located at the Head Office in Benin City and which is in turn linked
                  to the local Police through an alarm activation system)</b></p>
            </div>
          </div>
          <div class="polaroid">
            <img src="./Images/ben-koorengevel-282713-unsplash.jpg" class="img-thumbnail" alt="Protection" style="width:100%">
            <div class="container">
              <p><b>Executive and Dignitary Protection</b></p>
            </div>
          </div>
        </div>

        <div id="flex">
          <div class="polaroid">
            <img src="./Images/weapon-1816313_1920.jpg" class="img-thumbnail" alt="Manned Guard" style="width:100%">
            <div class="container">
              <p><b>Manned Security Services (Static Uniformed Guards, Key Holding, Access Control and Mobile Patrol)</b></p>
            </div>
          </div>
          <div class="polaroid">
            <img src="./Images/hunter-3614043_1280.png" class="img-thumbnail" alt="Hunter" style="width:100%">
            <div class="container">
              <p><b>Event Security Management (Protection and Security Services For Special Events)</b></p>
            </div>
          </div>
        </div>

        <div id="flex">
          <div class="polaroid">
            <img src="./Images/hacker-2300772_1920.jpg" alt="Remote" style="width:100%">
            <div class="container">
              <p><b>Remote Car Tracking</b></p>
            </div>
          </div>
          <div class="polaroid">
            <img src="./Images/security-265130_1920.jpg" alt="Security" style="width:100%">
            <div class="container">
              <p><b>Security Liaison Functions (Drawing on a broad network with all security agencies across the country to address issues of 
                  concern to our clients)</b></p>
            </div>
          </div>
        </div>

        <div id="flex">
        <div class="polaroid">
            <img src="./Images/felix-koutchinski-710409-unsplash.jpg" alt="Training" style="width:100%">
            <div class="container">
              <p><b>Training and Staff Development (Tailor-Made local and International Basic, Intermediate and Advanced security trainings in 
                  partnership with our foreign partners)</b></p>
            </div>
          </div>  
          <div class="polaroid">
            <img src="./Images/Criminal Intelligence.PNG" alt="Criminal Intelligence" style="width:100%">
            <div class="container">
              <p><b>Industrial/Corporate and criminal Intelligence (Internal Security Monitoring and Private Intelligence Gathering Services)</b></p>
            </div>
          </div>
        </div>
    </div>
    
    <div id="footer">
      <p>www.Solar Security Consult.com</p>
  </div>
</body>
</html>