<?php
include 'connection.php';
include 'session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>home</title>
	<link rel="stylesheet" href="css/home.css">
	<script type="text/javascript" src="js/home.js"></script>
	<script src="jQuery\jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/slider/jssor.js"></script>
<script type="text/javascript" src="js/slider/jssor.slider.js"></script>
</head>
<body style="padding:0px; margin:0px; font-family:Arial, Verdana;background-color:#fff;">
	<header>
		<nav>
			<div>
		         <img src="images/logo3.png" alt="" class="p1" />
	              <h1>$hopkeeper</h1>
	             <img src="images/logo4.png" alt="" class="p1" />
	             <a href="http://localhost:8080/project/index.php"><img src="images/logoutlogo.png" alt="" class="p2"></a>
	        </div>
	    </nav>
    </header>
	<script>
	$(function(){
		$("#admin").hide();
		$("#admin1").hide();
	});
	</script>
	<?php
$k="SELECT * FROM `admin` WHERE mobno='$nm'";
$kk=mysqli_query($con,$k);
if($kk)
{
$kkk=mysqli_fetch_row($kk);
if($kkk[2]==$nm)
{?>
<script>
$(function(){
		$("#admin").show();
		$("#admin1").show();
	});
</script>
<?php
}
}
?>
    	<div class="devider">
    <ul>
		<li>Home
			<ul>
    			<li><a href="home.php">Home</a></li>
    			<li><a href="sale.php">Sales</a></li>
			</ul>
		</li>	
    		<li id="admin">Administrator
				<ul>
				   <li><a href="http://localhost:8080/project/additem.php">Add item</a></li>
				   <li><a href="http://localhost:8080/project/addsupplier.php">Add supplier</a></li>
				   <li><a href="http://localhost:8080/project/addcategory.php">Add category</a></li>
				   <li><a href="http://localhost:8080/project/addbrand.php">Add brand</a></li>
				</ul>
			</li>
			<li id="admin1">Reports
				   <ul>
				   <li><a href="http://localhost:8080/project/adminreport.php">Admins reports</a></li>
				   <li><a href="http://localhost:8080/project/userreport.php">Users reports</a></li>
                   <li><a href="http://localhost:8080/project/itemreport.php">Item reports</a></li>			  
				  <li><a href="http://localhost:8080/project/sellreport.php">Sell reports</a></li>
				   <li><a href="http://localhost:8080/project/supplierreport.php">Supplier report</a></li>
				   <li><a href="http://localhost:8080/project/brandreport.php">Brand report</a></li>
				   <li><a href="http://localhost:8080/project/categoryreport.php">Category report</a></li>
				</ul>
			</li>
				<li>Category
				   <ul>
				   <form action="" method="post">
				   <?php
						$ca="SELECT * FROM `category`";
						$cata=mysqli_query($con,$ca);
						while($row=mysqli_fetch_row($cata))
                        {
							echo("<li><input type='radio' name='radio1' value='$row[1]'>$row[1]</li>");
						}
				   ?>
				  <li> <ul><input type="submit" value="APPLY" name="apply" class="app"></ul></li>
				   </ul>
				</li>
				<li>Brand
				   <ul>
				   <?php
						$brand1="SELECT * FROM `brand`";
						$brand2=mysqli_query($con,$brand1);
						while($row=mysqli_fetch_row($brand2))
                        {
							echo("<li><input type='radio' name='radio2' value='$row[1]'>$row[1]</li>");
						}
				   ?>
				  <li> <ul><input type="submit" value="APPLY" name="apply" class="app"></ul></li>
				   </form>
				   </ul>
				</li>
				<li>About us
				   <ul>
				    <li><a href="#">Designer details</a></li>
				   <li><a href="http://localhost:8080/project/comment.php">Users comments</a></li>
				   <li><a href="http://localhost:8080/project/mail.php">Contact</a></li>
				   <li><a href="#">Help</a></li>
				</ul>
			</li>
			<a href="#"><img src="images/cart.png" alt="" class="cart" /></a>
    			<li class="ss"><img src="images/admin.png" alt="" class="ss1" />Hii!
				<?php
				$w="SELECT * FROM `createaccount` WHERE mobileno='$nm'";
