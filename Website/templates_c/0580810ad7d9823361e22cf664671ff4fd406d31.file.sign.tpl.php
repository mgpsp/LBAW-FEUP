<?php /* Smarty version Smarty-3.1.15, created on 2016-05-26 00:45:47
         compiled from "/opt/lbaw/lbaw1531/public_html/final/templates/users/sign.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21238660155736169690e2d4-25286837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0580810ad7d9823361e22cf664671ff4fd406d31' => 
    array (
      0 => '/opt/lbaw/lbaw1531/public_html/final/templates/users/sign.tpl',
      1 => 1464214527,
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
    <?php if (isset($_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value)) {?>
    <div class="alert alert-danger fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Error!</strong> <?php echo $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value;?>

    </div>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['SUCESS_MESSAGES']->value)) {?>
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
                    		<label class="sr-only" for="form-username">Email</label>
                        	<input type="text" name="email" placeholder="Email" class="form-username form-control" id="form-email-login">
                        </div>
                        <div class="form-group">
                        	<label class="sr-only" for="form-password">Password</label>
                        	<input type="password" name="password" placeholder="Password" class="form-password form-control" id="form-password-login">
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
                    <form role="form" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/register.php" method="post" class="registration-form">
                    	<div class="form-group">
                    		<label class="sr-only" for="form-first-name">First name</label>
                        	<input type="text" name="firstName" placeholder="First name" class="form-first-name form-control" id="form-first-name">
                        </div>
                        <div class="form-group">
                        	<label class="sr-only" for="form-last-name">Last name</label>
                        	<input type="text" name="lastName" placeholder="Last name" class="form-last-name form-control" id="form-last-name">
                        </div>
                        <div class="form-group">
                        	<label class="sr-only" for="form-email">Email</label>
                        	<input type="text" name="emailReg" placeholder="Email" class="form-email form-control" id="form-email-registration">
                        </div>
                        <div class="form-group">
                        	<label class="sr-only" for="form-password">Password</label>
                        	<input title="Password should have at least 6 characters" type="password" name="passwordReg" placeholder="Password" class="form-password form-control" id="form-password-registration">
                        </div>
                        <div id="failed-login" style="display: none"><b>Password should have at least 6 characters.</b></div>
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
