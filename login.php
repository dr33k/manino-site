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
margin-top:50%;
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

input[type=text],input[type = password]{
width:65%;
resize:vertical;
float:right;
}

@media screen and (max-width:700px){

}
}
</style>
</head>

<body>
<div class = "row">

<div class  = "column"></div>

<div class = "column">
<div class = "roundcard">
<h4>LOGIN</h4>

	<form action = "loginsql.php" method = "get">
<p>
<label for="emaillogin">E-mail:</label>
<input type = "text" id = "emaillogin"name = "emaillogin"/>
</p>
<p>
<label for="passwordlogin">Password:</label>
<input type = "password" name = "passwordlogin" id = "passwordlogin "/>
</p>
<input type = "submit" value = "Login">
</form>

Dont have an account with Manino? <a href = "/nono/signup.php">Sign up</a>
</div>
</div>
</div>
</body>
</html>