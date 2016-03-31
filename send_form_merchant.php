<?php
 
if(isset($_POST['email'])) {
 
    $email_to = "williamsje@rowan.edu";
    $email_subject = "RowanCard Website Merchant Application";
     
    $business_name = $_POST['business_name'];
    $business_address = $_POST['business_address'];
    $business_city = $_POST['business_city'];
    $business_state = $_POST['business_state'];
    $business_zip = $_POST['business_zip'];
    $website = $_POST['website'];
    $email = $_POST['email'];
    $business_phone = $_POST['business_phone'];
    $business_fax = $_POST['business_fax'];
    $years_in_business = $_POST['years_in_business'];
    $years_at_location = $_POST['years_at_location'];
    $alcohol = $_POST['alcohol'];

    if ($alcohol == "alcohol") {
      $alcohol = "Yes";
    } else {
      $alcohol = "No";
    }

    $name = $_POST['name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $phone = $_POST['phone'];
    $fax = $_POST['fax'];

    $federal_tax = $_POST['federal_tax'];
    $corporate = $_POST['corporate'];

    $person_name = $_POST['person_name'];
    $person_title = $_POST['person_title'];

    $category = $_POST['category'];
    $food = $_POST['food'];

    if ($food == "") {
      $food = "None";
    }
    
    $deliver = $_POST['deliver'];

    if ($deliver == "deliver") {
      $deliver = "Yes";
    } else {
      $deliver = "No";
    } 
 
    $email_message = "";
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
    $email_message = 
    "<h2>Online RowanCard Merchant Application</h2>
    <table>
    <h3>Business Information</h3>
    <tr>
    <td width='25%' style='text-align: right'><strong>Name of Business: </strong></td>
    <td width='75%'>".clean_string($business_name)."</td></tr>".
    "<tr>
    <td width='25%' style='text-align: right'><strong>Address: </strong></td>
    <td>".clean_string($business_address)."</td></tr>".
    "<tr>
    <td width='25%' style='text-align: right'><strong>City: </strong></td>
    <td>".clean_string($business_city)."</td></tr>".
    "<tr>
    <td width='25%' style='text-align: right'><strong>State: </strong></td>
    <td>".clean_string($business_state)."</td></tr>".
    "<tr>
    <td width='25%' style='text-align: right'><strong>Zip: </strong></td>
    <td>".clean_string($business_zip)."</td></tr>".
    "<tr>
    <td width='25%' style='text-align: right'><strong>Website: </strong></td>
    <td>".clean_string($website)."</td></tr>".
    "<tr>
    <td width='25%' style='text-align: right'><strong>Email Address: </strong></td>
    <td>".clean_string($email)."</td></tr>".
    "<tr>
    <td width='25%' style='text-align: right'><strong>Phone: </strong></td>
    <td>".clean_string($business_phone)."</td></tr>".
    "<tr>
    <td width='25%' style='text-align: right'><strong>Fax: </strong></td>
    <td>".clean_string($business_fax)."</td></tr>".
    "<tr>
    <td width='25%' style='text-align: right'><strong># of years in business: </strong></td>
    <td>".clean_string($years_in_business)."</td></tr>".
    "<tr>
    <td width='25%' style='text-align: right'><strong># of years at current location: </strong></td>
    <td>".clean_string($years_at_location)."</td></tr>".
    "<tr>
    <td width='25%' style='text-align: right'><strong>Alcohol Sales</strong></td>
    <td>".clean_string($alcohol)."</td></tr>".

    "<tr>
    <td colspan='2'>
    <h3>Corporate/Billing Information</h3></td></tr>
    <tr>
    <td width='25%' style='text-align: right'><strong>Name: </strong></td>
    <td>".clean_string($name)."</td></tr>".
    "<tr>
    <td width='25%' style='text-align: right'><strong>Address: </strong></td>
    <td>".clean_string($address)."</td></tr>".
    "<tr>
    <td width='25%' style='text-align: right'><strong>City: </strong></td>
    <td>".clean_string($city)."</td></tr>".
    "<tr>
    <td width='25%' style='text-align: right'><strong>State: </strong></td>
    <td>".clean_string($state)."</td></tr>".
    "<tr>
    <td width='25%' style='text-align: right'><strong>Zip: </strong></td>
    <td>".clean_string($zip)."</td></tr>".
    "<tr>
    <td width='25%' style='text-align: right'><strong>Phone: </strong></td>
    <td>".clean_string($phone)."</td></tr>".
    "<tr>
    <td width='25%' style='text-align: right'><strong>Fax: </strong></td>
    <td>".clean_string($fax)."</td></tr>".

    "<tr>
    <td colspan='2'>
    <h3>Tax Information</h3></td></tr>
    <tr>
    <td width='25%' style='text-align: right'><strong>Federal Tax ID #: </strong></td>
    <td>".clean_string($federal_tax)."</td></tr>".
    "<tr>
    <td width='25%' style='text-align: right'><strong>Corportate Entity: </strong></td>
    <td>".clean_string($corporate)."</td></tr>".

    "<tr>
    <td colspan='2'>
    <h3>Name and Title of Person Signing Agreement</h3></td></tr>
    <tr>
    <td width='25%' style='text-align: right'><strong>Name: </strong></td>
    <td>".clean_string($person_name)."</td></tr>".
    "<tr>
    <td width='25%' style='text-align: right'><strong>Title: </strong></td>
    <td>".clean_string($person_title)."</td></tr>".

    "<tr>
    <td colspan='2'>
    <h3>About the Business</h3></td></tr>
    <tr>
    <td width='25%' style='text-align: right'><strong>Category: </strong></td>
    <td>".clean_string($category)."</td></tr>".
    "<tr>
    <td width='25%' style='text-align: right'><strong>Food served? </strong></td>
    <td>".clean_string($food)."</td></tr>".
    "<tr>
    <td width='25%' style='text-align: right'><strong>Deliver?</strong></td>
    <td>".clean_string($deliver)."</td></tr></table>";   
 
// create email headers
$headers = 'From: '.$email_from."\r\n";
$headers .= "Content-type:text/html;charset=UTF-8"."\r\n";
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
<!-- include your own success html here -->
<html>
  <head>
    <title>IU Webmaster redirect</title>
    <META http-equiv="refresh" content="0;URL=/studentaffairs/rowancard/becomemerchant.php?sent=true">
  </head>
</html>
  
<?php
}
?>