<?php require_once('fragment/authorise.inc.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php require_once('fragment/functions.inc.php'); ?>
<head>
    <?php require_once('fragment/head.inc.php'); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
body {
  font-family: Arial;
  font-size: 17px;
  padding: 0;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}


.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}



input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}
.navbar {
    
	text-align: center;
	
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>

<script>
    function jump(){
        window.location.href="finishpurchase.php";
    }
</script>

</head>
<body>
<?php require_once('fragment/nav.inc.php'); ?>
<div class="container">
    <h2 align="center">Checkout</h2>


    <div class="row">
        <div class="col-75">
            <div class="container">
                <form action="/action_page.php">

                    <div class="row">
                        <div class="col-50">
                            <h3>Guest information</h3>
                            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
                            <label for="email"><i class="fa fa-envelope"></i> Email</label>
                            <input type="text" id="email" name="email" placeholder="john@example.com">
                            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
                            <label for="city"><i class="fa fa-institution"></i> City</label>
                            <input type="text" id="city" name="city" placeholder="New York">

                            <div class="row">
                                <div class="col-50">
                                    <label for="state">State</label>
                                    <input type="text" id="state" name="state" placeholder="NY">
                                </div>
                                <div class="col-50">
                                    <label for="zip">Zip</label>
                                    <input type="text" id="zip" name="zip" placeholder="10001">
                                </div>
                            </div>
                        </div>

                        <div class="col-50">
                            <h3>Payment</h3>
                            <label for="fname">Accepted Cards</label>
                            <div class="icon-container">
                                <img src="img/visa.jpg" height="25" width="35" />
                                <img src="img/mastercard.png" height="25" width="35" />
                                <img src="img/amex.png" height="25" width="35" />
                            </div>
                            <label for="cname">Name on Card</label>
                            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                            <label for="ccnum">Credit card number</label>
                            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                            <label for="expmonth">Exp Month</label>
                            <input type="text" id="expmonth" name="expmonth" placeholder="September">
                            <div class="row">
                                <div class="col-50">
                                    <label for="expyear">Exp Year</label>
                                    <input type="text" id="expyear" name="expyear" placeholder="2018">
                                </div>
                                <div class="col-50">
                                    <label for="cvv">CVV</label>
                                    <input type="text" id="cvv" name="cvv" placeholder="352">
                                </div>
                            </div>
                        </div>

                    </div>


                </form>
            </div>
        </div>
        <div class="col-25">
            <div class="container">

                <div>
                    <img src="img/123.JPG" height="25" width="35" alt="" style="vertical-align:middle"><span>SHOPPING CART</span>
                </div>
                <br><br />
                

                <p>Football Manager 2020 <span class="price">$49.95</span></p>
                <img src="StorePackage/PCgame11.jpg" height="75" width="68" />

                <hr>
                <p>Total <span class="price" style="color:black"><b>$49.95</b></span></p>
                <input type="submit" value="Continue to checkout" class="btn" onclick=javascrtpt:jump()>
                <p>By placing the order, you confirm that you have read, understand and accept our terms & conditions and privacy policy.</p>
            </div>
        </div>
    </div>
    <?php require_once('fragment/footer.inc.php'); ?>
</div>


</body>
</html>