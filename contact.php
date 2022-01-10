<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>ONLINE BUS RESERVATION</title>
<link rel="stylesheet" type="text/css" href="xres/css/style.css" />
<link rel="icon" type="image/png" href="xres/images/favicon.png" />
<link type="text/css" href="css/styles.css" rel="stylesheet" media="all" />
</head>

<body>
<div id="wrapper">
	<div id="header">
    <h5><a href="index.php"><img src="xres/images/logos.png" class="logo" alt="ONLINE BUS RESERVATION" /></a></h5>
        <ul id="mainnav">
			<li><a href="index.php">Home</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="history.php">History</a></li>
            <li><a href="routes.php">Routes</a></li>
            <li><a href="location.php">location</a></li>
            <li class="current"><a href="contact.php">Contact Us</a></li>
    	</ul>
	</div>
    <div id="content">
    	<div id="gallerycontainer">
			<div class="portfolio-area" style="margin:0 auto; padding:140px 20px 20px 20px; width:820px;">	
				<div id="contactleft">
					GATEWAY BUS SERVICES LTD<br>
(MAIN OFFICE)<br>
Plot 19 Wilson Road, Travin House, Kampala – Uganda<br>
Phone:  +256(0)392234567<br><br>

GATEWAY BUS<br>
(MBARARA TERMINAL)<br>
Highway Street, Mbarara Town<br>
Telephone No: (+256) 781-589114<br><br>


Gateway Bus Services Ltd in Kabale Town,<br>
Location: Plot 23/24, Kabale-Mbarara Road, Kabale Municipality<br>
Contact Numbers:<br>
+256 701-990011<br>
+256 772-073329<br>
				</div><br>
				<div id="contactright">
					<h3>Message Form</h3>
					<form class="validate" action="messageexec.php" method="POST">
                        <p>
                            <label for="name" class="required label">Name:</label><br>
                            <input id="name" class="contactform" type="text" name="name" />
                        </p>
                        <p>
                            <label for="email" class="required label">Email:</label><br>
                            <input id="email" class="contactform" placeholder="Example: gateway@gmail.com" type="text" name="email" />
                        </p>
                        <p>
                            <label for="subject" class="required label">Subject:</label><br>
                            <input id="subject" class="contactform" type="text" name="subject" />
                        </p>
                        <p>
                            <label id="message-label" for="message" class="required label">Message:</label><br>
                            <textarea id="message" class="contactform" name="message" cols="28" rows="5"></textarea>
                        </p>
                        <p>
                            <label></label>
                            <input class="contactform" id="submit-button" type="submit" name="Submit" value="Submit" style="height: 35px;" />
                        </p>
                    </form>
				</div>
               	<div class="column-clear"></div>
            </div>
			<div class="clearfix"></div>
        </div>
    </div>
    



<div id="footer">
    <div id="footer"><br />
    <h4>+256(0)392234567 &bull; <a href="contact-us.php">Plot 19 Wilson Road, Travin House, Kampala – Uganda  </a></h4>
    <p>Hours of Operation&nbsp;&nbsp;&bull;&nbsp;&nbsp;Mon - Sun: 06:00 am - 12:00 am</p>
    <a href="index.php"><img src="xres/images/footer-logos.jpg" alt="ONLINE BUS RESERVATION" /></a>
    <p>&copy; Copyright 2020 Gateway Bus Services Limited |<br /></p>
</div>

</div>
</body>
</html>
