<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Management</title>
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

#head{
    background-color: cadetblue;
    display: flex;
    text-align: center;
    padding-left: 100px;
}
#flexcontainer{
    display: flex;
    flex-wrap: nowrap;
    justify-content: center;
    background-color:azure;
}
#flexcontainer #manage1{
    width: 35%;
    line-height: 50px;
    padding: 20px;
}
#flexcontainer #manage2{
    width: 65%;
    line-height: 30px;
    padding: 20px;
}
img {
    text-align: center;
    display: block;
    margin-left: auto;
    margin-right: auto;
}   
p{
    font-size: 15px;
}
h3{
    font-size: 30px;
}
#footer{
    display: flex;
    background-color: cadetblue;
    justify-content: center;
    font-size:18px;
    padding: 5px;
}
/* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 600px) {
    #header{
        font-size: 10px;
}
    #head{
        font-size: 10px;
}
    #flexcontainer{
    flex-direction: column;
}
img {
    text-align: center;
    display: block;
    margin-left: auto;
    margin-right: auto;
}   
h3{
    text-align: center;
}
p{
    text-align: center;
}
#flexcontainer #manage1{
    width: 100%;
    line-height: 50px;
    padding: 20px;
}
#flexcontainer #manage2{
    width: 100%;
    line-height: 30px;
    padding: 20px;
}
#o{
   display: none; 
}
}
@media only screen and (max-width: 400px){
    img{
        width:250px;
    }
}
/* Small devices (portrait tablets and large phones, 600px to 900px) */
@media screen and (max-width: 900px) and (min-width: 600px){
    #header{
        font-size: 20px;
}
    #head{
        font-size: 15px;
}
    #flexcontainer{
    flex-direction: column;
}
img {
    text-align: center;
    display: block;
    margin-left: auto;
    margin-right: auto;
}   
h3{
    text-align: center;
}
p{
    text-align: center;
}
#flexcontainer #manage1{
    width: 100%;
    line-height: 50px;
    padding: 20px;
}
#flexcontainer #manage2{
    width: 100%;
    line-height: 50px;
    padding: 20px;
}
#o{
   display: none; 
}
}
</style>
<body>
      <div id="header">
        <h1>Solar <span>Security</span> Consult</h1>
    </div>


    <div id="head">
        <h1><b>Our Services</b></h1>
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
    </div>
    
    <div id="flexcontainer">
        <div id="manage1">
            <h1 id="o" style="visibility:hidden;">Expert</h1>
            <img src="./Images/Expert.PNG" alt="Expert" width="300" height="250">
        </div>
        <div id="manage2">
            <h3>MANAGEMENT EXPERTISE</h3>
            <p style="font-size:17px;">Our Executive Team has vast domestic and international experience and diversity in security, administration, law enforcement, 
                forensic expertise, and legal affairs.<br>
                They also have very broad reach within the law enforcement network in Nigeria having served at the highest levels of national 
                security and interacted in their line of duty with the staff and command levels of the security institutions in the country. 
                Our executives and staff members are very well known specialists in the security industry with some of them holding the UK 
                Security Authority Industry (SIA) qualification and other international and national certificates in Executive and Industrial 
                Security management.<br>
                The Company will also network and partner with academics and security sector experts in the UK, USA, South Africa and other 
                parts of the world with a view to setting and maintaining an unprecedented pace that is premised on best international 
                practices in the areas of professional training, research and general operations</p>
        </div>
    </div>

    <div id="footer">
            <p>www.Solar Security Consult.com</p>
    </div>
</body>
</html>