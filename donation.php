<html>
<head>
<title>
Donation Form
</title>
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

<body class="bg-light">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-6 bg-info mt-5 rounded">
<h2 class="text-center  p-2">Donation Form</h2>
<form action="pay.php" method="post"class="p-2" id="form-box">
<div class="form-group">
<input type="text" name="name" class="form-control" placeholder="Enter name" required>
</div>
<div class="form-group">
<input type="email" name="email" class="form-control" placeholder="Enter email" required>
</div>
<div class="form-group">
<input type="tel" name="pnum" class="form-control" placeholder="Enter Phone Number" required>
</div>
<div class="form-group">
<input type="number" name="amount" class="form-control" placeholder="Enter Amount" required>
</div>
<div class="form-group">
<input type="submit" name="submit" class="btn btn-success btn-lg" value="Click To Pay" >
</div>
</form>
</div>
</div>
</div>
</body>

</html>