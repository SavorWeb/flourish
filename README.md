This boilerplate is the starting point assembled by Ryan Maskell on April 21st 2014.

It uses the following technologies and plugins and bows to their greatness, they were developed by people like me, for people like us. Developers.

#Technologies

+ Framework: [Sassaparilla](http://sass.fffunction.co)
+ Preprocessing: [Mixture.io](http://mixture.io)

##Plugins

+ [Responsive Nav](http://www.responsive-nav.com)
+ [Transformicons](http://sarasoueidan.com/blog/navicon-transformicons/)
+ [Swipe.js](http://www.swipejs.com)

--
--- script ---
--

<script type="text/javascript">
		var elem = document.getElementById('slider');
		
		window.mySwipe = Swipe(elem, {
		  	auto: 6000,
		});
</script>

<script type="text/javascript">
		<!--//--><![CDATA[//><!--
		$(document).ready(function() {
		$('form#contact-us').submit(function() {
		  $('form#contact-us .error').remove();
		  var hasError = false;
		  $('.requiredField').each(function() {
		    if($.trim($(this).val()) == '') {
		      var labelText = $(this).prev('label').text();
		      $(this).parent().append('<span style="display: block;" class="error">You forgot to enter your '+labelText+'.</span>');
		      $(this).addClass('inputError');
		      hasError = true;
		    } else if($(this).hasClass('email')) {
		      var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		      if(!emailReg.test($.trim($(this).val()))) {
		        var labelText = $(this).prev('label').text();
		        $(this).parent().append('<span class="error">Sorry! You\'ve entered an invalid '+labelText+'.</span>');
		        $(this).addClass('inputError');
		        hasError = true;
		      }
		    }
		  });
		  if(!hasError) {
		    var formInput = $(this).serialize();
		    $.post($(this).attr('action'),formInput, function(data){
		      $('form#contact-us').slideUp("fast", function() {          
		        $(this).before('<p>Thanks for the message! We\'ll get back to you as soon as we can.</p>');
		      });
		    });
		  }
		  
		  return false; 
		});
		});
		//-->!]]>
</script>

### accordian

<script src="_/js/responsive-accordion.min.js"></script>

	<ul class="acc">
		<li>
			<div class="acc-head">Thing 1<i class="fa fa-chevron-down acc-plus fa-fw"></i><i class="fa fa-chevron-up acc-minus fa-fw"></i></div>
			<div class="acc-panel">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam, eveniet, eaque, autem beatae amet mollitia saepe minus fugit odit minima maxime harum explicabo ipsa natus est similique ab reprehenderit totam!</p>
			</div>
		</li>
		<li>
			<div class="acc-head">Thing 2<i class="fa fa-chevron-down acc-plus fa-fw"></i><i class="fa fa-chevron-up acc-minus fa-fw"></i></div>
			<div class="acc-panel">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, incidunt, maxime nostrum dolore eum dolores cum sunt ducimus debitis reiciendis praesentium molestias? Soluta, fugit, nisi odit nostrum at tempore architecto.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, repellat adipisci eius magni necessitatibus non soluta amet eligendi. Optio, consequuntur hic cumque dolorum ipsam doloribus repellendus harum unde consequatur odio?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, nobis, tenetur nihil quod itaque molestiae assumenda quam rem dolore quisquam facilis ea necessitatibus officiis praesentium labore doloribus voluptas consequuntur deserunt.</p>
			</div>
		</li>
		<li>
			<div class="acc-head">Thing 3<i class="fa fa-chevron-down acc-plus fa-fw"></i><i class="fa fa-chevron-up acc-minus fa-fw"></i></div>
			<div class="acc-panel">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, alias nemo ab modi porro quam ex temporibus animi ipsam laborum aperiam excepturi doloremque! Quia, fugiat culpa corporis obcaecati laborum atque.</p>
			</div>
		</li>
	</ul>


### slider

<script src="_/js/swipe.min.js"></script>

		<div id='slider' class='swipe'>
	  <div id="slider-pictures" class='swipe-wrap editable'>
	    <div class="repeatable"><img src="http://www.placehold.it/1000x300" alt=""></div>
	    <div class="repeatable"><img src="http://www.placehold.it/1000x300" alt=""></div>
	    <div class="repeatable"><img src="http://www.placehold.it/1000x300" alt=""></div>
	  </div>
	</div>

### contact

<div class="row" id="contact">
	<?php if(isset($hasError) || isset($captchaError) ) { ?>
        <p class="alert">Error submitting the form</p>
    <?php } ?>

	<form id="contact-us" action="contact-submit.php" method="post">
		<div class="formblock">
			<label class="screen-reader-text">Name</label>
			<input type="text" name="contactName" id="contactName" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" class="txt requiredField" placeholder="Name:" />
			<?php if($nameError != '') { ?>
				<br /><span class="error"><?php echo $nameError;?></span> 
			<?php } ?>
		</div>
        
		<div class="formblock">
			<label class="screen-reader-text">Email</label>
			<input type="text" name="email" id="email" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" class="txt requiredField email" placeholder="Email:" />
			<?php if($emailError != '') { ?>
				<br /><span class="error"><?php echo $emailError;?></span>
			<?php } ?>
		</div>
        
		<div class="formblock">
			<label class="screen-reader-text">Message</label>
			 <textarea name="comments" id="commentsText" class="txtarea requiredField" placeholder="Message:"><?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?></textarea>
			<?php if($commentError != '') { ?>
				<br /><span class="error"><?php echo $commentError;?></span> 
			<?php } ?>
		</div>
        
			<button name="submit" type="submit" class="subbutton">Send us Mail!</button>
			<input type="hidden" name="submitted" id="submitted" value="true" />
	</form>			
</div>

### Facebook
		<script src="assets/js/facebook.min.js"></script>
		<script src="assets/js/jquery.tmpl.min.js"></script>
				<!-- Pulling in Facebook page id:'524500907614152',
		access_token:'763971193627319|IAUf3wjhHJoSZQLB2tRdI71AacA' -->
		
		<section class="fb">
			<header>
				<h1><a target="_blank" href="https://www.facebook.com/pages/Servicemaster-of-North-Idaho/524500907614152">ServiceMaster of North Idaho</a></h1>
				<div class="fb-like" data-href="https://www.facebook.com/pages/Servicemaster-of-North-Idaho/524500907614152" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
			</header>
			<div id="wall" class="facebookWall"></div>
		</section>

		
		<!-- jQuery templates. Not rendered by the browser. Notice the type attributes -->

		<script id="headingTpl" type="text/x-jquery-tmpl">
		<h1>${name}<span>on Facebook</span></h1>
		</script>

		<script id="feedTpl" type="text/x-jquery-tmpl">
		<li>
			<img src="${from.picture}" class="avatar" />
			
			<div class="status">
				<h2><a href="http://www.facebook.com/profile.php?id=${from.id}" target="_blank">${from.name}</a></h2>
				<p class="message">{{html message}}</p>
				{{if type == "link" }}
					<div class="attachment">
						{{if picture}}
							<img class="picture" src="${picture}" />
						{{/if}}
						<div class="attachment-data">
							<p class="name"><a href="${link}" target="_blank">${name}</a></p>
							<p class="caption">${caption}</p>
							<p class="description">${description}</p>
						</div>
					</div>
				{{/if}}
			</div>
			
			<p class="meta">${created_time} · 
			{{if comments}}
				${comments.count} Comment{{if comments.count>1}}s{{/if}}
			{{else}}
				0 Comments
			{{/if}} · 
			{{if likes}}
				${likes.count} Like{{if likes.count>1}}s{{/if}}
			{{else}}
				0 Likes
			{{/if}}
			</p>
			
		</li>
		</script>