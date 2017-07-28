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
if(isset($_GET['alogout']))
{
	unset($_SESSION['sudeep7410']);
	
}
?>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  

    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
 <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
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
  
  .scrollable{
	  height:220px;
	  overflow: scroll;
  }
</style>
</head>
<body>
    <div class="container-fluid"><br><br><br><br><br><br><br><br><br>
	<div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-left:120px; margin-right:120px;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
     
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="photos/McGovern-Ed-Group-Indian-Students-3.jpg.jpg" alt="Los Angeles" style="width:100%; height:65%;">
        <div class="carousel-caption">
        </div>
      </div>

      <div class="item">
        <img src="photos/hand.jpg" alt="Chicago" style="width:100%; height:65%;">
        <div class="carousel-caption">
          
        </div>
      </div>
	 
	 <div class="item">
        <img src="photos/placements1.jpg" alt="Chicago" style="width:100%; height:65%;">
        <div class="carousel-caption">
          
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

    <div class="container-fluid">
    <div class="row">
	<div class="col-md-1">
	</div>
				<div class="col-md-5" style="margin-left:0px"><br><h3 style="font-size:40px ;font-family: 'Oswald'">About us</h3><br>
  <p style="font-size:17px;color:;font-family: 'Cabin', sans-serif;">Indian Institute of Information Technology Kalyani, the pioneer of technical education in India is the most diversified of the IIITs. The Institute consistently attracts the finest faculty and students for its undergraduate programs in engineering.<br><br>
IIIT Kalyani has always been the pacesetter in diverse fields of education and research in India. The alumni of this Institute occupy top positions in business, industry, R&D and academia in India and abroad. Over and above a rigorous academic schedule, we place a great emphasis on all-round development of our students. The beautiful campus, far away from the city, provides an excellent environment for learning.
				</p>
        </div>
		
<div class="col-md-6"  style="margin-left:0px"><br><h3 style="font-size:40px ;font-family: 'Oswald'">Annoucement</h3><br>
<div style="font-size:17px;color:#BF360C;font-family: 'Cabin', sans-serif;"><marquee direction = "up" scrollamount="4" onmouseover="stop();"  onmouseout="start();">
        <p style="color:;">1 - Company xyz is coming on 22th August 2017. The company name will be revealed before 2 days of the test. It will be for both 3rd year and 4th year students for internships and placements respectively. It will have 3 rounds i.e Mental Ability, coding round and HR interview. At each round there will be elimination. </p>
		
       <p style="color:;">2 - The Bob Marley biography provides testament to the unparalleled influence of his artistry upon global culture. Since his passing on May 11, 1981, Bob Marley’s legend looms larger than ever, as evidenced by an ever-lengthening list of accomplishments attributable </p>
	   
	   <p style = "color:;">3 - The Bob Marley biography provides testament to the unparalleled influence of his artistry upon global culture. Since his passing on May 11, 1981, Bob Marley’s legend looms larger than ever, as evidenced by an ever-lengthening list of accomplishments attributable </p></marquee>
</div>
</div>
        </div>
        </div>
		<!--
		<hr>
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
		-->
    </div><br><br>
<?php
include("footer.php");
?>
   
</body>

</html>
