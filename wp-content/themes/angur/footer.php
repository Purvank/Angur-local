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

	
	<section class="footer">


		<div class="section-inner">


			<div class="ft_links_container">
				<div class="ft-block ft-block1">
					<span>Quick Links</span>
					<ul>
						<li><a href="/">Home</a></li>
						<li><a href="/about-us">About Us</a></li>
						<li><a href="/products">Products</a></li>
						<li><a href="/recipe">Recipes</a></li>
						<!--<li><a href="#">Store</a></li>-->
						<li><a href="/export-network">Export Network</a></li>
						<li><a href="/insight">Insights</a></li>
						<li><a href="/contact">Contact</a></li>

					</ul>
				</div>


				<div class="ft-block ft-block2">
    <a href="https://www.google.com/maps/place/Angur/@22.4560069,73.0586693,17z/data=!3m1!4b1!4m5!3m4!1s0x395fb5390137a739:0x86ed439eb3cbfdaa!8m2!3d22.456002!4d73.060858" target="_blank">
					<span>Location</span>
					<p>
	<strong>Patel Chaturbhai Ranchhodbhai Pulses LLP</strong> <br> 
1615, Harikrishna, Approach Road, <br>
Vasad – 388306, Anand <br>
Gujarat, India
					</p>
    </a>
				</div>


				<div class="ft-block ft-block3">
					<span>Contact us</span>
					<div class="ft-block-top phone">
						<div class="ft_img">
							 <i class="fa fa-phone"></i>
						</div>
						<div class="block-details">
							TEL NO <br/>
							+91 2692 274251 / 274139
						</div>
					</div>

					<div class="ft-block-top email">
						<div class="ft_img">
							 <i class="fa fa-envelope"></i>
						</div>
						<div class="block-details">
							EMAIL <br/>
							<a href="mailto:angur@angur.com">angur@angur.com</a>
						</div>
					</div>
				</div>


			</div>

			<div class="social">
				<label>Connect with us</label>

				<div class="social_icons">
				<a href="#" target="_blank"> <i class="fa fa-twitter"></i> </a>
				<a href="https://www.facebook.com/OfficialAngur/" target="_blank"> <i class="fa fa-facebook-square"></i> </a>
				<a href="https://www.instagram.com/angur_toor_dal/" target="_blank"> <i class="fa fa-instagram"></i> </a>
				<a href="#" target="_blank"> <i class="fa fa-youtube-play"></i> </a>
				</div>

				<div class="footer_dal">
					<img src="/wp-content/uploads/2020/10/footer-dal.png">
				</div>

			</div>
		</div>
		
		<div class="copyright">
			<div class="container">
				Copyright Ⓒ 2020 Angur Toor Dal. <br> All Rights Reserved. <span>Designed By: Zero Designs</span>
			</div>					
		</div>


		

	</section>
	

			

<div class="video-popup" style="display: none;">
      <div class="videoblock">
        <div class="video-close">
		<img class="lazy loaded" src="/wp-content/uploads/2020/10/closebutton.png" data-src="/wp-content/uploads/2020/10/closebutton.png" data-was-processed="true">
		  </div>
        
		  <div class="popup">
        
        <div class="content">
         <iframe width="560" height="315" src="https://www.youtube.com/embed/hryDOtu6wLA?start=5" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
		 
		  
</div>
      </div>


			

		<?php wp_footer(); ?>


		<a href="#" id="scroll" title="Scroll to Top" style="display: none;">Top<span></span></a>
		
		<div class="sidebar-form">
			<div  class="request-quote-popup">
				<img src="/wp-content/uploads/2020/10/chat.png">
			</div>
        </div>

		<script type="text/javascript" src="/wp-content/themes/angur-child/js/bootstrap.js"></script>
		

<div id="mySidenav" class="sidenav">
	<a href="javascript:void(0)" class="closebtn"> x </a>
	<h2>
	  Get in touch
	</h2>
  	<p>
		<?php echo do_shortcode( '[contact-form-7 id="245" title="Contact Form"]' ); ?>
	</p>
</div>		



		  <script>
      jQuery(document).ready(function(){ 
        jQuery(window).scroll(function(){ 
          if (jQuery(this).scrollTop() > 100) { 
            jQuery('#scroll').fadeIn(); 
          } else { 
            jQuery('#scroll').fadeOut(); 
          } 
        }); 
        jQuery('#scroll').click(function(){ 
          jQuery("html, body").animate({ scrollTop: 0 }, 600); 
          return false; 
        }); 
      });
    </script>

     <script>
    jQuery(document).ready(function() {
      if (jQuery(this).scrollTop() > 1){  
        jQuery('header').addClass("header-alt");
      }
    });

jQuery(window).scroll(function() {
if (jQuery(this).scrollTop() > 1){  
    jQuery('header').addClass("header-alt");
  }
  else{
    jQuery('header').removeClass("header-alt");
  }
});
</script> 

<script>
jQuery(".request-quote-popup").click(function(){
  jQuery("#mySidenav").addClass("intro");
});

jQuery(".closebtn").click(function(){
  jQuery("#mySidenav").removeClass("intro");
});
</script>

<script type="text/javascript">
			    

var updateProperties = function updateProperties(elem, state) {
  elem.style.setProperty('--x', "".concat(state.x, "px"));
  elem.style.setProperty('--y', "".concat(state.y, "px"));
  elem.style.setProperty('--width', "".concat(state.width, "px"));
  elem.style.setProperty('--height', "".concat(state.height, "px"));
  elem.style.setProperty('--radius', state.radius);
  elem.style.setProperty('--scale', state.scale);
};

document.querySelectorAll('.cursor').forEach(function (cursor) {
  var onElement;

  var createState = function createState(e) {
    var defaultState = {
      x: e.clientX,
      y: e.clientY,
      width: 42,
      height: 42,
      radius: '100px'
    };
    var computedState = {};

    if (onElement != null) {
      var _onElement$getBoundin = onElement.getBoundingClientRect(),
          top = _onElement$getBoundin.top,
          left = _onElement$getBoundin.left,
          width = _onElement$getBoundin.width,
          height = _onElement$getBoundin.height;

      var radius = window.getComputedStyle(onElement).borderTopLeftRadius;
      computedState.x = left + width / 2;
      computedState.y = top + height / 2;
      computedState.width = width;
      computedState.height = height;
      computedState.radius = radius;
    }

    return { ...defaultState,
      ...computedState
    };
  };

  document.addEventListener('mousemove', function (e) {
    var state = createState(e);
    updateProperties(cursor, state);
  });
  document.querySelectorAll('a, button').forEach(function (elem) {
    elem.addEventListener('mouseenter', function () {
      return onElement = undefined;
    });
    elem.addEventListener('mouseleave', function () {
      return onElement = undefined;
    });
  });
});
		</script>


<script type="text/javascript">
      jQuery(document).ready(function(){
          jQuery('.videotag').on('click',function(){
            jQuery('.video-popup').attr('style','display:block');
          });
          jQuery('.video-close').on('click',function(){
           //jQuery('iframe').attr('src', jQuery('iframe').attr('src'));
jQuery("iframe").each(function() { var src= jQuery(this).attr('src'); jQuery(this).attr('src',src); });
            jQuery('.video-popup').attr('style','display:none');
          })
      })
    </script>




	</body>
</html>