$ww=mysqli_query($con,$w);
if($ww)
{
$www=mysqli_fetch_row($ww);
if($www[4]==$nm)
{
	echo("$www[1]");
}
}
?>
				   <ul>
				   <li><a href="http://localhost:8080/project/profile.php">Profile</a></li>
				   <li><a href="#">Orders</a></li>
				   <li><a href="http://localhost:8080/project/changepassword.php">Change password</a></li>
				   <li><a href="http://localhost:8080/project/deleteaccout.php" onclick="return confirm('ARE U SURE TO DELETE THE ACCOUNT??')">Delete account</a></li>
				   </ul>
				</li>
			    		</ul>
    		</div>
				<script>
    jQuery(document).ready(function ($) {

        var _CaptionTransitions = [];
        _CaptionTransitions["L"] = { $Duration: 900, x: 0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
        _CaptionTransitions["R"] = { $Duration: 900, x: -0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
        _CaptionTransitions["T"] = { $Duration: 900, y: 0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
        _CaptionTransitions["B"] = { $Duration: 900, y: -0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
        _CaptionTransitions["ZMF|10"] = { $Duration: 900, $Zoom: 11, $Easing: { $Zoom: $JssorEasing$.$EaseOutQuad, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
        _CaptionTransitions["RTT|10"] = { $Duration: 900, $Zoom: 11, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseOutQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.8} };
        _CaptionTransitions["RTT|2"] = { $Duration: 900, $Zoom: 3, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Round: { $Rotate: 0.5} };
        _CaptionTransitions["RTTL|BR"] = { $Duration: 900, x: -0.6, y: -0.6, $Zoom: 11, $Rotate: 1, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $Round: { $Rotate: 0.8} };
        _CaptionTransitions["CLIP|LR"] = { $Duration: 900, $Clip: 15, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2 };
        _CaptionTransitions["MCLIP|L"] = { $Duration: 900, $Clip: 1, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic} };
        _CaptionTransitions["MCLIP|R"] = { $Duration: 900, $Clip: 2, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic} };

        var options = {
            $FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
            $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
            $AutoPlayInterval: 3000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
            $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

            $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
            $SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
            $SlideDuration: 800,                               //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
            $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
            //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
            //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
            $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
            $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
            $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
            $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
            $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
            $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

            $CaptionSliderOptions: {                            //[Optional] Options which specifies how to animate caption
                $Class: $JssorCaptionSlider$,                   //[Required] Class to create instance to animate caption
                $CaptionTransitions: _CaptionTransitions,       //[Required] An array of caption transitions to play caption, see caption transition section at jssor slideshow transition builder
                $PlayInMode: 1,                                 //[Optional] 0 None (no play), 1 Chain (goes after main slide), 3 Chain Flatten (goes after main slide and flatten all caption animations), default value is 1
                $PlayOutMode: 3                                 //[Optional] 0 None (no play), 1 Chain (goes before main slide), 3 Chain Flatten (goes before main slide and flatten all caption animations), default value is 1
            },

            $BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
                $Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
                $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                $SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                $SpacingY: 8,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                $Orientation: 1,                                //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                $Scale: false                                   //Scales bullets navigator or not while slider scale
            },

            $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
            }
        };

        var jssor_slider1 = new $JssorSlider$("slider1_container", options);

        //responsive code begin
        //you can remove responsive code if you don't want the slider scales while window resizes
        function ScaleSlider() {
            var bodyWidth = document.body.clientWidth;
            if (bodyWidth)
                jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1920));
            else
                window.setTimeout(ScaleSlider, 30);
        }
        ScaleSlider();

        $(window).bind("load", ScaleSlider);
        $(window).bind("resize", ScaleSlider);
        $(window).bind("orientationchange", ScaleSlider);
        //responsive code end
    });
