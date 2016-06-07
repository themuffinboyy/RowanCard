<?php
 
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "noon@rowan.edu";
    $email_from = "RowanCard";
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
    $email_message .= "Business Information \n";
    $email_message .= "Name of Business: ".clean_string($business_name)."\n";
    $email_message .= "Address: ".clean_string($business_address)."\n";
    $email_message .= "City: ".clean_string($business_city)."\n";
    $email_message .= "State: ".clean_string($business_state)."\n";
    $email_message .= "Zip: ".clean_string($business_zip)."\n";
    $email_message .= "Website: ".clean_string($website)."\n";
    $email_message .= "Email Address: ".clean_string($email)."\n";
    $email_message .= "Phone: ".clean_string($business_phone)."\n";
    $email_message .= "Fax: ".clean_string($business_fax)."\n";
    $email_message .= "# of years in business: ".clean_string($years_in_business)."\n";
    $email_message .= "# of years at current location: ".clean_string($years_at_location)."\n";
    $email_message .= "Alcohol Sales: ".clean_string($alcohol)."\n\n";
    $email_message .= "Corporate/Billing Information \n";
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Address: ".clean_string($address)."\n";
    $email_message .= "City: ".clean_string($city)."\n";
    $email_message .= "State: ".clean_string($state)."\n";
    $email_message .= "Zip: ".clean_string($zip)."\n";
    $email_message .= "Phone: ".clean_string($phone)."\n";
    $email_message .= "Fax: ".clean_string($fax)."\n\n";
    $email_message .= "Tax Information \n";
    $email_message .= "Federal Tax ID #: ".clean_string($federal_tax)."\n";
    $email_message .= "Corporate Entity: ".clean_string($corporate)."\n\n";
    $email_message .= "Name and Title of Person Signing Agreement \n";
    $email_message .= "Name: ".clean_string($person_name)."\n";
    $email_message .= "Title: ".clean_string($person_title)."\n\n";
    $email_message .= "About the Business \n";
    $email_message .= "Category: ".clean_string($category)."\n";
    $email_message .= "Food served? ".clean_string($food)."\n";
    $email_message .= "Deliver? ".clean_string($deliver)."\n";    
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
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