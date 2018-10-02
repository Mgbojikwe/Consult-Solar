<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Vision</title>
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
    padding-left: 100px;
}
#flexcontainer{
    display: flex;
    flex-wrap: nowrap;
    justify-content: center;
    background-color:azure;
}
#flexcontainer #main{
    width:40%;
    line-height: 50px;
    padding: 40px;
}
img{
    padding-top: 20px;
    height:auto;
    display: block;
    margin-left: auto;
    margin-right: auto;

}
#flexcontainer #aside{
    width:60%;
    padding: 20px;
    line-height: 30px;
}
#contenttwo{
    display: flex;
    flex-wrap: nowrap;
    justify-content: center;
    background-color:azure;
}
#contenttwo p{
    width: 100%;
    padding-left: 100px;
    line-height: 30px;
    font-size: 17px;
    margin:10px;
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
    padding-left: 20px;
    font-size: 10px;
}
#head{
    padding-left: 30px;
    font-size: 10px;
}
#flexcontainer{
    flex-direction: column;
}
#flexcontainer #main{
    width:100%;
}
img{
    width:100%;
    height: auto;
    margin-left: auto;
    margin-right: auto;
}   
#flexcontainer #aside{
    width:100%;
    text-align: center;
    line-height: 30px;
}
#contenttwo p{
    width: 100%;
    text-align: center;
    padding-left: 0px;
    line-height: 30px;
}
#o{
    display: none;
}
}
/* Small devices (portrait tablets and large phones, 600px to 900px) */
@media screen and (max-width: 900px) and (min-width: 600px){
    #head{
    font-size: 10px;
}

#flexcontainer{
    flex-direction: column;
}
#flexcontainer #main{
    width:100%;
}
img{
    width:100%;
    height: auto;
    margin-left: auto;
    margin-right: auto;
}   
#flexcontainer #aside{
    width:100%;
    text-align: center;
    line-height: 30px;
}
#contenttwo p{
    margin: 20px;
    width: 100%;
    text-align: center;
    padding-left: 0px;
    line-height: 30px;
}
#o{
    display: none;
}
}
@media screen and (max-width: 1200px) and (min-width: 900px){
    #contenttwo p{
    width: 100%;
    margin: 10px;
    text-align: center;
    padding-left: 0px;
    line-height: 40px;
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
            <a href="###"  id="active" id="dropbtn">About Us</a> 
            <div id="dropcontent">
                <a href="Background.php">Background</a>
                <a href="Who We Are.php">Who We Are</a>
                <a href="Our Vision.php">Our Vision</a>
                <a href="Culture and Values.php">Culture and Values</a>
            </div>
        </li>
        <li class="ex1" id="dropdown">
            <a href="###" id="dropbtn">Our Services</a>
            <div id="dropcontent">
                <a href="Services.php">Services</a>
                <a href="Our Clients.php">Our Clients</a>
                <a href="Management.php">Management Expertise</a>
            </div>
        </li>
        <li class="ex1"><a href="contact.php">Contact Us</a></li>
    </ul><br>

    <div id="head">
        <h1><b>About Us</b></h1>
    </div>

    <div id="flexcontainer">
            <div id="main">
                <img src="./Images/chess-2727443_1920.jpg" alt="Soldiers" width="300" height="200">
            </div>
            <div id="aside">
                <h3 style="font-size:20px;">OUR VISION</h3>
                <p style="font-size:17px;">Our vision is to revolutionise and become the market leader marked by high professional standards in 
                    the private security market in Nigeria by:</p>
            </div>
    </div>

    <div id="contenttwo">
            <p>– Integrating the most advanced technological applications to complement the services provided by human resource. This will 
                entail fostering the use of state of the art electronic security applications along with consulting services in assessing and 
                managing corporate security risks/threats of our clients.<br>

                – Drawing on a combination of many years of practical experience of our Management Team and Operatives in public and private 
                security sectors; and our broad local and international network in providing security solutions to corporate and individual 
                concerns desirous of quality security services.<br>
                    
                – Providing consultancy services aimed at reductions in risk to our customers, and supporting the attainment of their broad 
                corporate objectives with the provision of courteous and business-friendly services.<br>
                    
                – Assisting our clients in setting and maintaining high safety and security standards including evacuation plans consistent 
                with Nigerian laws and industrial safety standards.<br>
                    
                – Assisting our clients in undertaking pre-employment vetting in a process that includes diligently pursued background checks 
                and biometric profiling.<br>
                    
                – Supply and professional supervision of well-trained, well-highly-motivated, appropriately equipped, professionally oriented, 
                and customers-friendly security operatives to corporate concerns and VIPs (if the company operates an outsourcing policy).<br>
                    
                – Exporting our security expertise through the provision of specialised training to security managers and personnel in corporate
                 (industrial/commercial) institutions with a view to enhancing their service delivery, aligning their orientation to 
                 international best practices in Industrial and Private Security and aiding the attainment of broad organisational goals in 
                 relation to corporate security.<br>
                    
                – Offering a full spectrum of integrated physical and electronic security services that meets and exceeds our clients’ 
                expectations. This encompasses physical security, remote monitoring (through a Remote Monitoring Centre located at the 
                Company’s Head Office and other strategic areas/Sites covered by the Company and manned by specially trained CCTV monitoring
                 operatives), and our rapid response team that will offer immediate assistance when required.</p>
    </div>
    
    <div id="footer">
            <p>www.Solar Security Consult.com</p>
    </div>
</body>
</html>