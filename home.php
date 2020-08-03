<!DOCTYPE html>
<html lang = "en">

<head>
<style>
body {
  	margin: 0;
	background-image:url('/nono/homeback.jpg');
	background-size:cover;
	background-color: rgba(255,255,255,0.05);
	background-blend-mode:lighten;
	background-attachment:fixed;
}


*{box-sizing:border-box;}

/*Slideshow container*/
.maninoslide{
width:600px;
height:300px;
position:relative;
margin-top:35px;
margin-left:300px;
align:center;

}

/*Hide the images by dedault*/
.slidez{
display:none;}

img{
width:100%;
height:300px;
}


/*Next and Previous*/
.prev,.next{
cursor:pointer;
position:absolute;
top:50%;
width:auto;
margin-top:-22px;
padding:16px;
color:white;
font-weight:bold;
font-size:18px;
transition: 0.6s
transition-timing-function: ease;
border-radius:3px,3px,3px,3px;
user-select:none;
}


.next{
right:0;
border-radius:0,3px,3px,0}

.prev{
left:0;
border-radius:3px,0,0,3px;
}

.next:hover,.prev:hover{
background-color:black;
}

/*caption*/
.caption{
color:#000000;
font-size:20px;
font-family:times new roman;
padding:8px;
position:absolute;
top:3%;
width:100%;
text-align:center;

}

/*numbertext*/
.numbertext{
color:#000000;
font-size:12px;
padding:8px;
position:absolute;
bottom:8px;
}

.dot{
cursor:pointer;
height:10px;
width:10px;
margin:0,2px;
border-radius:50%;
display:inline-block;
transition:background-color 0.6s;
transition-timing-function:ease;
}

.active, .dot:hover {
  background-color: #717171;
}

.gridcontainer{
display:grid;
grid-template-columns:auto;
padding:10px;
}

.griditem1{
background-color:rgba(255,255,255,0.1);
text-align:center;
font-size:25px;
font-family:times new roman;
height:60px;
color:#b3adab;

}
.griditem2{
background-color:rgba(255,255,255,0.75);
height:400px;
}




@media screen and (max-width:600px){
.gridcontainer{
width:100%;
}
.griditem1{
font-size:20px;
}
.maninoslide
{width:100%;
height:200px;
margin-left:0;}
}




</style>
</head>

<link rel = "stylesheets" href = "https://www.w3schools.com/w3css/4/w3.css">

<body>
<?php 
include 'title.html';
include'menu.html';
?>

<div class = "gridcontainer">
<div class= "griditem1">Youre Welcome to the Manino official website</div>

<div class= "griditem2">


<!--Slideshow container-->
	<div class = "maninoslide">

<!--Images and numbers-->

<div class ="slidez ">
	<div class = "numbertext">1/6</div>
	<a href = "/nono/watchespage.php">
	<img src = "/nono/items/watches.jpg"/>
	</a>
	<div class ="caption">Shop for watches</div>
	</div>

<div class ="slidez ">
	<div class = "numbertext">2/6</div>
	<a href = "/nono/beltspage.php">
	<img src = "/nono/items/belts.jpg"/>
	</a>
	<div class ="caption">Shop for belts</div>
	</div>

<div class ="slidez">
	<div class = "numbertext">3/6</div>
	<a href = "/nono/cardholderspage.php">
	<img src = "/nono/items/cardholders.jpg"/>
	</a>
	<div class ="caption">Shop for Card Holders</div>
	</div>

<div class ="slidez ">
	<div class = "numbertext">4/6</div>
	<a href = "/nono/shoespage.php">
	<img src = "/nono/items/shoes.jpg"/>
	</a>
	<div class ="caption">Shop for shoes</div>
	</div>

<div class ="slidez">
	<div class = "numbertext">5/6</div>
	<a href = "/nono/briefcasespage.php">
	<img src = "/nono/items/briefcases.jpg"/>
	</a>
	<div class ="caption">Shop for Briefcases</div>
	</div>


<div class ="slidez ">
	<div class = "numbertext">6/6</div>
	<a href = "/nono/pursespage.php">
	<img src = "/nono/items/purses.jpg"/>
	</a>
	<div class ="caption">Shop for purses</div>
	</div>

<!--Next and previous buttons-->
	<a class = "prev" onclick ="plusSlides(-1)">&#10094;</a>
	<a class = "next" onclick ="plusSlides(1)">&#10095;</a>


	</div><br/>
<!--dots-->

<div style = "text-align:center">
<span class = "dot" onclick = "currentSlide(1)"></span>
<span class = "dot" onclick = "currentSlide(2)"></span>
<span class = "dot" onclick = "currentSlide(3)"></span>
<span class = "dot" onclick = "currentSlide(4)"></span>
<span class = "dot" onclick = "currentSlide(5)"></span>
<span class = "dot" onclick = "currentSlide(6)"></span>
</div>


</div>
</div>

<script>
var slideIndex = 1;
carousel();
var stop;

//Next/previous
function plusSlides(n){
clearTimeout(stop);
showSlides(slideIndex+=n);
}

//Thumbnail images
function currentSlide(n){
clearTimeout(stop);
showSlides(slideIndex=n);}

//Manual sliding
function showSlides(n){
var i;
var slides = document.getElementsByClassName("slidez");
var dots = document.getElementsByClassName("dot");
if(n>slides.length){slideIndex = 1;}
if(n<1){slideIndex = slides.length;}

for(i = 0;i<slides.length;i++){
slides[i].style.display="none";
}

for(i = 0;i<dots.length;i++){
dots[i].className= dots[i].className.replace(" active","");
}

slides[slideIndex-1].style.display= "block";
dots[slideIndex-1].className +=" active";
}


//Automatic sliding
function carousel() {
  var i;
  var x = document.getElementsByClassName("slidez");
var y = document.getElementsByClassName("dot");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
for(i = 0;i<y.length;i++){
y[i].className= y[i].className.replace(" active","");
}
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1;}
  x[slideIndex-1].style.display = "block";
y[slideIndex-1].className +=" active";
  stop= setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>






</body>
</html>