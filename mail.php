<?php
$firstName="";
$lastName="";
$email="";
$number="";
$address="";
$state="";
$accepted="";
$zip = "";
$city = "";
$home = "";
$floors = "";
$Sizes = "";
$bedrooms = "";
$Beds = "";
$TV = "";
$Dressers = "";
$Boxes = "";
$refrigerator = "";
$Stove = "";
$Dishwasher = "";
$Grill = "";
$Washer = "";
$Dryer  = "";
$AirConditioner = "";
$DeepFreezer = "";
$Microwave = "";
$Other = "";
$Armoire = "";
$Couch = "";
$Bookcases = "";
$Cabinets = "";
$Desks = "";
$Lamps = "";
$EndTables = "";
$DiningRoomset = "";
$KitchenTableandchairs = "";
$ArmChair = "";
$Rugs = "";
$Garageandorsheditems = "";
$Misc = "";
$fragile = "";


$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$zip=$_POST['zip'];
$email=$_POST['email'];
$number=$_POST['number'];
$address=$_POST['address'];
$state=$_POST['state'];
$accepted=$_POST['accepted'];
$city = $_POST['city'];
$home = $_POST['home'];
$floors = $_POST['floors'];
$bedrooms = $_POST['bedrooms'];
$Beds = $_POST['Beds'];
$Sizes = $_POST['Sizes'];
$TV = $_POST['TV'];
$Dressers = $_POST['Dressers'];
$Boxes = $_POST['Boxes'];
$refrigerator = $_POST['refrigerator'];
$Stove = $_POST['Stove'];
$Dishwasher = $_POST['Dishwasher'];
$Grill = $_POST['Grill'];
$Washer = $_POST['Washer'];
$Dryer = $_POST['Washer'];
$AirConditioner = $_POST['AirConditioner'];
$DeepFreezer = $_POST['DeepFreezer'];
$Microwave = $_POST['Microwave'];
$Other = $_POST['Other'];
$Armoire = $_POST['Armoire'];
$Couch = $_POST['Couch'];
$Bookcases = $_POST['Bookcases'];
$Cabinets = $_POST['Cabinets'];
$Desks = $_POST['Desks'];
$Lamps = $_POST['Lamps'];
$EndTables = $_POST['EndTables'];
$DiningRoomset = $_POST['DiningRoomset'];
$$KitchenTableandchairs = $_POST['$KitchenTableandchairs'];
$ArmChair = $_POST['ArmChair'];
$Rugs = $_POST['Rugs'];
$Garageandorsheditems = $_POST['Garageandorsheditems'];
$Misc = $_POST['Misc'];
$fragile = $_POST['fragile'];

        $to_email = $_POST['email'];
        $subject = "New Quote Summary";
        $message = "
        <table style='width: 80%; border:1px solid lightblue; margin:10rem; padding-left:10px'>
  <tr style='border: 1px solid gray; padding:5px; font-size:20px; font-weight:bold'>
    <th style='margin-left:10rem; text-align:center'>Basic Details</th>
    <th style='float: right; margin-right:8rem;'>Content</th>
  </tr>
  <tr >
    <td style='text-align:center'>term and condition</td>
    <td style='float:right; margin-right:7rem'>Accepted</td>
  </tr>
  <tr>
    <td style='text-align:center'>First name</td>
    <td style='float:right; margin-right:7rem; text-align:center;'>$firstName</td>
  </tr>
  <tr>
    <td style='text-align:center'>last name</td>
    <td style='float:right; margin-right:7rem; text-align:center;'>$lastName</td>
  </tr>
  <tr>
    <td style='text-align:center'>Email</td>
    <td style='float:right; margin-right:7rem; text-align:center;'>$email</td>
  </tr>
  <tr>
    <td style='text-align:center'>Number</td>
    <td style='float:right; margin-right:7rem; text-align:center;'>$number</td>
  </tr>
  
  <tr style='border: 1px solid gray; padding:5px; font-size:20px; font-weight:bold'>
    <th style='margin-left:10rem; text-align:center'>Address</th>
    <th style='float: right; margin-right:8rem;'>Content</th>
  </tr>
  <tr >
    <td style='text-align:center'>Address</td>
    <td style='float:right; margin-right:7rem'>$address</td>
  </tr>
  <tr>
    <td style='text-align:center'>Zip code</td>
    <td style='float:right; margin-right:7rem; text-align:center;'>$zip</td>
  </tr>
  <tr>
    <td style='text-align:center'>State</td>
    <td style='float:right; margin-right:7rem; text-align:center;'>$state</td>
  </tr>
  <tr>
    <td style='text-align:center'>City</td>
    <td style='float:right; margin-right:7rem; text-align:center;'>$city</td>
  </tr>

  <tr style='border: 1px solid gray; padding:5px; font-size:20px; font-weight:bold'>
    <th style='margin-left:10rem; text-align:center'>Type of move</th>
    <th style='float: right; margin-right:8rem;'>Content</th>
  </tr>
  <tr >
    <td style='text-align:center'>home</td>
    <td style='float:right; margin-right:7rem'>$home</td>
  </tr>
  <tr>
    <td style='text-align:center'>floors</td>
    <td style='float:right; margin-right:7rem; text-align:center;'>$floors</td>
  </tr>
  <tr>
    <td style='text-align:center'>Sizes</td>
    <td style='float:right; margin-right:7rem; text-align:center;'>$Sizes</td>
  </tr>
  <tr>
    <td style='text-align:center'>bedrooms</td>
    <td style='float:right; margin-right:7rem; text-align:center;'>$bedrooms</td>
  </tr>
  <tr style='border: 1px solid gray; padding:5px; font-size:20px; font-weight:bold'>
    <th style='margin-left:10rem; text-align:center'>what are we moving</th>
    <th style='float: right; margin-right:8rem;'>Content</th>
  </tr>
  <tr>
    <td style='text-align:center'>Beds</td>
    <td style='float:right; margin-right:7rem; text-align:center;'>$Beds</td>
  </tr>
  <tr>
    <td style='text-align:center'>TV</td>
    <td style='float:right; margin-right:7rem; text-align:center;'>$TV</td>
  </tr>
  <tr>
    <td style='text-align:center'>Beds</td>
    <td style='float:right; margin-right:7rem; text-align:center;'>$Beds</td>
  </tr>
  <tr>
    <td style='text-align:center'>Boxes</td>
    <td style='float:right; margin-right:7rem; text-align:center;'>$Boxes</td>
  </tr>
  <tr>
    <td style='text-align:center'>refrigerator</td>
    <td style='float:right; margin-right:7rem; text-align:center;'>$refrigerator</td>
  </tr>
  <tr>
    <td style='text-align:center'>Stove</td>
    <td style='float:right; margin-right:7rem; text-align:center;'>$Stove</td>
  </tr>
  <tr>
    <td style='text-align:center'>Dish washer</td>
    <td style='float:right; margin-right:7rem; text-align:center;'>$Dishwasher</td>
  </tr>
  <tr>
    <td style='text-align:center'>Grill</td>
    <td style='float:right; margin-right:7rem; text-align:center;'>$Grill</td>
  </tr>
  <tr>
    <td style='text-align:center'>Dryer</td>
    <td style='float:right; margin-right:7rem; text-align:center;'>$Dryer</td>
  </tr>
  <tr>
    <td style='text-align:center'>Washer</td>
    <td style='float:right; margin-right:7rem; text-align:center;'>$Washer</td>
  </tr>
  <tr>
    <td style='text-align:center'>Air Conditioner</td>
    <td style='float:right; margin-right:7rem; text-align:center;'>$AirConditioner</td>
  </tr>
  <tr>
    <td style='text-align:center'>Deep Freezer</td>
    <td style='float:right; margin-right:7rem; text-align:center;'>$DeepFreezer</td>
  </tr>
  <tr>
    <td style='text-align:center'>Microwave</td>
    <td style='float:right; margin-right:7rem; text-align:center;'>$Microwave</td>
  </tr>
  <tr>
    <td style='text-align:center'>Other</td>
    <td style='float:right; margin-right:7rem; text-align:center;'>$Other</td>
  </tr>
  <tr style='border: 1px solid gray; padding:5px; font-size:20px; font-weight:bold'>
  <th style='margin-left:10rem; text-align:center'>What furniture is moving</th>
  <th style='float: right; margin-right:8rem;'>Content</th>
