<!DOCTYPE html>
<html lang="en-US" class="no-js scheme_default">

<?php include 'includes/head.php'; ?>

<body class="page page-id-574 page-template-default woocommerce-account woocommerce-page body_tag body_style_wide scheme_default blog_mode_shop  is_stream blog_style_excerpt sidebar_hide expand_content header_style_header-1 header_position_default header_title_on menu_style_top no_layout vc_responsive">
	<div class="body_wrap">
		<div class="page_wrap">
		<header class="top_panel top_panel_style_1 without_bg_image scheme_default">
				<?php include 'includes/header.php'; ?>

				<div class="top_panel_title_wrap">
					<div class="content_wrap">
						<div class="top_panel_title">
							<div class="page_title">
								<h1 class="page_caption">Mein Konto</h1>
							</div>
							<div class="breadcrumbs"><a class="breadcrumbs_item home" href="index.html">Home</a><span class="breadcrumbs_delimiter"></span><span class="breadcrumbs_item current">Mein Konto</span></div>
						</div>
					</div>
				</div>
			</header>

			<div class="menu_mobile_overlay"></div>
			<div class="menu_mobile scheme_dark">
				<div class="menu_mobile_inner">
					<a class="menu_mobile_close icon-cancel"></a>
					<nav class="menu_mobile_nav_area">
						<ul id="menu_mobile" class="menu_mobile_nav">
							<li class="menu-item"><a href="index.php"><span>Home</span></a>
							</li>
							<li class="menu-item"><a href="wine-list.php"><span>Weingut</span></a></li>
							<li class="menu-item menu-item-has-children"><a href="guesthouse.php"><span>Gästehaus</span></a>
								<ul class="sub-menu">
								<li class="menu-item"><a href="family.php"><span>Familie</span></a></li>
								<li class="menu-item"><a href="lagen.php"><span>Lagen</span></a></li>
								</ul>
							</li>
							<li class="menu-item"><a href="ausschankwagen.php"><span>Ausschankwagen</span></a>
							<li class="menu-item"><a href="contacts.php"><span>Kontakt</span></a>
							</li>
							<li class="menu-item menu-item-has-children"><a href="buy-wines.php"><span>Shop</span></a>
								<ul class="sub-menu">
								<li class="menu-item"><a href="cart.php"><span>Warenkorb</span></a></li>
								<li class="menu-item"><a href="checkout.php"><span>Checkout</span></a></li>
								<li class="menu-item"><a href="account.php"><span>Mein Konto</span></a></li>
								</ul>
							</li>
						</ul>
					</nav>
					<div class="search_mobile">
						<div class="search_form_wrap">
							<form role="search" method="get" class="search_form" action="#">
								<input type="text" class="search_field" placeholder="Search ..." value="" name="s">
								<button type="submit" class="search_submit icon-search" title="Start search"></button>
							</form>
						</div>
					</div>
				</div>
			</div>
			
			<div class="page_content_wrap scheme_default">
				<div class="wrap">
					<div class="content">
						<article id="post-574" class="post_item_single post_type_page post-574 page type-page">
							<div class="post_content entry-content">
								<div class="woocommerce">
									<h2>Login</h2>
									<form method="post" class="login">
										<p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
											<label for="username">Username or email address <span class="required">*</span></label>
											<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" value="" />
										</p>
										<p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
											<label for="password">Password <span class="required">*</span></label>
											<input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" />
										</p>
										<p class="form-row">
											<input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="f5b9eb57a2" /><input type="hidden" name="_wp_http_referer" value="/account/" /> <input type="submit" class="woocommerce-Button button" name="login" value="Login" />
											<label for="rememberme" class="inline"><input class="woocommerce-Input woocommerce-Input--checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever"/> Remember me </label>
										</p>
										<p class="woocommerce-LostPassword lost_password">
											<a href="#">Lost your password?</a>
										</p>
									</form>
								</div>
							</div>
						</article>
					</div>
				</div>
			</div>
			
			<?php include 'includes/footer.php'; ?>

		</div>
	</div>
	<script type='text/javascript' src='js/vendor/jquery.js'></script>
	<script type='text/javascript' src='js/vendor/jquery-migrate.min.js'></script>
	<script type='text/javascript' src='js/vendor/plugins/trx_addons/js/trx_addons.js'></script>
	<script type='text/javascript' src='js/__scripts.js'></script>
	<script type='text/javascript' src='js/custom/custom.js'></script>
	<a href="#" class="trx_addons_scroll_to_top trx_addons_icon-up" title="Scroll to top"></a>
</body>
</html>
