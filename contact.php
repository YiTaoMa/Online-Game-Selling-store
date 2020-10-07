<?php require_once('fragment/authorise.inc.php'); ?>
<?php require_once('fragment/functions.inc.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="style/contact.css">
        <script type="text/javascript" src="js/contact.js"></script>
        <?php require_once('fragment/head.inc.php'); ?>
    </head>
    <body>

    <?php require_once('fragment/nav.inc.php'); ?>

		<div class="container">

            <div class="jumbotron">

            <h1 style="font-family: Courier New; font-size: 30px;">If you have any questions, you can contact us through the form, call us or come to the store for consultation.</h1>
            <br>    
            <div class="contactus">
                <form id="contact_form" onsubmit="return checkForm()" method="post" action="mailto:admin@hdgames.com.au">
                    <div><span class="label">First Name:</span><input name="firstname" type="text" value="" id="firstname"/></div>
                    <div class="error" id="firstnameError">Required: Please enter your first name</div>
                        
                    <div><span class="label">Last Name:</span><input name="lastname" type="text" value="" id="lastname"/></div>
                    <div class="error" id="lastnameError">Required: Please enter your last name</div>
                        
                    <div><span class="label">Age:</span><input name="age" type="text" value="" id="age"/></div>
                    <div class="error" id="ageError">Required: Please enter your age - must be 16 years and above</div>
                        
                    <div><span class="label">Home Address:</span><input name="address" type="text" value="" id="address"/></div>
                    <div class="error" id="addressError">Required: Please enter your home address</div>
                        
                    <div><span class="label">Phone Number:</span><input name="phone" type="text" value="" id="phone"/></div>
                    <div class="error" id="phoneError">Required: Please enter a valid phone number</div>
                        
                    <div><span class="label">Email:</span><input name="email" type="text" value="" id="email"/></div>
                    <div class="error" id="emailError"> Required: Please enter a valid email</div>
                        
                    <div><span class="label">Comments:</span>
                        <textarea name="message" rows="10" cols="30">
                        </textarea>
                    </div>
                        <br>
                    <div><input id="contact_submit" type="submit" value="Submit"/></div>
                
                    </form>
                </div>
            </div>

            <div class="address">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <p>Instagram: <a href="https://www.instagram.com/rmituniversity/" class="fa fa-instagram"></a></p>
            <p>Phone: +61 3 9925 2000</p>
            <p>Email: admin@hdgames.com.au</p>
            </div>
            <?php require_once('fragment/footer.inc.php'); ?>
            
        </div>
           
	</body>
</html>