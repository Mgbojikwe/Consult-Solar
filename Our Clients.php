<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Clients</title>
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
.ex1{
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

     /*Designing the entire website*/
#head{
    background-color: cadetblue;
    display: flex;
    text-align: center;
    padding-left: 200px;
}
#flexcontainer{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    background-color:azure;
}
#flexcontainer #carpet{
    width: 50%;
    line-height: 30px;
    padding: 20px;
}
#text{
    font-size: 20px;
    padding-left: 180px;
}
#client{
    font-size: 20px;
    list-style-type: decimal;
    padding-left: 200px;
}
img{
    border-radius: 25px;
}
#footer{
    display: flex;
    background-color: cadetblue;
    justify-content: center;
    font-size:18px;
    padding: 5px;
}

@media only screen and (max-width: 400px){
    img{
        width:250px;
        padding-left: 10px;    
    }
}
/* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 600px) {
    #header{
        font-size: 10px;
    }
    #flexcontainer{
        display: flex;
        flex-wrap: wrap;
        flex-direction: column;
        justify-content: center;
    }
    #flexcontainer #carpet{
        justify-content: center;
    align-items: center;
        width:100%;
        padding: 20px;
    }
    #head{
        font-size: 10px;
        padding-left: 40px;
    }
    #text{
    padding-left: 20px;
}
#client{
    padding-left: 40px;
}
img {
    display: block;
    margin-left: auto;
    margin-right: auto;
}   
}
/* Small devices (portrait tablets and large phones, 600px to 900px) */
@media screen and (max-width: 900px) and (min-width: 600px){
    #flexcontainer{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    background-color:azure;
}
#flexcontainer #carpet{
    width: 50%;
    line-height: 30px;
    padding: 0px;
}
/*    #flexcontainer{
        display: flex;
        flex-wrap: wrap;
        flex-direction: column;
        justify-content: center;
    }
    #flexcontainer #carpet{
        width:100%;
    }*/
    #text{
    padding-left: 10px;
}
#client{
    padding-left: 30px;
}
img{
    width: 250px;
}
}
/* Large devices (laptops/desktops, 900px and up) */
@media screen and (max-width: 1200px) and (min-width: 900px){
    #flexcontainer{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    background-color:azure;
}
#flexcontainer #carpet{
    width: 50%;
    line-height: 30px;
    padding: 20px;

}
}
</style>
<body>
    <div id="header">
        <h1>Solar <span>Security</span> Consult</h1>
    </div>

    <ul id="list">
        <li class="ex1"><a href="Index.php">Home</a></li>
        <li class="ex1" id="dropdown">
            <a href="###" id="dropbtn">About Us</a> 
            <div id="dropcontent">
                <a href="Background.php">Background</a>
                <a href="Who We Are.php">Who We Are</a>
                <a href="Our Vision.php">Our Vision</a>
                <a href="Culture and Values.php">Culture and Values</a>
            </div>
        </li>
        <li class="ex1" id="dropdown">
            <a href="###" id="active" id="dropbtn">Our Services</a>
            <div id="dropcontent">
                <a href="Services.php">Services</a>
                <a href="Our Clients.php">Our Clients</a>
                <a href="Management.php">Management Expertise</a>
            </div>
        </li>
        <li class="ex1"><a href="contact.php">Contact Us</a></li>
    </ul><br>
    
    <div id="head">
        <h1><b>Our Services</b></h1>
    </div>

    <div id="flexcontainer">
        <div id="carpet">
            <p id="text">OUR CLIENTS / SECTORS<br>
               We provide services to the following:</p>
            <ul id="client">
                <li id="classex1">Oil and Gas Companies</li>
                <li id="classex1">Public Institutions</li>
                <li id="classex1">Leisure and Tourism Concerns(Event Promoters)</li>
                <li id="classex1">Financial Institutions</li>
                <li id="classex1">Maritime Companies</li>
                <li id="classex1">Sea Ports and Air Ports</li>
                <li id="classex1">Retain Security</li>
                <li id="classex1">Corporate Individuals</li>
            </ul>
        </div>
        <div id="carpet">
            <h1 style="visibility:hidden;">Our Clients</h1>
            <img src="./Images/rawpixel-699806-unsplash.jpg" alt="Clients" width="360" height="200">
        </div>
    </div>

    <div id="footer">
        <p>www.Solar Security Consult.com</p>
    </div>
</body>
</html>