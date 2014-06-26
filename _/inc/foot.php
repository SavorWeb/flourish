		<footer class="pagefoot">
			<div class="row">
				<div class="colspan12-6 as-grid">
					<ul class="social clearfix">
						<li><a href="https://www.facebook.com/LizBarrettHealth?ref=hl"><img src="_/img/facebook.png" alt=""></a></li>
						<li><a href="http://www.twitter.com/flourishwithliz"><img src="_/img/twitter.png" alt=""></a></li>
						<li><a href="http://instagram.com/lizbarrett46"><img src="_/img/instagram.png" alt=""></a></li>
						<li><a href="http://www.pinterest.com/lizbarrett46/"><img src="_/img/pinterest.png" alt=""></a></li>
						<li><a href="www.linkedin.com/pub/liz-barrett/3a/123/122"><img src="_/img/linkedin.png" alt=""></a></li>
					</ul>
					<div class="foot-nav">
						<ul class="clearfix">
							<li><a href="#">About</a></li>
							<li><a href="#">Work with me</a></li>
							<li><a href="#">Praise</a></li>
						</ul>
						<ul class="clearfix">
							<li><a href="#">My Loves</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="colspan12-4 as-grid with-gutter email">
					<form action="http://savorweb.createsend.com/t/j/s/bdhidr/" method="post">
						<p>Get my wellness tips, recipes and updates emailed to you!</p>
						<label style="display:none;" for="fieldEmail">Email</label>
						<input id="fieldEmail" name="cm-bdhidr-bdhidr" type="email" required />

						<button class="sub-btn" type="submit"></button>
						<small>© Liz Barrett. All rights reserved.</small>
					</form>
				</div>
			</div>
		</footer>

		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="_/js/responsive-nav.min.js"></script>
		<script type="text/javascript">
				var navigation = responsiveNav(".nav-collapse", {
				customToggle: "#nav-toggle"
			});
		</script>

<script src="_/js/masonry.min.js"></script>
<script>

    // Don't execute if we're in the Live Editor
    if( !window.isCMS ) {
		$('#praise').masonry({
		  columnWidth: 73,
		  itemSelector: 'blockquote'
		});
	}

	
</script>

<script src="_/js/jquery.validate.min.js"></script>
<script src="_/js/jquery.placeholder.min.js"></script>
<script src="_/js/jquery.form.min.js"></script>
<script>
	$(function(){
		$('#contact').validate({
			submitHandler: function(form) {
				$(form).ajaxSubmit({
					url: 'contact-submit.php',
					success: function() {
						$('#contact').hide();
						$('#contact-form').append("<p class='thanks'>Thanks! Your request has been sent.</p>")
					}
				});
			}
		});         
	});
</script>

		<script src="_/js/facebook.min.js"></script>
		<script src="_/js/jquery.tmpl.min.js"></script>

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

		<script src="_/js/script.min.js"></script>

	</body>

</html>