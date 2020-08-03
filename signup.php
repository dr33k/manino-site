<!DOCTYPE html>
<?php include 'font.php';?>
<html>

<head>
<style>
body{
background-image:url("/nono/homeback.jpg");
background-size:cover;
background-color: rgba(255,255,255,0.05);
background-blend-mode:lighten;
background-attachment:fixed;
}

.column{
width:33.33%;
padding:10px;
float:left;
}

.row:after{
clear:both;
content:"";
display:table;
}

.roundcard{
border-radius:5px 5px 5px 5px;
background-color:#d8d8d8;
padding:20px;
width:100%;
vertical-align:middle;
margin-top:20%;
}

input[type = submit]{
border-radius:5px 5px 5px 5px;
text-decoration:none;
border:none;
color:#e8e8e8;
background-color:black;
display:inline-block;
height:30px;
margin:5px;
}

input[type = submit]:hover{
background-color:gray;
color:black;
}

input[type=text],input[type = password],input[type = tel]{
width:65%;
resize:vertical;
float:right;
}

input[type=date]{
width:60%;
resize:horizontal;
float:right;
padding-right:15px;
}
@media screen and(max-width:700px){

}
}
</style>
</head>

<body>
<div class = "row">

<div class  = "column"></div>

<div class = "column">
<div class = "roundcard">
<h4>SIGN UP</h4>

	<form action = "signupsql.js" method = "get">
<p>
<label for="fname">First Name:</label>
<input type = "text" id = "fname" name = "fname"/>
</p>
<p>
<label for="lname">Last Name:</label>
<input type = "text" id = "lname" name = "lname"/>
</p>
<p>
<label for="emailsignup">E-mail:</label>
<input type = "text" id = "lname" name = "emailsignup"/>
</p>
<p>
<label for="passwordsignup">Password:</label>
<input type = "password" name = "passwordsignup" id = "passwordsignup"/>
</p>
<p style = "margin-bottom:0;">
<label for="phone">Phone no.:</label>
<input type = "tel" name = "phone" id = "phone"
pattern = "[0-9]{3}-[0-9]{3}-[0-9]{2}-[0-9]{3}"/>
</p>
<p><small>Format: 080-000-00-000</small></p>
<p>
<label>D.O.B.</label>
<input type = "date" name = "date" id= "date"/>
</p>
<input type = "submit" value = "Sign up">
</form>

</div>
</div>
</div>
</body>
</html>