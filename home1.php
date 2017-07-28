<?php 
session_start();
if(isset($_GET['clogout']))
{
	unset($_SESSION['semail']);
	unset($_SESSION['oldcname']);
}

if(isset($_GET['slogout']))
{
	unset($_SESSION['ssemail']);
	unset($_SESSION['oldsname']);
}

?>
<html>
<head>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
 <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<?php
include("index.php");
?>
<style>
    .button {
    background-color:lightgrey; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.button2 {
    background-color: white; 
    color: black; 
    border: 2px solid #008CBA;
}
    .body{ font-family: :'Roboto', sans-serif;}
/*top background*/
    .vertical-line{
      width: 1px; /* Line width */
      background-color: black; /* Line color */
      height: 100%; /* Override in-line if you want specific height. */
      float: right; /* Causes the line to float to left of content. 
        You can instead use position:absolute or display:inline-block
        if this fits better with your design */
    }
.mySlides {display:none;
    }
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
    .grey-box {
    background-color:#bdc3c7;
    text-align: center;
  }
     .box {
    
    text-align: center;
  }
</style>
</head>
<body>
    <div class="container-fluid"><br><br>
<div class="w3-content w3-display-container" style="max-width:1000px">

<div class="w3-display-container mySlides">
  <img src="photos/McGovern-Ed-Group-Indian-Students-3.jpg" style="width:100%">
  <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 "></div>
</div>

<div class="w3-display-container mySlides">
  <img src="photos/hand.jpg" style="width:100%"> <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 "></div>
</div>


<button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
<button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>

</div>
    <div class="container-fluid">
    <div class="row">
				<div class="col-md-6 container" style="margin-left:50px"><br><br><br><h3 style="font-size:40px ;font-family: 'Oswald'">About us</h3><br>
  <p>The Bob Marley biography provides testament to the unparalleled influence of his artistry upon global culture. Since his passing on May 11, 1981, Bob Marley’s legend looms larger than ever, as evidenced by an ever-lengthening list of accomplishments attributable to his music, which identified oppressors and agitated for social change while simultaneously allowing listeners to forget their troubles and dance.Bob Marley was posthumously inducted into the Rock and Roll Hall of Fame in 1994; in December 1999, his 1977 album “Exodus” was named Album of the Century by Time Magazine and his song “One Love” was designated Song of the Millennium by the BBC. Since its 
				</p>
        </div><div class="col-md-1 box"><br><br><br><div class="vertical-line" style="height: 200px;" ></div>
</div><div class="col-md-4 container"  style="margin-left:50px"><br><br><br><h3 style="font-size:40px ;font-family: 'Oswald'">Annoucement</h3><br>
        <p>The Bob Marley biography provides testament to the unparalleled influence of his artistry upon global culture. Since his passing on May 11, 1981, Bob Marley’s legend looms larger than ever, as evidenced by an ever-lengthening list of accomplishments attributable </p>
        <button class="button button2">know more</button></div>
        </div>
        </div><hr>
        <div class="rows"><h3 style="font-size:40px ;font-family: 'Oswald';margin-left:60px">News</h3><br>
            <div class="col-md-4">
  <p><b>The Bob Marley biography provides testament</b>The Bob Marley biography provides testament to the unparalleled influence of his artistry upon global culture. Since his passing on May 11, 1981, Bob Marley’s legend looms larger than ever, as evidenced by an ever-lengthening list of accomplishments attributable to  
				</p>
            </div>
             <div class="col-md-4">
                 <p><b>The Bob Marley biography provides testament</b> to the unparalleled influence of his artistry upon global culture. Since his passing on May 11, 1981, Bob Marley’s legend looms larger than ever, as evidenced by an ever-lengthening list of accomplishments attributable to  
				</p>
            </div>
             <div class="col-md-4">
  <p><b>The Bob Marley biography provides testament</b>The Bob Marley biography provides testament to the unparalleled influence of his artistry upon global culture. Since his passing on May 11, 1981, Bob Marley’s legend looms larger than ever, as evidenced by an ever-lengthening list of accomplishments attributable to  
				</p>
            </div>            
        </div>
    </div><br><br>
<?php
include("footer.php");
?>
    <script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block"; 

  dots[slideIndex-1].className += " w3-white";
     
}</script>
</body>

</html>
