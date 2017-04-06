<!DOCTYPE html>
<html>
<head>
<base target="_parent"></base>
<meta charset="ISO-8859-1">
<title>SuhanaSafar|Book Flights, Hotels & Holidays at best Price!!!</title>
<link href="./CSS/js-image-slider.css" rel="stylesheet" type="text/css" />
<script src="./JavaScript/js-image-slider.js" type="text/javascript"></script>
<link href="./CSS/generic.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script type="text/javascript">

	var make_button_active = function()
	{
		var siblings =($(this).siblings());//Get item siblings
		siblings.each(function (index)	//Remove active class on all buttons
		{
			$(this).removeClass('active');
		}
	)
	$(this).addClass('active');//Add the clicked button class
}
									//Attach events to menu
	$(document).ready(
	function()
	{
		$(".me_nu li").click(make_button_active);
	}  
)
</script>
</head>

<style>

#header 
{
	height : 95px;
	width : auto;
	background-color : #003333;
	box-shadow: 1px 1px 2px #888888;
}

#login
{
	height : 65px;
	width : 250px;
	top : 15px;
	margin-left : 1025px;
	border-radius : 10px;
	border : 1.5px solid black;
	position : absolute;
}

#profile_pic
{
	height : 55px;
	width : 80px;
	top : 20px;
	margin-left : 1030px;
	border-radius : 20px;
	border : 1.5px solid black;
	position : absolute;
}

#lbl
{
	top : 15px;
	margin-left : 95px;
	color : white;
	position : relative;
	font-size : 12px;
}

#lbl1
{
	top : 48px;
	margin-left : 1121px;
	color : white;
	position : absolute;
	font-size : 12px;
	font-weight : bold;
}

#my_account
{
	margin-left : 1121px;
	width : 125px;
	height : 25px;
	top : 50px;
	position : absolute;
}

#image
{
	width : 1000px;
	height : 900px;
	margin-left : 100px;
	background-image: url(./img/back2.jpg);
	background-size: 1000px 900px;

	background-repeat: No-repeat;
	
	margin-top : 15px;
	box-shadow: black;
}

#menu
{
	top : 125px;
	margin-left : 20px;
	width : 1060px;
	height : 50px;
	background-color : white;
	opacity : .4;
	position : absolute;
}

#footer 
{
background-color : #003333;
	margin-top : 2.2px;
    height : 250px;
    color:white;
    clear:both;
    text-align:center;
   	padding:5px;	 	 
	position:relative;
}

#footer_sec1
{
background-color : #003333;
	top: 5px;
	margin-left: 150px;
	height: 240px;
	width: 200px;
	text-align:center;
	position: absolute;
}

#footer_sec2
{
background-color : #003333;
	top: 5px;
	margin-left: 345px;
	height: 240px;
	width: 200px;
	text-align:center;
	position: absolute;	
}

#footer_sec3
{
	background-color : #003333;
	top: 5px;
	margin-left: 540px;
	height: 240px;
	width: 200px;
	text-align:center;
	position: absolute;	
}

#footer_sec4
{
background-color : #003333;
	top: 5px;
	margin-left: 735px;
	height: 240px;
	width: 200px;
	text-align:center;
	position: absolute;	
}

#footer_sec5
{
	background-color : #003333;
	top: 5px;
	margin-left: 900px;
	height: 240px;
	width: 250px;
	text-align:center;
	position: absolute;	
}

#footer_sec4 a{
	text-decoration:none;
	color:white;
	font-size:12px;
}
#footer_sec3 a{
	text-decoration:none;
	color:white;
	font-size:12px;
}
#footer_sec2 a{
	text-decoration:none;
	color:white;
	font-size:12px;
}
#footer_sec1 a{
	text-decoration:none;
	color:white;
	font-size:12px;
}
.me_nu
{
    top : 125px;
	margin-left : 20px;
	position : absolute;
	padding: 0;
	font-size : 15px;
}

.me_nu li 
{
    display: inline;
}

.me_nu li a 
{
	opacity : .8;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 4px 4px 0 0;
}

