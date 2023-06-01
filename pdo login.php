<html>
<head>
<title>login form</title>

	 <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-2"></div>
            <div class="col-8" style="background:lavender;">
            	<form method="post" action="pdo valid.php">
            		
            		<h1 align="center" style="color:blue"><storng>LOGIN PAGE</storng></h1>
            		<div class="form-group">
            			<label class="form-label"><b>EMAIL</b></label>
            			<input type="email" class="form-control" name="email" placeholder="Enter your email" required>
            		</div>
            		<div class="form-group">
            			<label class="form-label"><b>PASSWORD</b></label>
            			<input type="password" class="form-control" name="psd" placeholder="Enter your password" required>
            		</div>
            		<div class="form-group">
            			<input type="submit" class="btn btn-success" name="submit">
            			<input type="reset"  class="btn btn-danger" name="reset">
            		</div>
            		
            	</form>
            </div>	
            	<div class="col-2"></div>			
			</div>

			</div>
		</div>

</body>
</html>