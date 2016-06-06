{include file='common/header.tpl'}

<div class="container">
    {if $ERROR_MESSAGES}
    <div class="alert alert-danger fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Error!</strong> {$ERROR_MESSAGES}
    </div>
    {/if}
    {if $SUCESS_MESSAGES}
    <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> {$SUCESS_MESSAGES}
    </div>
    {/if}
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
                    <form role="form" action="{$BASE_URL}actions/users/login.php" method="post" class="login-form">
                    	<div class="form-group">
                    		<label class="sr-only" for="form-email-login">Email</label>
                        	<input type="text" name="email" placeholder="Email" class="form-username form-control" id="form-email-login" required>
                        </div>
                        <div class="form-group">
                        	<label class="sr-only" for="form-password-login">Password</label>
                        	<input type="password" name="password" placeholder="Password" class="form-password form-control" id="form-password-login" required>
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
                        <span style="color: red">*Required field</span>
            		</div>
            		<div class="form-top-right">
            			<i class="glyphicon glyphicon-pencil"></i>
            		</div>
                </div>
                <div class="form-bottom">
                    <form role="form" action="{$BASE_URL}actions/users/register.php" method="post" class="registration-form">
                    	<div class="form-group">
                    		<label class="sr-only" for="form-first-name">First name*</label>
                        	<input type="text" name="firstName" placeholder="First name*" class="form-first-name form-control" id="form-first-name" required>
                        </div>
                        <div class="form-group">
                        	<label class="sr-only" for="form-last-name">Last name*</label>
                        	<input type="text" name="lastName" placeholder="Last name*" class="form-last-name form-control" id="form-last-name" required>
                        </div>
                        <div class="form-group">
                        	<label class="sr-only" for="form-email-registration">Email*</label>
                        	<input type="text" name="emailReg" placeholder="Email*" class="form-email form-control" id="form-email-registration" data-toggle="tooltip" data-placement="top" required>
                        </div>
                        <div class="form-group">
                        	<label class="sr-only" for="form-password-registration">Password*</label>
                        	<input type="password" name="passwordReg" placeholder="Password*" class="form-password form-control" id="form-password-registration" data-toggle="tooltip" data-placement="top" required>
                        </div>
                        <button type="submit" class="btn sign-btn">Sign me up!</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="{$BASE_URL}lib/bootstrap/js/bootstrap.js"></script>
<script src="{$BASE_URL}javascript/sign.js"></script>

{include file='common/footer.tpl'}