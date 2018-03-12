<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>As Seen On TV</title>
<link rel="stylesheet" type="text/css" href="styles/stylesheets/screen.css" />
<link rel="stylesheet" type="text/css" href="styles/stylesheets/print.css" />
<script src="https://code.jquery.com/jquery-2.2.3.min.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="assets/rs-slides/responsiveslides.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Questrial|Arya:400,700" rel="stylesheet" type="text/css">
<?php
include("includes/favicon_info.inc.php");
?>
</head>

<body>
<div class="wrapper" id="wrapper">
<!--  HEADER  -->
<?php
require_once("includes/navigation.inc.php");
?>
<ul class="rslides">
  <li><img src="images/slider/battle-baloon.jpg" alt="Battle Baloon"></li>
  <li><img src="images/slider/best-sellers.jpg" alt="Best Sellers"></li>
  <li><img src="images/slider/flex-seal-email.jpg" alt="Flex Seal"></li>
  <li><img src="images/slider/rotorazer-saw.jpg" alt="Rotorazer Saw"></li>
</ul>

<!--  MAIN CONTENT  -->
<div class="main">

	<div class="intro-section">
    	<h1 class="intro__header">As Seen on a big screen TV</h1>
        <p class="intro__content">Scratches on your floors? No way! Uneven chopped nuts? Not anymore! Check out our assortment of quality, ready to ship products. They will change your life, guaranteed! We back every product on our site 100%. Can't find anything you like? <a href="#" alt="Contact Us">Contact us</a> to recommend new products or see if we can acommodate you!</p>
    </div>
	<div class="view-more-arrow"><a class="view-more-button" href="javascript:void(0);" alt="View Products"><img src="images/view-more-arrow.png" alt="view our products"  /></a></div>
    
    <div class="callout-container" id="callout-container">
    
        <!--  CALLOUT 1  -->
        <div class="callout callout1">
            <div class="callout__left callout1__left">
                <img src="images/knives/product.jpg" alt="Miracle Blade III Knives" />
            </div>
            <div class="callout__right callout1__right">
                <h3>Miracle Blade III Knives</h3>
                <p>Miracle Blade lll Perfection Series 11 pc set consists of 10 knives for specific cooking purposes and kitchen shears. The Miracle Blade III Knives seen on TV are of professional chef quality. Made of high-quality stainless steel, these knives are durable and never need sharpening.</p>
            </div>
            <div class="callout__link"><a href="miracle-blade.php" alt="View More Information">View More</a></div>
        </div>
        
        <!--  CALLOUT 2  -->
        <div class="callout callout2">
            <div class="callout__left callout2__left">
                <img src="images/globe/product.jpg" alt="Aqua Gloves Watering Bulbs" />
            </div>
            <div class="callout__right callout2__right">
                <h3>Aqua Globes Watering Bulbs</h3>
                <p>Never leave plants un-watered again with Aqua Globes: the hand-blown glass plant watering bulb! Aqua Globes as seen on TV waters plants efficiently for up to 2 weeks.</p>
            </div>
            <div class="callout__link"><a href="aqua-globe.php" alt="View More Information">View More</a></div>
        </div>
        
        <!--  CALLOUT 3  -->
        <div class="callout callout3">
            <div class="callout__left callout3__left">
                <img src="images/chop/product.jpg" alt="Vidalia Chop Wizard" />
            </div>
            <div class="callout__right callout3__right">
                <h3>Vidalia Chop Wizard</h3>
                <p>The Vidalia Chop Wizard As Seen On TV is the fastest, safest, and easiest way to chop or dice fruits and vegetables. Simply place the item on top of the stainless steel blade grate and with one swift motion, swing the top lid down. </p>
            </div>
            <div class="callout__link"><a href="chop-wizard.php" alt="View More Information">View More</a></div>
        </div>
        
        <!--  CALLOUT 4  -->
        <div class="callout callout4">
            <div class="callout__left callout4__left">
                <img src="images/saw/product.jpg" alt="Vidalia Chop Wizard" />
            </div>
            <div class="callout__right callout4__right">
                <h3>Rotorazer Saw</h3>
                <p>Rotorazer&trade; the all-in-one saw that does it all! Rotorazer as seen on TV is so innovative and versatile, you can use it for construction, remodeling, and for all your craft projects. With Rotorazer, everyone cuts like a pro!</p>
            </div>
            <div class="callout__link"><a href="rotorazer.php" alt="View More Information">View More</a></div>
        </div>
    
    <!--  END CALLOUT CONTAINER  -->
    </div>
<!--  END MAIN CONTAINER  -->
</div>

<?php
require_once("includes/footer.inc.php");
?>
<!--  END WRAPPER  -->
</div>
<script>
$('.mobile-nav__slide-down').click(function(){
	$('.mobile-nav__list').slideDown([250]);
});
$('.mobile-nav__slide-up').click(function(){
	$('.mobile-nav__list').slideUp([250]);
});
</script>
<script>
  $(function() {
    $(".rslides").responsiveSlides({
		auto: true,
		speed:500,
		pager: true,
		pause: true
	});
  });
</script>
<script>
//smooth scrolling
$(".view-more-button").click(function() {
    $('html, body').animate({
        scrollTop: $("#callout-container").offset().top
    }, 1000);
});
</script>
</body>
</html>