<?php
?>
<html lang="en">
<head>
    <title>Registration</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact-form.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">

    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>

    <!--[if lt IE 9]>
    <html class="lt-ie9">
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a> 
    </div>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
 
    <script src='js/device.min.js'></script> 
</head>

<body>
<div class="page">
    <!--========================================================
                              HEADER
    =========================================================-->
    <header>

        <div id="stuck_container" class="stuck_container">
            <div class="container">

                <div class="brand">
                    <h1 class="brand_name">
                        <a href="index.html">EventHive</a>
                    </h1>
                </div>

                <nav class="nav">
                    <ul class="sf-menu">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="events.html">Events</a>
                        </li>
                        <li>
                            <a href="review.html">Reviews</a>
                        </li>
                        <li class="active">
                            <a href="registration.php">Register</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

    </header>

    <main>
        <section class="well well__offset-3">
            <div class="container">
                <h2>Register</h2>

        
                        
<?php
$action= isset($_REQUEST['action']) ? $_REQUEST['action'] : '';
if ($action=="")    /* display the contact form */
    {
    ?>
    <fieldset>
        <form  class="hm"  method="POST" action="dbconn.php"enctype="multipart/form-data">
        <h3>Are you an event organizer and would like to advertise your event with us? Fill the form below and we will get back to you</h3><br>
        <input type="hidden" name="action" value="submit">
        
        <label class="name">
        Name:<br><br>
        <input name="name" type="text" value="" size="60" /><br><br>       
        </label>
       
        <label class="email">
        Email:<br><br>
        <input name="email" type="text" value="" size="60"/><br><br>
        </label>

        <label class="name">
        Phone number:<br><br>
        <input name="phone_number" type="text" value="" size="60"/><br><br>
        </label>

        
        <input type="submit" value="Register"/>
        

        </form>
    </fieldset>
    <?php
    } 
else                /* send the submitted data */
    {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $phone_number=$_REQUEST['phone_number'];
    if (($name=="")||($email=="")||($phone_number==""))
        {
        echo "All fields are required, please fill <a href=\"\">the form</a> again.";
        }
    else{       
        $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="phone_number sent using your contact form";
        // mail("youremail@yoursite.com", $subject, $phone_number, $from);
        echo "Successfully registered";
        }
    }  
?>


            </div>
        </section>

    </main>
        <footer>
        <div class="container">
            <ul class="socials">
                <li><a href="#" class="fa fa-facebook"></a></li>
                <li><a href="#" class="fa fa-tumblr"></a></li>
                <li><a href="#" class="fa fa-google-plus"></a></li>
            </ul>
            <div class="copyright">© <span id="copyright-year"></span> |
                <a href="#">Privacy Policy</a>
            </div>
        </div>
        <div class="tm"><a href="#"><img src="images/TM_logo.png" alt=""></a></div>
    </footer>
</div>

<script src="js/script.js"></script>
</body>
</html> 
?>
						