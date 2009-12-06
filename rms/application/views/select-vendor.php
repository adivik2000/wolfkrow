<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
"http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<title>Select a <?=ucwords($type)?></title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="/css/style.css" media="all">
</head>
<body>

	<h1>Select a <?=ucwords($type)?></h1>

	<?php if ($type == 'host'): ?>
	<p>Thank you for choosing Wolfkrow Diner. It’s the only choice in town.</p>
	
	<p>Begin your experience with us by selecting one of the hosts below to 
		seat you. You can stick with the standard package or select additional
		services.</p>
	<?php endif; ?>
		
		
	<div id="standard">
		<h2>Host Standard Package</h2>
	
		<ul>
			<li>Seat you at your choice of table or booth.</li>
			<li>Provide menus.</li>
		</ul>
	</div>	
	
	<div id="additional">
		<h2>Additional Services</h2>
	
		<input type="checkbox" id="high-chair">
		<label for="high-chair">High Chair</label>
	
		<input type="checkbox" id="dance">
		<label for="dance">Do a Little Dance</label>
	</div>	
	
	<h2>Hosts</h2>
	
	<label for="sort-by">Sort by:</label>
	<select id="sort-by">
		<option>Rating</option>
		<option>Price</option>
	</select>
	
	<form class="vendor" action="selected-vendor.html">
		<img src="/images/wolfgang-puck.jpg" alt="Wolfgang Puck">
		<h3><a href="view-vendor.html">Wolfgang Puck</a></h3>
		<p>Available</p>
		<p>Rating: ★★★☆☆</p>
		<p>Price: $20</p>
		<input type="submit" value="Select Wolfgang Puck">
	</form>

	<form class="vendor" action="selected-vendor.html">
		<img src="/images/ina.jpg" alt="Wolfgang Puck">
		<h3><a href="view-vendor.html">Ina Garten</a></h3>
		<p>Available</p>
		<p>Rating: ★★☆☆☆</p>
		<p>Price: $30</p>
		<input type="submit" value="Select Ina Garten">
	</form>
	
	<div id="footer">
		&copy; Wolfkrow Diner 2009 | Software Project for AJE by Miles Pomeroy
	</div>

</body>
</html>