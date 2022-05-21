		<div id="header">
			<ol>
				<li>
					<a href="index.php">Home page</a>
				</li>
				<?php if (empty($_SESSION['id'])) { ?>
				<li>
					<a href="signin.php">Sign in</a>
				</li>
				<li>
					<a href="signup.php">Sign up</a>
				</li>
				<?php } else {  ?>
					<p>Xin chao <?php echo $_SESSION['name']; ?></p>
					<li>
						<a href="signout.php">Sign out</a>
					</li>
				<?php } ?>
				<li>
					<a href="cart.php">Your cart</a>
				</li>
			</ol>
			
		</div>