<?php 
include('path.php');
$page = 'services';
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<?php $addApp->includes('open/links_top.php', 'Our Services'); ?>

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
				<h1>Services</h1>
				<span>We provide Amazing Solutions</span>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Pages</a></li>
					<li class="breadcrumb-item active" aria-current="page">Services</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="col_one_third nobottommargin">
						<div class="feature-box media-box">
							<div class="fbox-media">
								<img src="<?php echo BASE_URL . '/assets/open/'?>images/services/1.jpg" alt="Why choose Us?">
							</div>
							<div class="fbox-desc">
								<h3>Why choose Us.<span class="subtitle">Because we are Reliable.</span></h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum est voluptatem accusamus molestiae eaque perspiciatis mollitia.</p>
							</div>
						</div>
					</div>

					<div class="col_one_third nobottommargin">
						<div class="feature-box media-box">
							<div class="fbox-media">
								<img src="<?php echo BASE_URL . '/assets/open/'?>images/services/2.jpg" alt="Why choose Us?">
							</div>
							<div class="fbox-desc">
								<h3>Our Mission.<span class="subtitle">To Redefine your Brand.</span></h3>
								<p>Quos, non, esse eligendi ab accusantium voluptatem. Maxime eligendi beatae, atque tempora ullam. Vitae delectus quia, consequuntur rerum molestias quo.</p>
							</div>
						</div>
					</div>

					<div class="col_one_third nobottommargin col_last">
						<div class="feature-box media-box">
							<div class="fbox-media">
								<img src="<?php echo BASE_URL . '/assets/open/'?>images/services/3.jpg" alt="Why choose Us?">
							</div>
							<div class="fbox-desc">
								<h3>What we Do.<span class="subtitle">Make our Customers Happy.</span></h3>
								<p>Porro repellat vero sapiente amet vitae quibusdam necessitatibus consectetur, labore totam. Accusamus perspiciatis asperiores labore esse ab accusantium ea modi ut.</p>
							</div>
						</div>
					</div>

				</div>

				<div class="section">

					<div class="container clearfix">

						<div class="heading-block center">
							<h2>Easy Configurable Options.</h2>
							<span>Choose from a wide array of Options for your best matched Customizations</span>
						</div>

						<div class="col_full">

							<img data-animate="fadeIn" class="aligncenter" src="<?php echo BASE_URL . '/assets/open/'?>images/services/macbook.png" alt="Macbook">

						</div>

						<div class="col_one_third nobottommargin">

							<div class="feature-box fbox-plain">
								<div class="fbox-icon">
									<a href="#"><i class="i-alt">1.</i></a>
								</div>
								<h3>Choose a Product.</h3>
								<p>Perferendis, nam. Eum aperiam vel animi beatae corporis dignissimos, molestias, placeat, maxime optio ipsam nostrum atque quidem.</p>
							</div>

						</div>

						<div class="col_one_third nobottommargin">

							<div class="feature-box fbox-plain">
								<div class="fbox-icon">
									<a href="#"><i class="i-alt">2.</i></a>
								</div>
								<h3>Enter Shipping Info.</h3>
								<p>Saepe qui enim at animi. Repellendus, blanditiis doloremque asperiores reprehenderit deleniti. Ipsam nam accusantium ex!</p>
							</div>

						</div>

						<div class="col_one_third nobottommargin col_last">

							<div class="feature-box fbox-plain">
								<div class="fbox-icon">
									<a href="#"><i class="i-alt">3.</i></a>
								</div>
								<h3>Complete your Payment.</h3>
								<p>Necessitatibus accusamus, inventore atque commodi, animi architecto ea sed, suscipit tempora ex deleniti quae. Consectetur, sint velit.</p>
							</div>

						</div>

					</div>

				</div>

				<div class="container clearfix">

					<div class="col_two_fifth topmargin nobottommargin" style="min-height: 350px;">
						<canvas id="chart-doughnut"></canvas>
					</div>

					<div class="col_three_fifth nobottommargin col_last">

						<div class="heading-block">
							<h3>Powerful insights to help grow your business.</h3>
							<span>Reports let you easily track and analyze your product sales, orders, and payments.</span>
						</div>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero quod consequuntur quibusdam, enim expedita sed quia nesciunt incidunt accusamus necessitatibus modi adipisci officia libero accusantium esse hic, obcaecati, ullam, laboriosam!</p>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti vero, animi suscipit id facere officia. Aspernatur, quo, quos nisi dolorum aperiam fugiat deserunt velit rerum laudantium cum magnam excepturi quod, fuga architecto provident, cupiditate delectus voluptate eaque! Sit neque ut eum, voluptatibus odit cum dolorum ipsa voluptates inventore cumque a.</p>

						<a href="#">Learn more &rarr;</a>

					</div>

					<div class="clear"></div><div class="line"></div>

					<div class="col_three_fifth">

						<div class="heading-block">
							<h3>Advanced store statistics.</h3>
							<span>Benchmarking your website's performance helps you make great choices for your business.</span>
						</div>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero quod consequuntur quibusdam, enim expedita sed quia nesciunt incidunt accusamus necessitatibus modi adipisci officia libero accusantium esse hic, obcaecati, ullam, laboriosam!</p>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti vero, animi suscipit id facere officia. Aspernatur, quo, quos nisi dolorum aperiam fugiat deserunt velit rerum laudantium cum magnam excepturi quod, fuga architecto provident, cupiditate delectus voluptate eaque! Sit neque ut eum, voluptatibus odit cum dolorum ipsa voluptates inventore cumque a.</p>

						<a href="#">Learn more &rarr;</a>

					</div>

					<div class="col_two_fifth topmargin col_last" style="min-height: 350px">
						<canvas id="chart-radar"></canvas>
					</div>

				</div>

                <div class="container clearfix">

					<div class="heading-block center">
						<h2>Pricing.</h2>
						<span>We believe in Flexible Costing.</span>
					</div>

					<div class="row pricing bottommargin clearfix">

						<div class="col-lg-3">

							<div class="pricing-box">
								<div class="pricing-title">
									<h3>Starter</h3>
								</div>
								<div class="pricing-price">
									<span class="price-unit">&euro;</span>7<span class="price-tenure">/mo</span>
								</div>
								<div class="pricing-features">
									<ul>
										<li><strong>Full</strong> Access</li>
										<li><i class="icon-code"></i> Source Files</li>
										<li><strong>100</strong> User Accounts</li>
										<li><strong>1 Year</strong> License</li>
										<li>Phone &amp; Email Support</li>
									</ul>
								</div>
								<div class="pricing-action">
									<a href="#" class="btn btn-danger btn-block btn-lg">Sign Up</a>
								</div>
							</div>

						</div>

						<div class="col-lg-3">

							<div class="pricing-box best-price">
								<div class="pricing-title">
									<h3>Professional</h3>
									<span>Most Popular</span>
								</div>
								<div class="pricing-price">
									<span class="price-unit">&euro;</span>12<span class="price-tenure">/mo</span>
								</div>
								<div class="pricing-features">
									<ul>
										<li><strong>Full</strong> Access</li>
										<li><i class="icon-code"></i> Source Files</li>
										<li><strong>1000</strong> User Accounts</li>
										<li><strong>2 Years</strong> License</li>
										<li><i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i></li>
									</ul>
								</div>
								<div class="pricing-action">
									<a href="#" class="btn btn-danger btn-block btn-lg bgcolor border-color">Sign Up</a>
								</div>
							</div>

						</div>

						<div class="col-lg-3">

							<div class="pricing-box">
								<div class="pricing-title">
									<h3>Business</h3>
								</div>
								<div class="pricing-price">
									<span class="price-unit">&euro;</span>19<span class="price-tenure">/mo</span>
								</div>
								<div class="pricing-features">
									<ul>
										<li><strong>Full</strong> Access</li>
										<li><i class="icon-code"></i> Source Files</li>
										<li><strong>500</strong> User Accounts</li>
										<li><strong>3 Years</strong> License</li>
										<li>Phone &amp; Email Support</li>
									</ul>
								</div>
								<div class="pricing-action">
									<a href="#" class="btn btn-danger btn-block btn-lg">Sign Up</a>
								</div>
							</div>

						</div>

						<div class="col-lg-3">

							<div class="pricing-box">
								<div class="pricing-title">
									<h3>Enterprise</h3>
								</div>
								<div class="pricing-price">
									<span class="price-unit">&euro;</span>29<span class="price-tenure">/mo</span>
								</div>
								<div class="pricing-features">
									<ul>
										<li><strong>Full</strong> Access</li>
										<li><i class="icon-code"></i> Source Files</li>
										<li><strong>1000</strong> User Accounts</li>
										<li><strong>5 Years</strong> License</li>
										<li>Phone &amp; Email Support</li>
									</ul>
								</div>
								<div class="pricing-action">
									<a href="#" class="btn btn-danger btn-block btn-lg">Sign Up</a>
								</div>
							</div>

						</div>

					</div>

				</div>

				<a href="#" class="button button-full center tright topmargin footer-stick">
					<div class="container clearfix">
						Need help with your Account? <strong>Start here</strong> <i class="icon-caret-right" style="top:4px;"></i>
					</div>
				</a>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		
    <?php $addApp->includes('open/footer.php'); ?>

    </div><!-- #wrapper end -->

    <?php $addApp->includes('open/links_bottom.php'); ?>\
    <!-- Charts JS ============================================= -->
    <script src="<?php echo BASE_URL . '/assets/open/'?>js/chart.js"></script>
    <script src="<?php echo BASE_URL . '/assets/open/'?>js/chart-utils.js"></script>

	<script>

		var randomScalingFactor = function() {
			return Math.round(Math.random() * 100);
		};

		var config = {
			type: 'doughnut',
			data: {
				datasets: [{
					data: [
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
					],
					backgroundColor: [
						window.chartColors.red,
						window.chartColors.orange,
						window.chartColors.yellow,
						window.chartColors.green,
						window.chartColors.blue,
					],
					label: 'Dataset 1'
				}],
				labels: [
					"Red",
					"Orange",
					"Yellow",
					"Green",
					"Blue"
				]
			},
			options: {
				responsive: true,
				legend: {
					display: false,
					position: 'top',
				},
				title: {
					display: false,
					text: 'Doughnut Chart'
				},
				animation: {
					animateScale: true,
					animateRotate: true
				}
			}
		};


		// Radar Chart

		var color = Chart.helpers.color;
		var configRadar = {
			type: 'radar',
			data: {
				labels: [["Eating", "Dinner"], ["Drinking", "Water"], "Sleeping", ["Designing", "Graphics"], "Coding", "Cycling", "Running"],
				datasets: [{
					label: "My First dataset",
					backgroundColor: color(window.chartColors.red).alpha(0.2).rgbString(),
					borderColor: window.chartColors.red,
					pointBackgroundColor: window.chartColors.red,
					data: [
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor()
					]
				}, {
					label: "My Second dataset",
					backgroundColor: color(window.chartColors.blue).alpha(0.2).rgbString(),
					borderColor: window.chartColors.blue,
					pointBackgroundColor: window.chartColors.blue,
					data: [
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor()
					]
				},]
			},
			options: {
				legend: {
					display: false
				},
				title: {
					display: false
				},
				scale: {
				  ticks: {
					beginAtZero: true
				  }
				}
			}
		};

		window.onload = function() {
			var ctx = document.getElementById("chart-doughnut").getContext("2d");
			window.myDoughnut = new Chart(ctx, config);
			window.myRadar = new Chart(document.getElementById("chart-radar"), configRadar);
		};

	</script>

</body>
</html>