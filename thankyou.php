<html>
</head>
<title>Thank You For Donating</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial scale=1,shrink-to-fit=no">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<h1 class"text-center">Thank You For Donating!</h1>
<?php
include "src/Instamojo.php";
$api = new Instamojo\Instamojo("test_de6a0b139d4f15f3b153c11296e", "test_d129654f2b7d67ea8caf0b97e03", 'https://test.instamojo.com/api/1.1/');
$payid=$_GET['payment_request_id'];
try {
    $response = $api->paymentRequestStatus($payid);
?>
	<table class="table table-bordered">
	<tr>
	<th>Payment Id:</th>
	<td><?=$response['payments'][0]['payment_id'];?></td>
	</tr>
	<tr>
	<th>Donator Name:</th>
	<td><?=$response['payments'][0]['buyer_name'];?></td>
	</tr>
	<tr>
	<th>Email:</th>
	<td><?=$response['payments'][0]['buyer_email'];?></td>
	</tr>
	</table>
	
<?php
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}

    


?>

</div>
</div>
</div>

</body>
</html>