.me_nu li a:hover 
{
	border-bottom : solid 2px #6C0000;
}

.me_nu li.active a
{
	border-bottom : solid 2px #6C0000;
}

.icons_left
{
	margin-left : 35px;
	width : 200px;
	height : 30px;
	background-color : yellow;
}

.icons_right
{
	margin-left : 255px;
	width : 200px;
	height : 30px;
	background-color : yellow;
}

li span
{
	display : block;
	margin-left : 0.35em;
	font-size : 13px;
}

</style>

<body style = "margin : 0px">

<div id="header">
<a href="home.php"><img src="./img/received_939630352792517.jpeg" style="height:80px; width:150px; margin-top:2px; margin-left:90px; z-index:5" ></a>
	<h6 style="margin-top:0px; margin-left: 82px; z-index:10;color:white">Make the world your spinning wheel</h6>
	<div id = "login">
		<label id = "lbl">
			<?php
			error_reporting(E_ERROR);
				session_start();
				
				if(isset($_SESSION['facebook_data']))
				{
					echo 'Hello!'.$_SESSION['facebook_data']['first_name'];
					echo '<a href = "logout.php" style = "text-decoration : none">';
					echo '|Logout';
				}
				else if(isset($_SESSION['google_data']))
				{
					echo 'Hello!'.$_SESSION['google_data']['given_name'];
					echo '<a href = "logout.php" style = "text-decoration : none">';
					echo '|Logout';
				}
				else if(isset($_SESSION['logged_reg_user']))
				{
					echo 'Hello!'.$_SESSION['user_name'];
					echo '<a href = "logout.php" style = "text-decoration : none">';
					echo '|Logout';
				}
				else
				{
					echo '<a style = "color : white; text-decoration : none" href = "login.php">Login</a>';
				}
			?>
		</label>
	</div>
	<div id = "my_account">
		<label id = "lbl1">
		<?php
			session_start();
			if(isset($_SESSION['logged_reg_user']))
				echo '<a href = "my_account.php" style = "text-decoration : none; color : white">My Account</a>';
			else if(isset($_SESSION['facebook_data']))
				echo '<a href = "my_account.php" style = "text-decoration : none; color : white">My Account</a>';
			else if(isset($_SESSION['google_data']))
				echo '<a href = "my_account.php" style = "text-decoration : none; color : white">My Account</a>';
		?>
		</label>
	</div>
	<div id = "profile_pic">
		<?php
			session_start();
			error_reporting(0);
			if(isset($_SESSION['facebook_data']))
			{
				echo '<img src="'.$_SESSION['facebook_data']['picture']['data']['url'].'" alt="" style = "width : 80px; height : 55px; border-radius : 12px"/>';
			}
			else if(isset($_SESSION['google_data']))
			{
				echo '<img src="'.$_SESSION['google_data']['picture'].'" alt="" style = "width : 80px; height : 55px; border-radius : 12px"/>';
			}
			else if(isset($_SESSION['logged_reg_user']))
			{
				define('DB_HOST', 'localhost:3306'); 
				define('DB_NAME', 'travel_transport'); 
				define('DB_USER','root'); 
				define('DB_PASSWORD',''); 
				$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
				$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
				$query = "select image_path from profile_information where profile_id = (SELECT profile_id from reg_user_profile_link where user_id = '".$_SESSION['SESS_MEMBER_ID']."')";
				$res = mysql_query($query) or die(mysql_error());
				while($rows = mysql_fetch_array($res, MYSQL_BOTH))
				{
					echo '<img src="'.$rows['image_path'].'" alt="" style = "width : 80px; height : 55px; border-radius : 12px"/>';
				}
			}
		?>
	</div>
</div>

	<div id = "image">
		<ul class = "me_nu">
			<li class = "active"><a href="flights.php">Flights</a></li>
			<li><a href="hotels.php">Hotels</a></li>
			<li><a href="holiday.php">Holidays</a></li>
			<li><a href="bus.php">Bus</a></li>
			<li><a href="train.php">Trains</a></li>
			<li><a href="cabs.php">Cabs</a></li>
			<li><a href="#7">Reviews</a></li>
		</ul>  
		<h1 style = " text-align : center; color : black; text-decoration : underline; margin-top:75px; position:absolute; margin-left: 350px"><strong>FAQs</strong></h1><br>
		<br>
		<p style="text-align:left; font-size:20px; color:black; margin-top: 100px"><b>1) How do I cancel my flight booking?</b><br>
