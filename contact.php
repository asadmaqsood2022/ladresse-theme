<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ladresse
 * 
 * Template Name: Contact
 */

get_header();
?>
<style>
	@media only screen and (max-width: 600px) and (min-width: 320px){
		.plan-box{
			flex-direction: column;
		}
		.plan-box > div {
			width: 100% !important;
		}

}
</style>
<!-- Content starts here -->
 <div class="content">
            <div class="contact-us">
                <div class="container">
                    <div class="contact-head">
                        <h2>For inquiries on consultation and our brands</h2>
                        <h6> Contact : info@ladresseparisagency.com</h6>
                        <h6>15 rue d’orsel, 75018 Paris, France</h6>
                    </div>
                    <div class="contact-form">
<!--                         <?= do_shortcode('[gravityform id="1" title="false" description="false" ajax="true" tabindex="49" field_values="check=First Choice,Second Choice"]
'); ?> -->
                    </div>
					<!-- 		payment plan code start here			 -->
					<div class='plan-box' style="display: flex;justify-content: center;">
						<div  style=" float: left;width: 33.3%;padding: 8px;">
						  <ul style="list-style-type: none;border: 1px solid #eee;margin: 0;padding: 0;transition: 0.3s;">
							<li style="background-color: #111;color: white;text-align: center;padding: 10px 25px;font-size: 25px;">Application Fee</li>
							<li style="  border-bottom: 1px solid #eee;padding: 20px;text-align: center;background-color: #eee;font-size: 20px;">€ 200</li>
							<li style="  border-bottom: 1px solid #eee;padding: 20px;text-align: center;background-color: #eee;font-size: 20px;">
								<a href="https://buy.stripe.com/28og0OajM5HL3mMdQU" 
								   style="background-color: #000000;border: none;color: white;padding: 10px 25px;text-align: center;text-decoration: none;font-size: 18px;">
									Select Plan
								</a>
							</li>
						  </ul>
						</div>
						<div  style=" float: left;width: 33.3%;padding: 8px;">
						  <ul style="  list-style-type: none;border: 1px solid #eee;margin: 0;padding: 0;transition: 0.3s;">
							<li style="background-color: #111;color: white;text-align: center;padding: 10px 25px;font-size: 25px;">Course Fee</li>
							<li style="  border-bottom: 1px solid #eee;padding: 20px;text-align: center; background-color: #eee;font-size: 20px;">€ 2000</li>
							<li style="  border-bottom: 1px solid #eee;padding: 20px;text-align: center;background-color: #eee;font-size: 20px;">
								<a href="https://buy.stripe.com/bIY4i6eA2c693mM3ch" 
								   style="  background-color: #000000;border: none;color: white;padding: 10px 25px;text-align: center;text-decoration: none;font-size: 18px;">
									Select Plan
								</a>
							</li>
						  </ul>
						</div>
					</div>
					<!-- 		payment plan code end here			 -->
                </div>
            </div>
<!-- Content ends here -->

<?php
get_footer();