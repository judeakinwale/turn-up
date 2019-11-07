<?php
require './fb-init.php';
?>
<?php if(isset($_SESSION['access_token'])):?>
	<a href="fb-logout.php">Logout</a>
<?php else:?>
    <a href="<?php echo $loginUrl; ?>" role="button" id="fb-btn" class="btn btn-primary ml-3.5" name="sign">
        <span> <i class="fa fa-facebook-square mr-2" style="font-size:17px;"></i></span>Sign in with Facebook
    </a>
<?php endif;?>