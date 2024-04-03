<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!doctype html>
<html lang="en">
  <head>
    
    <title>About us - Home Solutions</title>

    
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  </head>
  <body id="home">
<?php include_once('includes/header.php');?>

<script src="assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->

<script src="assets/js/bootstrap.min.js"></script>


<script>
$(function () {
  $('.navbar-toggler').click(function () {
    $('body').toggleClass('noscroll');
  })
});
</script>



    <section class="w3l-inner-banner-main">
        <div class="about-inner about ">
            <div class="container">   
                <div class="main-titles-head text-center">
                <h3 class="header-name ">
					About Us
                </h3>
            </div>
</div>
   </div>
   <div class="breadcrumbs-sub">
   <div class="container">   
    <ul class="breadcrumbs-custom-path">
        <li class="right-side propClone"><a href="index.php" class="">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a> <p></li>
        <li class="active ">About</li>
    </ul>
</div>
</div>
        </div>
    </section>

<section class="w3l-content-with-photo-4"  id="about">
    <div class="content-with-photo4-block ">
        <div class="container">
            <div class="cwp4-two row">
            <div class="cwp4-image col-xl-6">
                <img src="assets/images/plumber.webp" alt="product" class="img-responsive about-me">
            </div>
                <div class="cwp4-text col-xl-6 ">
                    <div class="posivtion-grid">
                    <h3 class="">Services Provided</h3>
                    <div class="hair-two-colums">
                        <div class="hair-left">
<h5>
    Carpentry</h5>
</div>
                        <div class="hair-left">
                            <h5>Home Cleaning</h5>
                        </div>
                            <div class="hair-left">
                                                        <h5>AC Repair</h5>

                                                    </div>
                                                                                <div class="hair-left">
                                                                                    <h5>Plumbing</h5>
                                    
                                                                                </div>
                                                                                 <div class="hair-left">
                                                                                    <h5>Car Wash</h5>
                                                                                </div>

   <div class="hair-left">
                                                                                    <h5>Bathroom Cleaning</h5>
                                                                                </div>
                                                                                   <div class="hair-left">
                                                                                    <h5>Haircut</h5>
                                                                                </div>

                                                                                   <div class="hair-left">
                                                                                    <h5>Body Spa</h5>
                                                                                </div>

                                                                                <div class="hair-left">
                                                                                    <h5>Massage</h5>
                                                                                </div>

                                                                                <div class="hair-left">
                                                                                    <h5>Facial</h5>
                                                                                </div>

                    
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
</section>

<section class="w3l-recent-work">
	<div class="jst-two-col">
		<div class="container">
<div class="row">
		<div class="my-bio col-lg-6">

	<div class="hair-make">
		<?php

$ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
		<h5><a href="blog.html"><?php  echo $row['PageTitle'];?></a></h5>
		<p class="para mt-2">Home Solutions is a technology platform offering a variety of services at home. Customers use our platform to book services such as beauty treatments, haircuts, massage therapy, cleaning, plumbing, carpentry, appliance repair, painting etc. These services are delivered in the comfort of their home and at a time of their choosing. We promise our customers a high quality, standardised and reliable service experience. To fulfill this promise, we work closely with our hand-picked service partners, enabling them with technology, training, products, tools, financing, insurance and brand, helping them succeed and deliver on this promise.
Our Vision: Empower millions of professionals worldwide to deliver services at home like never experienced before</p>
        <?php } ?>
	</div>
	
	
	</div>
	<div class="col-lg-6 ">
		<img src="assets/images/b3.jpg" alt="product" class="img-responsive about-me">
	</div>

</div>
		</div>
	</div>
</section>
<?php include_once('includes/footer.php');?>

<button onclick="topFunction()" id="movetop" title="Go to top">
	<span class="fa fa-long-arrow-up"></span>
</button>
<script>
	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function () {
		scrollFunction()
	};

	function scrollFunction() {
		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			document.getElementById("movetop").style.display = "block";
		} else {
			document.getElementById("movetop").style.display = "none";
		}
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
	}
</script>

</body>

</html>