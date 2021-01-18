<?php
 $name=$_POST['name'];
 $amount=$_POST['amount'];
 $email=$_POST['email'];
 $num=$_POST['pnum'];
 include "src/Instamojo.php";

 $api = new Instamojo\Instamojo("", "", '');	   
		   
try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => "Donation",
        "amount" => $amount,
        "send_email" => true,
        "email" => $email,
		"buyer_name"=>$name,
		"phone"=>$num,
		"send_sms"=>true,
		"allow_repeated_payments"=>false,
        "redirect_url" => "http://localhost/payement/thankyou.php"
        ));
    
	$pay_url=$response['longurl'];
    header("location:$pay_url");
   }
   catch (Exception $e) {
    print('Error: ' . $e->getMessage());
   }
		   
		   
?>
