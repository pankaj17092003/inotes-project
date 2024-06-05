 var i=0;
function blink(){
i=i+1;
  if(i==1){
  
  document.getElementById("b").innerHTML="HTML";
  document.getElementById("b").style.color="rgb(162, 31, 227)";
  }
else if(i==2)
{
  
  document.getElementById("b").innerHTML="CSS";
  }
  else if(i==3){
  
    document.getElementById("b").innerHTML="BOOTSTRAP";
  }
  else if(i==4){
  
    document.getElementById("b").innerHTML="JAVA SCRIPT";
  }
  
  else if(i==5){
  
    document.getElementById("b").innerHTML="PYTHON";
  }
  else if(i==6){
  
    document.getElementById("b").innerHTML="PHP";
  }
  
  else if(i==7){
  
    document.getElementById("b").innerHTML="DJENGO";
  }
  else if(i==8){
  
    document.getElementById("b").innerHTML="DSA";
  }
  
  else if(i==9){
  
    document.getElementById("b").innerHTML="JAVA";
  }
  
  else if(i==10){
  
    document.getElementById("b").innerHTML="MYSQL";
  }
  else if(i==11){
  
    document.getElementById("b").innerHTML="REACT JS";
  }
  
  
  else{
    document.getElementById("b").innerHTML="C ";
  i=0;
}
setTimeout("blink()",2000);
}

// js code 
		
// scroll down start
function scrollFunction() {
if ( document.body.scrollTop > 20 || document.documentElement.scrollTop > 20)  {
  var a= mybutton.style.display = "block";
}
else {
 a.style.display = "none";
}
}
// When the user clicks on the button, scroll to the top of the document
a.addEventListener("click", backToTop);

function backToTop() {
document.body.scrollTop = 0;
document.documentElement.scrollTop = 0;
}