</tr>
<tr >
  <td style='text-align:center'>Armoire</td>
  <td style='float:right; margin-right:7rem'>$Armoire</td>
</tr>
<tr>
  <td style='text-align:center'>Couch</td>
  <td style='float:right; margin-right:7rem; text-align:center;'>$Couch</td>
</tr>
<tr>
  <td style='text-align:center'>Bookcases</td>
  <td style='float:right; margin-right:7rem; text-align:center;'>$Bookcases</td>
</tr>
<tr>
  <td style='text-align:center'>Cabinets</td>
  <td style='float:right; margin-right:7rem; text-align:center;'>$Cabinets</td>
</tr>
<tr>
  <td style='text-align:center'>Desks</td>
  <td style='float:right; margin-right:7rem; text-align:center;'>$Desks</td>
</tr>
<tr>
  <td style='text-align:center'>EndTables</td>
  <td style='float:right; margin-right:7rem; text-align:center;'>$EndTables</td>
</tr>
<tr>
  <td style='text-align:center'>Dining Rooms et</td>
  <td style='float:right; margin-right:7rem; text-align:center;'>$DiningRoomset</td>
</tr>
<tr>
  <td style='text-align:center'>Kitchen Table and chairs</td>
  <td style='float:right; margin-right:7rem; text-align:center;'>$KitchenTableandchairs</td>
</tr>
<tr>
  <td style='text-align:center'>ArmChair</td>
  <td style='float:right; margin-right:7rem; text-align:center;'>$ArmChair</td>
</tr>
<tr>
  <td style='text-align:center'>Rugs</td>
  <td style='float:right; margin-right:7rem; text-align:center;'>$Rugs</td>
</tr>
<tr style='border: 1px solid gray; padding:5px; font-size:20px; font-weight:bold'>
    <th style='margin-left:10rem; text-align:center'>>Additional and Miscellaneous Items</th>
    <th style='float: right; margin-right:8rem;'>Content</th>
  </tr>
  <tr >
    <td style='text-align:center'>Garage and or shed items</td>
    <td style='float:right; margin-right:7rem'>$Garageandorsheditems</td>
  </tr>
  <tr>
    <td style='text-align:center'>Misc</td>
    <td style='float:right; margin-right:7rem; text-align:center;'>$Misc</td>
  </tr>
  <tr>
    <td style='text-align:center'>fragile</td>
    <td style='float:right; margin-right:7rem; text-align:center;'>$fragile</td>
  </tr>
</table>
        
        ";
        $headers = 'From: noreply@company.com';
        mail($to_email,$subject,$message,$headers);
    $mail =  mail($to_email,$subject,$message,$headers);
    if( $mail == true ) {
        $result = 'Form sent successfully';
         echo json_encode($results);
     } else{
      $result = "form error";
      echo json_encode($results);
 }
    

  



?>