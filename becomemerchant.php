<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="icon" href="images/csc_favicon.png" type="image/png" sizes="16x16">
<title>Office of RowanCard Services | Rowan University</title>
<link rel="stylesheet" href="css/foundation.css" />
<link rel="stylesheet" href="css/banner.css" />
<link rel="stylesheet" href="css/rowanheader.css" />
<link rel="stylesheet" href="css/contact.css" />
<link rel="stylesheet" href="css/becomemerchant.css">
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.js"></script>
<script type="text/javascript" src="js/js_jnv80YOwCwlPiNZ0W1fOaWsUliw1fl3r-iYl0nsElnY.js"></script>
<script type="text/javascript" src="js/js_jckA-4t9p22mBBR89owx6Ksvb40v5gsspPqsDK3Q0oM.js"></script>
<script type="text/javascript" src="js/js_-WcrGf3pH5GnSWA1Y-B28tyjknNjFr4asJklCZQ5NUA.js"></script>
<script type="text/javascript" src="js/js_6tUAv_hfkMxyYfPGNFOzEz92zxJy6vNy2_-n8RWvupM.js"></script>
<script type="text/javascript" src="js/js_IDBX5SzkJ9gGNq7x-qOE_2DZsexqguTJQGMKvi4w-Uw.js"></script>
<script type="text/javascript" src="js/js_q7cpEY7s0Al6EkhNnFajyKCyiVdTKqAcAvZS1arQ-D8.js"></script>
<script type="text/javascript" src="js/js_lpa3ttN1nRqoLlwqFJjkpfFvmjM6Z09FecPa_kywAeM.js"></script>
<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/modernizr.js"></script>
<script src="js/foundation.min.js"></script>
</head>
<body>
  <?php include("header.html"); ?>
  
  <section id="become_page">
    <div class="row">
      <div class="large-12 columns">
        <div class="panel">
          <h1 id="top-bar">Online Application</h1>
          <hr>

          <p>The RowanCard is a discretionary spending program developed as a convenience for students, faculty, and staff at
              Rowan University. Anyone with a RowanCard is able to purchase goods and services at participating merchants.
              Funds are deposited into the RowanCard Debit account and presented to participating merchants for the sale
              and funds are deducted from their account by using one of many devices.</p>

              <p>In order to participate in the program, the merchant must take the following steps:<br>
                <ul>
                  <li>Complete the Merchant Application and be approved for participation by the university. The sale of alcohol is
                    prohibited with the RowanCard and businesses whose primary purpose is the sale of alcohol or drug paraphernalia
                    will not be approved. Also, please note that the Merchant Agreement prohibits marking up products purchased with
                    the RowanCard. In addition, the purchase of prepaid cards of any kind is also prohibited with the RowanCard.</li>
                  <li>Agree to the terms set forth in the contract.</li>
                  <li>Purchase a VeriFone Vx570 (DSL connection) from Rowan University. The device costs approximately $375.00.</li>
                  <li>Have the RowanCard Office program the VeriFone reader to accept RowanCard transactions. Installation of necessary
                    DSL lines is the responsibility of the merchant.</li>
                </ul>
              </p>

              <p>In exchange for the services provided by the university (including operation of card program, account management, advertising,
                marketing, etc.) the merchant must agree to pay a service charge on RowanCard sales to the university. The university provides
                payment for the product or service purchased, minus the service charge, to merchants on a monthly basis.</p>

              <p>For more information, please call Christine Noon, RowanCard Program Administrator, at (856) 256-4531.</p>
              
          <div class="row">
            <div class="large-6 large-centered columns">
              <div data-alert class="alert-box success radius hidden <?php echo htmlspecialchars($_GET["sent"]); ?>">
                Thank you. Your submission has been received.
                <a href="#" class="close">&times;</a>
              </div>

              <h3>Business Information</h3>
              <form name="contactform" method="post" action="send_form_merchant.php">
                <label>Name of Business<input type="text" name="business_name" maxlength="50" placeholder="Rowan" required></label>
                <label>Business Address<input type="text" name="business_address" maxlength="50" placeholder="201 Mullica Hill Rd" required></label>
                <label>City<input type="text" name="business_city" maxlength="50" placeholder="Glassboro" required></label>
                <label>State<input type="text" name="business_state" maxlength="50" placeholder="New Jersey" required></label>
                <label>Zip<input type="text" name="business_zip" maxlength="50" placeholder="08028" required></label>
                <label>Website<input type="text" name="website" maxlength="50" placeholder="www.rowan.edu" required></label>
                <label>Email Address<input type="text" name="email" maxlength="80" placeholder="rowan@rowan.edu" required></label>
                <label>Business Phone<input type="text" name="business_phone" maxlength="30" placeholder="123-456-7890" required></label>
                <label>Business Fax<input type="text" name="business_fax" maxlength="30" placeholder="123-456-7890" required></label>
                <label># of years in business<input type="text" name="years_in_business" maxlength="30" placeholder="#" required></label>
                <label># of years at current location<input type="text" name="years_at_location" maxlength="30" placeholder="#" required></label>
                <label>Alcohol Sales<input type="checkbox" name="alcohol" value="alcohol"></label><br>

              <h3>Corporate/Billing Information</h3>
                <label>Name<input type="text" name="name" maxlength="50" placeholder="Rowan" required></label>
                <label>Address<input type="text" name="address" maxlength="50" placeholder="201 Mullica Hill Rd" required></label>
                <label>City<input type="text" name="city" maxlength="50" placeholder="Glassboro" required></label>
                <label>State<input type="text" name="state" maxlength="50" placeholder="New Jersey" required></label>
                <label>Zip<input type="text" name="zip" maxlength="50" placeholder="08028" required></label>
                <label>Phone<input type="text" name="phone" maxlength="50" placeholder="123-456-7890" required></label>
                <label>Fax<input type="text" name="fax" maxlength="50" placeholder="123-456-7890" required></label><br>

              <h3>Tax Information</h3>
                <label>Federal Tax ID #<input type="text" name="federal_tax" maxlength="50" placeholder="00-0000000" required></label>
                <label>Corporate Entity<input type="text" name="corporate" maxlength="50" placeholder="Rowan" required></label><br>

              <h3>Name and Title of Person Signing Agreement</h3>
                <label>Name<input type="text" name="person_name" maxlength="50" placeholder="John Doe" required></label>
                <label>Title<input type="text" name="person_title" maxlength="50" placeholder="CEO" required></label><br>

              <h3>About the Business</h3>
                <label>What category fits your business?
                <select name="category" required>
                  <option value="" disabled selected>Select your option</option>
                  <option value="Bookstore">Bookstore</option>
                  <option value="Campus Dining">Campus Dining</option>
                  <option value="Clothing">Clothing/Apparel</option>
                  <option value="Convenience">Convenience/Pharmacy</option>
                  <option value="Copiers">Copiers</option>
                  <option value="Health">Health/Beauty</option>
                  <option value="Laundry">Laundry</option>
                  <option value="Media">Media</option>
                  <option value="Other">Other</option>
                  <option value="Printing">Printing</option>
                  <option value="Restaurant">Restaurant</option>
                  <option value="Vending">Vending</option>
                </select>
                </label>
                <label>If you are a restaurant, what type of food do you serve?<input type="text" name="food" maxlength="50"
                placeholder="fast food, pizza, chinese, etc."></label>
                <label>Do you deliver?<input type="checkbox" name="deliver" value="deliver"></label>
                <input class="button" type="submit" value="Submit">
              </form>
            </div>
          </div>
        </div>
      </div>     
    </div>
</section>

<?php 
  include("rowancard_footer.html");
?>

</body>
</html>