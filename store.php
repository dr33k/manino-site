<!DOCTYPE html>
<html>

<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Old+Standard+TT" />
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Cabin" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

/*body*/
background-color:#ffffff;
font-family:Cabin;
}

*{box-sizing:border-box;}

/*Header*/
.header{
color:#757575;
background-color:#f5f5f5;
padding:20px;
text-align:center;
font-family:Old Standard TT;
height:20px;
position:stcky;
margin:-10px;
}

/*Column*/
.column{
float:left;
width:95%;
padding:10px;
}


/*card effect*/
.article{
background-color:#f5f5f5;
padding:20px;
margin-top:10px;
border-radius:5px 5px 5px 5px;
width:150px;
transition:width 0.5s ease;
}

/*images part of article */
.article img {
max-width:90%;
max-height:70%;
float:top;
}

.article:hover {
width:170px;
}

/*This clears floats after the columns, make it a habit to do this*/
.row:after{
content:"";
display:table;
clear:both;
}
 h1,h2,h3,h4,h5,h6{
margin:5px;
margin-top:5px;
}

/*search*/
.header .search-container{
float:right;
margin-top:-40px;
position:sticky;
}

.header input[type=text]{
padding:6px;
border:none;
margin-top:4px;
margin-right:1px;
font-size: 15px;
color:black;
resize:horizontal;
}


.header .search-container button{
float:right;
border:none;
background-color:black;
color:#e8e8e8;
cursor:pointer;
margin-right:5px;
margin-top:4px;
margin-left:1px;
height:30px;
}

.search-container button:hover{
background-color:gray;
color:black;
}



/*Styling the dropdown button*/

.drpbtn-container{
position:relative;
display:inline-block;
background-color:black;
width:50%;
height:35px;
}

.drpbtn{
padding:5px;
color:white;
background-color:#141414;
width:100%;
font-size:17px;
height:35px;
}

.drpbtn-content{
background-color:white;
box-shadow:0px 8px 16px 0px rgba(0,0,0,0.2);
display:none;
position:absolute;
z-index:1;
min-width:100%;
}

.drpbtn-container a{
font-size:15px;
background-color:white;
color:#141414;
padding:10px;
text-decoration:none;
display:block;
}

.drpbtn-container:hover .drpbtn{
background-color:#575757;
}

.drpbtn-container a:hover{
background-color:#e8e8e8;
}

.drpbtn-container:hover .drpbtn-content{
display:block;
}

/*Responsive layer*/
@media screen and (max-width:700px){

.header .search-container,.header input[type = text]{
width:30%;
}
.drpbtn .drpbtn-content a{
width:100%;
}
.article{
display:inline-block;
width:300px;
transition:width 0.5s ease;
}
 .article:hover {
width:350px;
}
}
</style>
</head>

<body>
<div class="header">

<p>
<h2 style = "position:sticky; margin-top:-20px;">The Manino Store</h2>

<div class = "search-container">
<form action = "searchaction.php" method = "get">
<input type = "text" id = "search" name = "search" placeholder="Search..">
<button type = "submit"><i class = "fa fa-search"></i></button>
</form>
</div>
</p>
<div>

<?php include 'menu.html';?>


<div class = "drpbtn-container">
<button class = "drpbtn">Categories</button>
<div class = "drpbtn-content">
<a href = "/nono/shoespage.php">Shoes</a>
<a href = "/nono/watchespage.php">Watches</a>
<a href = "/nono/beltspage.php">Belts</a>
<a href = "/nono/pursespage.php">Purses</a>
<a href = "/nono/cardholderspage.php">Card holders</a>
<a href = "/nono/briefcasespage.php">Briefcases</a>
</div>
</div>

<div class = "column">
<div class = "article">
<img src = "/nono/leather2.jpg" />
<p>This is a bag</p>
</div>




</body>

<script>
showsearch(){
var el = document.getElementsById("search");
el[0].style.display = "inline-block";
}
</script>
</html>