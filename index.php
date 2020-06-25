<?php


$file = fopen("keywords.txt","r");
for ($i=0; $i < 17; $i++) {  
	$line = fgets($file);
	$line = rtrim($line);
	$allkeywords[] = $line;
}
fclose($file);

shuffle($allkeywords);
?>

<!DOCTYPE html>
<html lang="en">
<title>Best Gallery wallpaper</title>
<link rel="shortcut icon" href="rz.png">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
.w3-sidebar {
  z-index: 3;
  width: 250px;
  top: 43px;
  bottom: 0;
  height: inherit;
}
</style>
<body>
	<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-theme-l1"><img src="cuy.png"></a>
    <a href="privacypolice.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Privacy Police</a>
    <a href="disclamer.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Disclamers</a>
    <a href="contactus.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact Us</a>
  </div>
</div>
		<br>
		<br>
		<h1 class="w3-center w3-text-teal">BEST GALLERY WALLPAPER</h1>
	
<div class="w3-cell-row" style="width:100%">
  <div class="w3-container w3-flat-pumpkin w3-cell">
    <?php foreach ($allkeywords as $key): ?>
	<ul>
		<a href="Best-Gallery/?page=<?php echo str_replace(" ", "-", $key) ?>"><?php echo $key?></a>
	</ul>
<?php endforeach ?>
  </div>

  <div class="w3-container w3-flat-carrot w3-cell">
    <?php foreach ($allkeywords as $key): ?>
	<ul>
		<a href="Best-Gallery/?page=<?php echo str_replace(" ", "-", $key) ?>"><?php echo $key?></a>
	</ul>
<?php endforeach ?>
  </div>

  <div class="w3-container w3-flat-orange w3-cell">
   <?php foreach ($allkeywords as $key): ?>
	<ul>
		<a href="Best-Gallery/?page=<?php echo str_replace(" ", "-", $key) ?>"><?php echo $key?></a>
	</ul>
<?php endforeach ?>
  </div>
</div>

<!-- Footer -->

<footer class="w3-container w3-padding-32 w3-white w3-center">
  <div class="col-md-12 text-center" style="color:Tomato;">
                <a class="w3-bar-item w3-button w3-hover-black" href="privacypolice.htm">Privacy Police</a>
                <a class="w3-bar-item w3-button w3-hover-black" href="disclamer.html">Disclamers</a>
                <a class="w3-bar-item w3-button w3-hover-black" href="contactus.html">Contact Us</a>
                      
      </div>
  <h4 style="color:Tomato;">Follow Us Here!</h4>
  <div class="w3-xlarge w3-section" style="color:Tomato;">
    <i class="fa fa-facebook-official w3-hover-opacity" href="https://www.facebook.com"></i>
    <i class="fa fa-instagram w3-hover-opacity" href="https://www.instagram.com"></i>
    <i class="fa fa-snapchat w3-hover-opacity" href="https://www.snapchat.com"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity" href="https://www.pinterestcom"></i>
    <i class="fa fa-twitter w3-hover-opacity" href="https://www.twitter.com"></i>
    <i class="fa fa-linkedin w3-hover-opacity" href="https://www.linkedin.com"></i>
  </div>
  <p style="color:Tomato;">Powered by Nurrokhman2019</p>
</footer>
</body>
</html>
