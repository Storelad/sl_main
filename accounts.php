<?php 
include('path.php');
$page = 'accounts';
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<?php $addApp->includes('open/links_top.php', 'Login/Sign Up'); ?>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<?php $addApp->includes('open/header.php', '', $page); ?>
        <!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>My Account</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Pages</a></li>
					<li class="breadcrumb-item active" aria-current="page">Login</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="col_one_third nobottommargin">

						<div class="well well-lg nobottommargin">
							<form id="login-form" name="login-form" class="nobottommargin" action="#" method="post">

								<h3>Login to your Account</h3>

								<div class="col_full">
									<label for="login-form-username">Username:</label>
									<input type="text" id="login-form-username" name="login-form-username" value="" class="form-control" />
								</div>

								<div class="col_full">
									<label for="login-form-password">Password:</label>
									<input type="password" id="login-form-password" name="login-form-password" value="" class="form-control" />
								</div>

								<div class="col_full nobottommargin">
									<button class="button button-3d nomargin" id="login-form-submit" name="login-form-submit" value="login">Login</button>
									<a href="#" class="fright">Forgot Password?</a>
								</div>

							</form>
						</div>

					</div>

					<div class="col_two_third col_last nobottommargin">


						<h3>Don't have an Account? Register Now.</h3>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, vel odio non dicta provident sint ex autem mollitia dolorem illum repellat ipsum aliquid illo similique sapiente fugiat minus ratione.</p>

						<form id="register-form" name="register-form" class="nobottommargin" action="#" method="post">

							<div class="col_half">
								<label for="register-form-name">Name:</label>
								<input type="text" id="register-form-name" name="register-form-name" value="" class="form-control" />
							</div>

							<div class="col_half col_last">
								<label for="register-form-email">Email Address:</label>
								<input type="text" id="register-form-email" name="register-form-email" value="" class="form-control" />
							</div>

							<div class="clear"></div>

							<div class="col_half">
								<label for="register-form-username">Choose a Username:</label>
								<input type="text" id="register-form-username" name="register-form-username" value="" class="form-control" />
							</div>

							<div class="col_half col_last">
								<label for="register-form-phone">Phone:</label>
								<input type="text" id="register-form-phone" name="register-form-phone" value="" class="form-control" />
							</div>

							<div class="clear"></div>

							<div class="col_half">
								<label for="register-form-password">Choose Password:</label>
								<input type="password" id="register-form-password" name="register-form-password" value="" class="form-control" />
							</div>

							<div class="col_half col_last">
								<label for="register-form-repassword">Re-enter Password:</label>
								<input type="password" id="register-form-repassword" name="register-form-repassword" value="" class="form-control" />
							</div>

							<div class="clear"></div>

							<div class="col_full nobottommargin">
								<button class="button button-3d button-black nomargin" id="register-form-submit" name="register-form-submit" value="register">Register Now</button>
							</div>

						</form>

					</div>

				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
        <?php $addApp->includes('open/footer.php'); ?>

</div><!-- #wrapper end -->

<?php $addApp->includes('open/links_bottom.php'); ?>

</body>
</html>