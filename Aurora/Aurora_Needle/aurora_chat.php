<?php 

include 'Header.php';



?>





<section class= "container"> 


<div class="col-md container"> 


<div class="chat1 container">

<img src="/Group-project/images/cimage10.jpeg" class=" acim img-fluid"> </img>

<div class="text actext" > <h3>AURORA ASKEN </h3>
<h3>Designer </h3>


</div>


</div>

<div class="chatbox col"> 


<svg id="mySVG">
  <path fill="none" stroke="red" stroke-width="3" id="triangle" d="M150 0 L75 200 L225 200 Z" />
  Sorry, your browser does not support inline SVG.
</svg>
<script>
// Get the id of the <path> element and the length of <path>
var triangle = document.getElementById("triangle");
var length = triangle.getTotalLength();

// The start position of the drawing
triangle.style.strokeDasharray = length;

// Hide the triangle by offsetting dash. Remove this line to show the triangle before scroll draw
triangle.style.strokeDashoffset = length;

// Find scroll percentage on scroll (using cross-browser properties), and offset dash same amount as percentage scrolled
window.addEventListener("scroll", myFunction);

function myFunction() {
var scrollpercent = (document.body.scrollTop + document.documentElement.scrollTop) / (document.documentElement.scrollHeight - document.documentElement.clientHeight);

  var draw = length * scrollpercent;
  
  // Reverse the drawing (when scrolling upwards)
  triangle.style.strokeDashoffset = length - draw;
}
</script>




</div>







 
</div>











</section>