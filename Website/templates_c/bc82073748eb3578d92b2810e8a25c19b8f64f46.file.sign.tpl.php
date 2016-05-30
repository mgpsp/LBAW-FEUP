<?php /* Smarty version Smarty-3.1.15, created on 2016-04-24 00:11:22
         compiled from "/opt/lbaw/lbaw1531/public_html/proto/templates/users/sign.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8221342225716d60f28f070-30624473%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc82073748eb3578d92b2810e8a25c19b8f64f46' => 
    array (
      0 => '/opt/lbaw/lbaw1531/public_html/proto/templates/users/sign.tpl',
      1 => 1461449479,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8221342225716d60f28f070-30624473',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5716d60f32aa59_47802969',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'ERROR_MESSAGES' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5716d60f32aa59_47802969')) {function content_5716d60f32aa59_47802969($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
                        <?php if ($_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value=='Login failed') {?>
                        <div id="failed-login"><b>Username or password incorret.</b></div>
                        <?php }?>
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
                        	<input type="text" name="email" placeholder="Email" class="form-email form-control" id="form-email-registration">
                        </div>
                        <div class="form-group">
                        	<label class="sr-only" for="form-password">Password</label>
                        	<input type="password" name="password" placeholder="Password" class="form-password form-control" id="form-password-registration">
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value=='Duplicate email') {?>
                        <div id="failed-login"><b>E-mail already registered.</b></div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value=='Error creating user') {?>
                        <div id="failed-login"><b>Error creating user.</b></div>
                        <?php }?>
                        <button type="submit" class="btn sign-btn">Sign me up!</button>
                    </form>
                </div>
        	</div>
        	
        </div>
    </div>
</div>

<div class="push-to-bottom"></div>

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/bootstrap/js/bootstrap.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/sign.js"></script>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
