<!DOCTYPE html>
<html>

<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Old+Standard+TT" />
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Cabin" />

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

/*body*/
body{
background-image:url('/nono/items/watches.jpg');
background-size:cover;
background-color: rgba(255,255,255,0.05);
background-blend-mode:lighten;
background-attachment:fixed;
font-family:Cabin;
}

*{box-sizing:border-box;}

/*Header*/
.header{
color:#757575;
background-color:#f5f5f5;
padding:30px;
text-align:center;
margin:0;
font-family:Old Standard TT;
}

/*RightColumn*/
.rightcolumn{
float:left;
width:25%;
padding-left:10px;
}

/*LeftColumn*/
.leftcolumn{
float:left;
width:75%;
padding-left:20px;
padding-right:10px;
}

/*image*/
img{
width:50%;
height:40%;
padding:20px;
}

/*card effect*/
.article{
background-color:#e8e8e8;
padding:20px;
margin-top:20px;
}

/*Footer*/
.footer{
padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}


/*This clears floats after the columns, make it a habit to do this*/
.row:after{
content:"";
display:table;
clear:both;
}

h1,h2,h3,h4,h5,h6{
margin:10px;
margin-top:5px;
}

input[type=text]{
width:100%;
resize:horizontal;
}


input[type = submit]{
border:none;
height:30px;
background-color:black;
color:#e8e8e8;
text-decoration:none;
display:inline-block;

}

input[type = submit]:hover{
background-color:gray;
color:black;
}

/*Responsive layer*/
@media screen and (max-width:1000px){
.leftcolumn,.rightcolumn{
width:100%;
padding:0;
}

input[type=text]{
width:100%;
}
input[type = submit]{
width:100%;
    }
}
</style>
</head>

<body>

<div class = "header">
		<h1 style = "font-size:50px"><b>The Manino Blog</b></h1>
		<h3 style = "font-size:20px">Learn what it entails to be a producer or consumer of leather</h3>
</div>

<?php include 'menu.html';?>

	<div class = "row">
<div class = "leftcolumn">
		<div class = "article">
<h3><b>FIRST POST</b></h3>
<img src="/nono/manino.jpg"/>
<br>THis is my first post. Its my first project as a web designer
I really pray God puts me through this so itll make a successful side hustle.
I still dont know how to do much, but I consider this an opportunity to learn
Still doing the front end but by next week, i should be moving to backend.


		</div>
</div>

<div class = "rightcolumn">
		<div class = "article">
		<h4><b>Random Facts</b></h4>
		</div>
		<div class = "article">
		<h4>Topics</h4>
		</div>
		<div class = "article">
		<h4><b>Subscribe</b></h4>
		Let's always get you updates


<form action = "subscribe.php" method = "get">
<p>E-mail:<input type = "text" name= "email"/></p>
<input type = "submit" value = "Subscribe"/>
</form>
		</div>
</div>
	</div>
</body>
</html>