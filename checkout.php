<!DOCTYPE html>
<html lang="en-US" class="no-js scheme_default">

<?php include 'includes/head.php'; ?>

<body class="page page-id-464 page-template-default woocommerce-cart woocommerce-page body_tag body_style_wide scheme_default blog_mode_shop  is_stream blog_style_excerpt sidebar_hide expand_content header_style_header-1 header_position_default header_title_on menu_style_top no_layout vc_responsive">
	<div class="body_wrap">
		<div class="page_wrap">
		<header class="top_panel top_panel_style_1 without_bg_image scheme_default">
				<?php include 'includes/header.php'; ?>

				<div class="top_panel_title_wrap">
					<div class="content_wrap">
						<div class="top_panel_title">
							<div class="page_title">
								<h1 class="page_caption">Checkout</h1>
							</div>
							<div class="breadcrumbs"><a class="breadcrumbs_item home" href="index.html">Home</a><span class="breadcrumbs_delimiter"></span><span class="breadcrumbs_item current">Checkout</span></div>
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
                  <article id="post-468" class="post_item_single post_type_page post-468 page type-page">
                      <div class="post_content entry-content">
                          <div class="woocommerce">
                              <div class="woocommerce-info">Returning customer? <a href="#" class="showlogin">Click here to login</a></div>
                              <form method="post" class="login" style="display:none;">
                                  <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>
                                  <p class="form-row form-row-first">
                                      <label for="username">Username or email <span class="required">*</span></label>
                                      <input type="text" class="input-text" name="username" id="username">
                                  </p>
                                  <p class="form-row form-row-last">
                                      <label for="password">Password <span class="required">*</span></label>
                                      <input class="input-text" type="password" name="password" id="password">
                                  </p>
                                  <div class="clear"></div>
                                  <p class="form-row">
                                      <input type="hidden" name="nonce" value="e902817678"><input type="hidden" name="_wp_http_referer" value="/checkout/"> <input type="submit" class="button sc_button_hover_slide_top" name="login" value="Login">
                                      <input type="hidden" name="redirect" value="#">
                                      <label for="rememberme" class="inline"><input name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember me </label>
                                  </p>
                                  <p class="lost_password">
                                      <a href="#">Lost your password?</a>
                                  </p>
                                  <div class="clear"></div>
                              </form>
                              <div class="woocommerce-info">Have a coupon? <a href="#" class="showcoupon">Click here to enter your code</a></div>
                              <form class="checkout_coupon" method="post" style="display:none">
                                  <p class="form-row form-row-first">
                                      <input type="text" name="coupon_code" class="input-text" placeholder="Coupon code" id="coupon_code" value="">
                                  </p>
                                  <p class="form-row form-row-last">
                                      <input type="submit" class="button sc_button_hover_slide_top" name="apply_coupon" value="Apply Coupon">
                                  </p>
                                  <div class="clear"></div>
                              </form>
                              <form name="checkout" method="post" class="checkout woocommerce-checkout" action="#" enctype="multipart/form-data">
                                  <div class="col2-set" id="customer_details">
                                      <div class="col-1">
                                          <div class="woocommerce-billing-fields">
                                              <h3>Billing Details</h3>
                                              <p class="form-row form-row form-row-first validate-required" id="billing_first_name_field"><label for="billing_first_name" class="">First Name <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder="" autocomplete="given-name" value=""></p>
                                              <p class="form-row form-row form-row-last validate-required" id="billing_last_name_field"><label for="billing_last_name" class="">Last Name <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="billing_last_name" id="billing_last_name" placeholder="" autocomplete="family-name" value=""></p>
                                              <div class="clear"></div>
                                              <p class="form-row form-row form-row-wide" id="billing_company_field"><label for="billing_company" class="">Company Name</label><input type="text" class="input-text " name="billing_company" id="billing_company" placeholder="" autocomplete="organization" value=""></p>
                                              <p class="form-row form-row form-row-first validate-required validate-email" id="billing_email_field"><label for="billing_email" class="">Email Address <abbr class="required" title="required">*</abbr></label><input type="email" class="input-text " name="billing_email" id="billing_email" placeholder="" autocomplete="email" value=""></p>
                                              <p class="form-row form-row form-row-last validate-required validate-phone" id="billing_phone_field"><label for="billing_phone" class="">Phone <abbr class="required" title="required">*</abbr></label><input type="tel" class="input-text " name="billing_phone" id="billing_phone" placeholder="" autocomplete="tel" value=""></p>
                                              <div class="clear"></div>
                                              <p class="form-row form-row form-row-wide address-field update_totals_on_change validate-required" id="billing_country_field"><label for="billing_country" class="">Country <abbr class="required" title="required">*</abbr></label>
                                              <select name="billing_country" id="billing_country" autocomplete="country" class="country_to_state country_select" tabindex="-1" title="Country *"><option value="">Select a country…</option><option value="AX">Åland Islands</option><option value="AF">Afghanistan</option><option value="AL">Albania</option></select></p>
                                          <p class="form-row form-row form-row-wide address-field validate-required" id="billing_address_1_field"><label for="billing_address_1" class="">Address <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="billing_address_1" id="billing_address_1" placeholder="Street address" autocomplete="address-line1" value=""></p>
                                          <p class="form-row form-row form-row-wide address-field" id="billing_address_2_field"><input type="text" class="input-text " name="billing_address_2" id="billing_address_2" placeholder="Apartment, suite, unit etc. (optional)" autocomplete="address-line2" value=""></p>
                                          <p class="form-row form-row form-row-wide address-field validate-required" id="billing_city_field" data-o_class="form-row form-row form-row-wide address-field validate-required"><label for="billing_city" class="">Town / City <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="billing_city" id="billing_city" placeholder="" autocomplete="address-level2" value=""></p>
                                          <p class="form-row form-row form-row-first address-field validate-state validate-required" id="billing_state_field" data-o_class="form-row form-row form-row-first address-field validate-required validate-state"><label for="billing_state" class="">State / County <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " value="" placeholder="" autocomplete="address-level1" name="billing_state" id="billing_state"></p>
                                          <p class="form-row form-row form-row-last address-field validate-postcode validate-required" id="billing_postcode_field" data-o_class="form-row form-row form-row-last address-field validate-required validate-postcode"><label for="billing_postcode" class="">Postcode / ZIP <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="billing_postcode" id="billing_postcode" placeholder="" autocomplete="postal-code" value=""></p>
                                          <div class="clear"></div>
                                          <p class="form-row form-row-wide create-account woocommerce-validated">
                                              <input class="input-checkbox" id="createaccount" type="checkbox" name="createaccount" value="1"> <label for="createaccount" class="checkbox">Create an account?</label>
                                          </p>
                                          <div class="create-account" style="display: none;">
                                              <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                              <p class="form-row form-row validate-required" id="account_password_field"><label for="account_password" class="">Account password <abbr class="required" title="required">*</abbr></label><input type="password" class="input-text  welvecxpgvqtxr" name="account_password" id="account_password" placeholder="Password" value="" autocomplete="off"></p>
                                              <div class="clear"></div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-2">
                                      <div class="woocommerce-shipping-fields">
                                          <h3>Additional Information</h3>
                                          <p class="form-row form-row notes" id="order_comments_field"><label for="order_comments" class="">Order Notes</label><textarea name="order_comments" class="input-text " id="order_comments" placeholder="Notes about your order, e.g. special notes for delivery." rows="2" cols="5"></textarea></p>
                                      </div>
                                  </div>
                          </div>
                          <h3 id="order_review_heading">Your order</h3>
                          <div id="order_review" class="woocommerce-checkout-review-order">
                              <table class="shop_table woocommerce-checkout-review-order-table">
                                  <thead>
                                      <tr>
                                          <th class="product-name">Product</th>
                                          <th class="product-total">Total</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr class="cart_item">
                                          <td class="product-name">
                                              Centenary Hill Shiraz&nbsp; <strong class="product-quantity">× 1</strong> </td>
                                          <td class="product-total">
                                              <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>595.00</span>
                                          </td>
                                      </tr>
                                  </tbody>
                                  <tfoot>
                                      <tr class="cart-subtotal">
                                          <th>Subtotal</th>
                                          <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>595.00</span>
                                          </td>
                                      </tr>
                                      <tr class="order-total">
                                          <th>Total</th>
                                          <td><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>595.00</span></strong> </td>
                                      </tr>
                                  </tfoot>
                              </table>
                              <div id="payment" class="woocommerce-checkout-payment">
                                  <ul class="wc_payment_methods payment_methods methods">
                                      <li class="wc_payment_method payment_method_cheque">
                                          <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="cheque" checked="checked" data-order_button_text="">
                                          <label for="payment_method_cheque">Check Payments</label>
                                          <div class="payment_box payment_method_cheque">
                                              <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                          </div>
                                      </li>
                                      <li class="wc_payment_method payment_method_paypal">
                                          <input id="payment_method_paypal" type="radio" class="input-radio" name="payment_method" value="paypal" data-order_button_text="Proceed to PayPal">
                                          <label for="payment_method_paypal">PayPal <img src="https://www.paypalobjects.com/webstatic/mktg/Logo/AM_mc_vs_ms_ae_UK.png" alt="PayPal Acceptance Mark"><a href="#" class="about_paypal">What is PayPal?</a>	</label>
                                          <div class="payment_box payment_method_paypal" style="display:none;">
                                              <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                          </div>
                                      </li>
                                  </ul>
                                  <div class="form-row place-order">
                                      <input type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Place order" data-value="Place order">
                                      <input type="hidden" name="nonce" value="3bb5f4f47f"><input type="hidden" name="_wp_http_referer" value="/checkout/?wc-ajax=update_order_review"> </div>
                              </div>
                          </div>
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