To cancel your tickets, simply follow the steps below:<br>
1. Log onto ghumo.com<br>
2. Click on the Manage Your Bookings link in the Customer Services tab<br>
3. Click on Cancel Bookings button under the Flights section<br>
4. You can choose to cancel your entire booking or cancel any specific passengers or sectors in your booking after you log in.<br>
5. Please review the cancellation penalty and refund amount before you confirm to cancel the booking.<br>
6. The refund amount would reflect in the same account that was used to make the payment at the time of the booking.
		</p>
		<p style="text-align:left; font-size:20px; color:black; margin-top: 5px"><b>2) How do I become a registered member of ghumo.com site?</b><br>
Becoming a registered member of ghumo.com is easy and free of cost. To register, click on Login and then select to signup. Enter the details that have been asked for and become an active member of the company after verifying your mail id.
		</p>
		<p style="text-align:left; font-size:20px; color:black; margin-top: 5px"><b>3) What are the benefits of becoming a registered member of ghumo.com site?</b><br>
As a registered member of ghumo.com, you will be entitled to savings and benefits on airfares, hotel reservations, holiday packages and car rentals, among other travel services. In addition, look forward to receiving monthly newsletters and exclusive promotions offering special deals.moreover, we provide loan facility to our registered members.
You can also directly connect with us by logging in with facebook or gmail.
		</p>
		
		<p style="text-align:left; font-size:20px; color:black; margin-top: 5px"><b>4) I have booked my tickets online. How can I get another copy of my E-Ticket?</b><br>
To view and take a printout of your E-Ticket, simply follow the steps below:<br>
1. Log onto ghumo.com<br>
2. Click on the "Print E-Tickets" button under the Customer Services tab.<br>
3. Enter the ghumo Booking ID corresponding to your booking and the Contact Number given at the time of making the Booking.<br>
4. Print the E-ticket shown.
	</p>

	</div>
		
		<div id="footer">
		<div id="footer_sec1">
			<h3>OUR PRODUCTS</h3>
			<a href="">Flight schedule</a><br>
			<a href="">Domestic Flights</a><br>
			<a href="">Hotels</a><br>
			<a href="">Holidays in India</a><br>
			<a href="">International holidays</a><br>
			<a href="">Bus Booking</a><br>
			<a href="">Railway</a><br>
			<a href="">Cab Booking</a><br>
			</div>
			<div id="footer_sec2">
			<h3>COMPANY</h3>
			<a href="">About Us</a><br>
			<a href="">Offers</a><br>
			<a href="">Gift Vouchers</a><br>
			<a href="">Travel Community</a><br>
			<a href="">Reviews</a><br>
			</div>
		<div id="footer_sec3">
			<h3>ABOUT THE SITE</h3>
			<a href="">FAQs</a><br>
			<a href="">Terms and Conditions</a><br>
			<a href="">Privacy Policy</a><br>
			<a href="">Contact Us</a><br>
			<a href="">User Agreement</a><br>
		</div>
		<div id="footer_sec4">
			<h3>MORE LINKS</h3>
			<a href="">Irctc</a><br>
			<a href="">Indian Railways</a><br>
			<a href="">PNR Status</a><br>
			<a href="">Seat Availability</a><br>
			<a href="">Oyo Rooms</a><br>
		</div>
		<div id="footer_sec5">
			<h3>FOLLOW US ON</h3>
			<img src="./img/fblogo.jpg" alt="fblogo" style="height:40px; width:40px">
			<img src="./img/insta.jpg" alt="instalogo" style="height:40px; width:40px">
			<img src="./img/twitter.jpg" alt="twitterlogo" style="height:40px; width:40px">
			<br><br>
			
		</div>
		
</div>

</body>
</html>