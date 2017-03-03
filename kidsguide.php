<html>
<head>
<link href="dropdown.css" rel="stylesheet" type="text/css">
<title>Page
</title>
<style>
#d1{background-color:#212834;width:100%;height:800px;}
#d2{background-colo:grey;width:100%;height:160px;}
#d3{background-colo:black;width:100%;height:410px;}
#d4{background-colo:grey;width:100%;height:120px;font-size:30px;margin-left:150px;color:white}
#d5{background-colo:;width:200px;height:430px;margin-left:100px;float:left}
#header{margin-left:100px;margin-top:60px;font-size:40px;color:white;}
#s1{font-size:20px;color:white;font-family:courier}
#s2{font-size:10px;color:white;font-family:courier}
#s3{margin-left:950px}
#check{width:100%;height:60px;}
#check1{width:100%;height:100px;}
#gallery{width:855px;height:100%;background-color:;float:left;margin:30px;
-webkit-animation-name:a;
-webkit-animation-duration:40s;
-webkit-animation-direction:alternate;
background-image:url("image1.jpg");
background-size:100% 100%;
}
@-webkit-keyframes a{
12% {background-image:url("image2.jpg");}
28% {background-image:url("image3.jpg");}
36% {background-image:url("image4.jpg");}
50% {background-image:url("image5.jpg");}
70% {background-image:url("image6.jpg");}
85% {background-image:url("image7.jpg");}
100% {background-image:url("image8.jpg");}
}
</style>
</head>
<body>
<div id=d1>
<div id=d2>
<div id=check></div>
<span id=header>KIDS<span id=s1>guide.com</span></span>
<div id=s3><img src="search1.jpg" width="30px" height="30px"><br><input type="placeholder" name="t1" placeholder="search your book....">
<input type="submit" value="search"></div>
</div>
<div id=d3>
<div id=d5><span id=s2>GUIDE AVAILABLE FOR:</span>
<iframe width="200" height="420" frameborder="10" marginheight="0" allowtransparency="true" scrolling="yes" width="100%"
src="frame.html"></iframe>
</div>
<div id=gallery>
<?php
if(isset($_GET["f1"]))
echo "we get it";
?>
</div>
</div>
<div id=d4><div id=check1></div>Buy Book Online:<a href="http://www.flipkart.com/search?q=book&otracker=start&as-show=on&as=off" target="_blank" style="text-decoration:none;">
<img src="flip.jpg" width="40px" height="40px"
hspace="20"></a><a href="http://www.amazon.in/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=book" style="text-decoration:none;" target="_blank"><img src="amazon.jpg" width="40px" height="40px" hspace="20"></a></div>
</div>
</body>
</html>