<?php
	include_once 'header.php';
?>
	<section class="main-container">
		<div class="main-wrapper">
			<h2>signup</h2>
			<form class="signup-form">
				<input type="text" name="first" placeholder="Firstname">
				<input type="text" name="last" placeholder="Lastname">
				<input type="text" name="email" placeholder="E-mail">
				<input type="text" name="uid" placeholder="UserName">
				<input type="password" name="pwd" placeholder="password">
				<button type="submit" name="submit">Sign Up</button>
			</form>
		</div>
	</section>

<?php
	include_once 'footer.php';
?>