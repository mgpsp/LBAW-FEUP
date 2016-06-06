<?php /* Smarty version Smarty-3.1.15, created on 2016-06-05 17:25:20
         compiled from "/opt/lbaw/lbaw1531/public_html/final/templates/users/sign.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21238660155736169690e2d4-25286837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0580810ad7d9823361e22cf664671ff4fd406d31' => 
    array (
      0 => '/opt/lbaw/lbaw1531/public_html/final/templates/users/sign.tpl',
      1 => 1465140323,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21238660155736169690e2d4-25286837',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_573616969e3a97_18250579',
  'variables' => 
  array (
    'ERROR_MESSAGES' => 0,
    'SUCESS_MESSAGES' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573616969e3a97_18250579')) {function content_573616969e3a97_18250579($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
    <?php if ($_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value) {?>
    <div class="alert alert-danger fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Error!</strong> <?php echo $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value;?>

    </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['SUCESS_MESSAGES']->value) {?>
    <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> <?php echo $_smarty_tpl->tpl_vars['SUCESS_MESSAGES']->value;?>

    </div>
    <?php }?>
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
                    <form role="form" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/login.php" method="post" class="login-form">
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
                    <form role="form" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/register.php" method="post" class="registration-form">
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
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/bootstrap/js/bootstrap.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/sign.js"></script>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
