<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
"http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<title>Welcome to Wolfkrow Diner</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="/css/style.css" media="all">
</head>
<body>
	
	<!--
		TODO You can do better than this. Replace login form if logged in.
	-->
	
	<?php if($this->session->userdata('logged_in')): ?>
	<div class="logout" >
	<?=$this->session->userdata('full_name')?> | <a href="/login/logout">Logout</a>
	</div>
	<?php endif; ?>
	
	<h1>Welcome to Wolfkrow Diner</h1>
	
	<fieldset id="signin">
		<h2>Login</h2>
		<?php if ($this->session->userdata('logged_in')): ?>
			<p>
			Already logged in. <a href="/login/switchboard">Get in there.</a>
			</p>
		<?php else: ?>
		<?php echo validation_errors(); ?>
		<form action="" method="post">
			
			<label for="email">Email:</label>
			<input type="text" name="email" id="email" value="<?= 
				set_value('email')?>">
			
			<label for="password">Password:</label>
			<input type="password" name="password" id="password">
			
			<input type="submit" name="submit" value="Sign in">
			
			<p><a href="/login/signup">First time here?</a></p>
		</form>
		<?php endif; ?>
	</fieldset>
	
	<h2 id="menu">Today’s Menu</h2>
	<dl>
		<dt>Entree</dt>
			<dd>Chicken and Dumplings</dd>
		<dt>Side</dt>
			<dd>Frozen Corn</dd>
		<dt>Side</dt>
			<dd>Mashed Potatoes</dd>
		<dt>Drink</dt>
			<dd>Hawaiian Slushie</dd>
	</dl>
	
	<h2>About the Restaurant</h2>
	
	<p>In the town of Wolfkrow there is just one restaurant, called the Wolfkrow Diner, for its 10000 inhabitants. Like most restaurants, patrons of Wolfkrow Diner come into the restaurant and find a hostess who will seat them, order from a menu, eat, and leave. Unlike other restaurants, Wolfkrow Diner doesn't employ anyone but a manager for the thousands of meals served each day. </p>
	<p>A major difference between Wolfkrow Diner and normal restaurants is that patrons pay for each person that helps them individually. At the stage when a host greets the patron, the patron selects one of several hosts based on their hosting ability and their fee and pays right then. Next when a waiter seats the patron, the patron selects one of several waiters based on their ability and appearance, and they pay for the waiter to seat them. </p>
	
	<ul>
		<li><a href="/vendor/apply">Apply to become a vendor.</a></li>
	</ul>
	
	<div id="footer">
		&copy; Wolfkrow Diner 2009 | Software Project for AJE by Miles Pomeroy
	</div>
	
</body>
</html>