</script>
<div>
	<div id="slider1_container" style="position: relative;top:100px; z-index:0;left: 0px; width: 1300px; height: 500px; overflow:hidde;">
    <!-- Loading Screen -->
    <div u="loading" style="position: absolute; top: 0px; left: 0px;">
        <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
                top: 0px; left: 0px; width: 100%; height: 100%;">
        </div>
        <div style="position: absolute; display: block; background: url() no-repeat center center;
                top: 0px; left: 0px; width: 100%; height: 100%;">
        </div>
    </div>
    <!-- Slides Container -->
    <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px;
            height: 500px; overflow: hidden;">
        <div>
            <img u="image" src="images/sp16.jpeg" />
        </div>
        <div>
            <img u="image" src="images/sp102.jpeg"/>
        </div>
        <div>
            <img u="image" src="images/sp104.jpg" />
        </div>
		<div>
            <img u="image" src="images/sp100.jpeg" />
        </div>
		<div>
            <img u="image" src="images/v5.jpg" />
        </div>
        <div>
            <img u="image" src="images/v12.jpg"/>
        </div>
        <div>
            <img u="image" src="images/v4.jpg" />
        </div>
		<div>
            <img u="image" src="images/v18.jpg" />
        </div>
		<div>
            <img u="image" src="images/v2.jpg" />
        </div>
        <div>
            <img u="image" src="images/v11.jpg" />
        </div>
		<div>
        <img u="image" src="images/v17.jpg" />
		</div>
	    <div>
        <img u="image" src="images/v13.jpg" />
        </div>
		<div>
            <img u="image" src="images/v3.jpg" />
        </div>
    </div>

    <!-- Bullet Navigator Skin Begin -->
    <style>
        /* jssor slider bullet navigator skin 21 css */
        /*
        .jssorb21 div           (normal)
        .jssorb21 div:hover     (normal mouseover)
        .jssorb21 .av           (active)
        .jssorb21 .av:hover     (active mouseover)
        .jssorb21 .dn           (mousedown)
        */
        .jssorb21 div, .jssorb21 div:hover, .jssorb21 .av
        {
            background: url(images/b21.png) no-repeat;
            overflow:hidden;
            cursor: pointer;
        }
        .jssorb21 div { background-position: -5px -5px; }
        .jssorb21 div:hover, .jssorb21 .av:hover { background-position: -35px -5px; }
        .jssorb21 .av { background-position: -65px -5px; }
        .jssorb21 .dn, .jssorb21 .dn:hover { background-position: -95px -5px; }
    </style>
    <!-- bullet navigator container -->
    <div u="navigator" class="jssorb21" style="position: absolute; bottom: 26px; left: 6px;">
        <!-- bullet navigator item prototype -->
        <div u="prototype" style="POSITION: absolute; WIDTH: 19px; HEIGHT: 19px; text-align:center; line-height:19px; color:White; font-size:12px;"></div>
    </div>
    <!-- Bullet Navigator Skin End -->

    <!-- Arrow Navigator Skin Begin -->
    <style>
        /* jssor slider arrow navigator skin 21 css */
        /*
        .jssora21l              (normal)
        .jssora21r              (normal)
        .jssora21l:hover        (normal mouseover)
        .jssora21r:hover        (normal mouseover)
        .jssora21ldn            (mousedown)
        .jssora21rdn            (mousedown)
        */
        .jssora21l, .jssora21r, .jssora21ldn, .jssora21rdn
        {
            position: absolute;
            cursor: pointer;
            display: block;
            background: url(images/a21.png) center center no-repeat;
            overflow: hidden;
        }
        .jssora21l { background-position: -3px -33px; }
        .jssora21r { background-position: -63px -33px; }
        .jssora21l:hover { background-position: -123px -33px; }
        .jssora21r:hover { background-position: -183px -33px; }
        .jssora21ldn { background-position: -243px -33px; }
        .jssora21rdn { background-position: -303px -33px; }
    </style>
    <!-- Arrow Left -->
    <span u="arrowleft" class="jssora21l" style="width: 55px; height: 55px; top: 123px; left: 8px;">
        </span>
    <!-- Arrow Right -->
    <span u="arrowright" class="jssora21r" style="width: 55px; height: 55px; top: 123px; right: 8px">
        </span>
    <!-- Arrow Navigator Skin End -->
    <a style="display: none" href="http://www.jssor.com">jQuery Slider</a>
</div>
</div>
</div>
<div class="devider1"></div>
<div class="devider2">
<?php
if(isset($_POST['apply']))
{
$itm=$_POST['radio1'];
$itm2=$_POST['radio2'];
if(($itm!='')&&($itm2!=''))
$x="select * from items where brand='$itm2' and category='$itm'";
elseif($itm=="" && $itm2!="")
$x="select * from items where brand='$itm2'";
elseif($itm2=="" && $itm!='')
$x="select * from items where category='$itm'";
else
$x="select * form items";
$xx=mysqli_query($con,$x);
while($row=mysqli_fetch_row($xx))
{
echo("
<form action='' method='post' class='form1'>
<table class='t11'>
<tr>
<td class='td1' name='j1' value='$row[3]'>$row[3]</td>
<td class='td2' name='j2' value='$row[6]'>RS.- $row[6]</td>
</tr>
<tr>
<td colspan='2'  name='j3' value='images/$row[1]'><img src='images/$row[1]' alt='no img' class='imgcls'></td>
</tr>
<tr>
<td class='td4'  name='j4' value='$row[2]'>$row[2]</td>
<td class='td3' name='j5' value='$row[4]'>$row[4]</td>
</tr>
<tr>
<td colspan=2 ><input type='submit' value='ADD TO CART' name='add' class='sbmt'></td>
</tr>
<input type='hidden'  name='j1' value='$row[0]' >
</table>
</form>
");
}
}
else
{
$x="select * from items";
$xx=mysqli_query($con,$x);
while($row=mysqli_fetch_row($xx))
{
echo("
<form action='' method='post' class='form1'>
<table class='t11'>
<tr>
<td class='td1'>$row[3]</td>
<td class='td2' >RS.- $row[6]</td>
</tr>
<tr>
<td colspan='2' ><img src='images/$row[1]' alt='no img' class='imgcls'></td>
</tr>
<tr>
<td class='td4' >$row[2]</td>
<td class='td3' >$row[4]</td>
</tr>
<tr>
</tr>
<input type='hidden'  name='j1' value='$row[0]'>
<td align='center'><a href='cart.php?itemid=$row[0]'  class='nn'> Add to cart </td>
<td align='center'><a href='buynow.php??itemid=$row[0]' class='nn'> Buy now </td>
</table>
</form>
");
}
}
?>
</div>
</body>
</html>