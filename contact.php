<?php include("_/inc/head.php"); ?>

		<title>Flourish with Liz Barrett</title>
		<meta name="description" content="..." />
		<meta name="keywords" content="..." />

<style>
	
	.main-cover {
		background-image: url(_/img/contact.jpg);
	}

	.contact {
		border-bottom: 2px solid #F31D79;
	}

</style>

	</head>

<body>
		<div class="main-cover">
		<?php include("_/inc/nav.php"); ?>

			<div class="row-bottom">

			<div class="row">
				<h1 id="headline" class="editable hero-headline">
					<span>The body achieves </span><span>what the mind believes.</span>
				</h1>
			</div>

			</div>

		</div>

		<div id="content" class="row typeset editable">
			<h1>Contact Liz</h1>
			<p>Need help reaching your health and fitness goals? I would love to help you achieve them! Lets get started!! <br>
Please contact me at using the form below with any questions on my programs, cooking classes, Lunch and Learns, or Isagenix.</p>


		<form id="contact" action="contact-submit.php" method="post">
			<fieldset>	
				<div class="colspan12-6 colspan6-6 colspan2-2 as-grid formblock">
					<label for="name">Name</label>
					<input required type="text" name="name" placeholder="Full Name" title="Enter your name" class="required">
				</div>

			    <div class="colspan12-6 colspan6-6 colspan2-2 as-grid with-gutter formblock">
					<label for="phone">Phone</label>
					<input type="tel" name="phone" placeholder="ex. (555) 555-5555">
			    </div>

				<div class="formblock clear">
					<label for="email">E-mail</label>
					<input required type="email" name="email" placeholder="yourname@domain.com" title="Enter your e-mail address" class="required email">
				</div>
			    
				<div class="formblock clear">
					<label for="message">Message</label>
					<textarea required name="message" placeholder="Your message" ></textarea>
				</div>
			    
					<input type="submit" name="submit" class="button btn" id="submit" value="Send Message" />
			</fieldset>
		</form>	

		</div>

		<?php include("_/inc/foot.php"); ?>