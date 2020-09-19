<!DOCTYPE html>
<html>
<head>
<script>

function clickCounter(){
if(typeof(Storage) !== "undefined"){
if(sessionStorage.clickcount){
sessionStorage.clickcount = Number(sessionStorage.clickcount)+1;
}
else{
sessionStorage.clickcount = 1;}


document.getElementById("answer").innerHTML = 
"You have clicked this button " + sessionStorage.clickcount + " times this session.";
}
else{
document.getElementById("answer").innerHTML = "Sorry your browser does not support webstorage";
}

}
</script>
</head>
<body style = "padding:30px">
<p><button onclick = "clickCounter()" type = "button" >Click me</button></p>
<div id ="answer"></div>
</body>
</html>