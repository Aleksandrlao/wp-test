<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
			<footer role="contentinfo" class="footer">

				<div class="section-inner">

					<div class="footer-box">
						<a class="footer__logo"></a>
						<div class="footer-box__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercgitation.</div>
						<div class="footer-social__list">
							<a href="#" class="footer-social__item footer-social__item--fb"></a>
							<a href="#" class="footer-social__item footer-social__item--tw"></a>
							<a href="#" class="footer-social__item footer-social__item--gp"></a>
							<a href="#" class="footer-social__item footer-social__item--be"></a>
						</div>
					</div>

					<div class="footer-adres">
						<div class="footer__head">Address</div>
						<div class="footer-adres__street">
							Bardeshi, Amin Bazar
							<span>Savar, Dhaka - </span>
							1348 Bangladesh
						</div>
						<div class="footer-adres__item footer-adres__item--email">
							<a href="mailto:email@example.com">email@example.com</a>
						</div>
						<div class="footer-adres__item footer-adres__item--phone">
							<a href="tel:+0001234567890">+ 000 1234 567890</a>
							<a href="tel:+1234567443322">+ 123 4567 443322</a>
						</div>
					</div>
					
					<div class="footer-link">
						<div class="footer__head">Useful Links</div>
						<ul>
							<li><a href="#">Terms & Condition</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Legal Section</a></li>
							<li><a href="#">Customer Care</a></li>
							<li><a href="#">Advertising</a></li>
							<li><a href="#">Corporate Solution</a></li>
							<li><a href="#">Say Hello</a></li>
						</ul>
					</div>
					
					<div class="footer-form">
						<div class="footer__head">Contact</div>
						<form action="/" method="POST">
							<div class="footer-form__inner">
								<div class="footer-form__label footer-form__label--text">
									<input type="text" name="name" placeholder="Name">
								</div>
								<div class="footer-form__label footer-form__label--text">
									<input type="text" name="email" placeholder="Email">
								</div>
								<div class="footer-form__label">
									<textarea name="mess" placeholder="Write your message here"></textarea>
								</div>
								<div class="footer-form__submit">
									<input type="text" name="name" placeholder="Submit">
								</div>
							</div>
						</form>
					</div>

				</div><!-- .section-inner -->


				<div class="section-inner footer__bottom">

					<div class="footer__copyright">All Rights Reserved &copy; 2020</div>

				</div>

			</footer><!-- #site-footer -->

		<?php wp_footer(); ?>

	</body>
</html>
