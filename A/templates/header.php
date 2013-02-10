<div class="grid_5">
	<div id="logo">
		<object width="300" height="200" type="image/svg+xml" data="img/gadgets.svg"></object>
		<div id="header">
			<h1>World of Gadgets</h1>
		</div>
	</div>
	
</div>
<div class="grid_7">
	<ul class="nav">
		<li class="<?php echo activePage('home'); ?>"><img src="img/glyphicons_020_home.png" alt="home icon"><a href="home">Home</a></li>
		<li class="<?php echo activePage('cart'); ?>"><img src="img/glyphicons_202_shopping_cart.png" alt="shopping cart icon"><a href="cart">Cart</a></li>
		<li class="<?php echo activePage('admin'); ?>"><img src="img/glyphicons_137_cogwheels.png" alt="admin icon"><a href="admin">Admin</a></li>
		<li class="<?php echo activePage('services'); ?>"><img src="img/glyphicons_039_notes.png" alt="about icon"><a href="services">Services</a></li>
	</ul>

	<a href="cart" class="cartCount">
		<img src="img/glyphicons_202_shopping_cart.png" alt="shopping cart icon">
		<span><? echo CARTCOUNT; ?> Items</span>
	</a>
</div>
<div class="clear"></div>