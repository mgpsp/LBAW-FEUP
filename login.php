<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="icon" href="favicon.png" type="image/png" />
		<title>moviebox</title>

		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="styles.css" rel="stylesheet">
	</head>
	<body>
		
		<?php include('navbar.php') ?>

		<div class="container">
			<div class="row">
                <div class="col-sm-5">
                	
                	<div class="form-box">
                    	<div class="form-top">
                    		<div class="form-top-left">
                    			<h3>Login to our site</h3>
                        		<p>Enter username and password to log on:</p>
                    		</div>
                    		<div class="form-top-right">
                    			<i class="glyphicon glyphicon-lock"></i>
                    		</div>
                        </div>
                        <div class="form-bottom">
		                    <form role="form" action="" method="post" class="login-form">
		                    	<div class="form-group">
		                    		<label class="sr-only" for="form-username">Username</label>
		                        	<input type="text" name="form-username" placeholder="Email" class="form-username form-control" id="form-username">
		                        </div>
		                        <div class="form-group">
		                        	<label class="sr-only" for="form-password">Password</label>
		                        	<input type="password" name="form-password" placeholder="Password" class="form-password form-control" id="form-password">
		                        </div>
		                        <button type="submit" class="btn sign-btn">Sign in!</button>
		                    </form>
	                    </div>
                    </div>
                    
                </div>
                
                <div class="col-sm-1 middle-border"></div>
                <div class="col-sm-1"></div>
                	
                <div class="col-sm-5">
                	
                	<div class="form-box">
                		<div class="form-top">
                    		<div class="form-top-left">
                    			<h3>Sign up now</h3>
                        		<p>Fill in the form below to get instant access:</p>
                    		</div>
                    		<div class="form-top-right">
                    			<i class="glyphicon glyphicon-pencil"></i>
                    		</div>
                        </div>
                        <div class="form-bottom">
		                    <form role="form" action="" method="post" class="registration-form">
		                    	<div class="form-group">
		                    		<label class="sr-only" for="form-first-name">First name</label>
		                        	<input type="text" name="form-first-name" placeholder="First name" class="form-first-name form-control" id="form-first-name">
		                        </div>
		                        <div class="form-group">
		                        	<label class="sr-only" for="form-last-name">Last name</label>
		                        	<input type="text" name="form-last-name" placeholder="Last name" class="form-last-name form-control" id="form-last-name">
		                        </div>
		                        <div class="form-group">
		                        	<label class="sr-only" for="form-email">Email</label>
		                        	<input type="text" name="form-email" placeholder="Email" class="form-email form-control" id="form-email">
		                        </div>
		                        <div class="form-group">
		                        	<label class="sr-only" for="form-about-yourself">About yourself</label>
		                        	<textarea name="form-about-yourself" placeholder="About yourself..." 
		                        				class="form-about-yourself form-control" id="form-about-yourself"></textarea>
		                        </div>
		                        <button type="submit" class="btn sign-btn">Sign me up!</button>
		                    </form>
	                    </div>
                	</div>
                	
                </div>
            </div>
		</div>

		<div class="push-to-bottom"></div>

		<?php include('footer.php') ?>
		<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
		<script src="bootstrap/js/bootstrap.js"></script>
	</body>
</html>