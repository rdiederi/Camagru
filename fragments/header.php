<div id="header">
	<?php if(isset($_SESSION['id'])) { ?>
			<div class="button" onclick="location.href='forms/disconnect.php'">
				<span>
					Logout
				</snap>
			</div>
	<?php } else { ?>
		<div class="button" onclick="location.href='index.php'">
			<span>
				Login
			</snap>
		</div>
	<?php } ?>
	<?php  ?>
	<div class="button" onclick="location.href='gallery.php'">
		<span>
			Gallery
		</snap>
	</div>
	<div class="button" onclick="location.href='views.php'">
		<span>
			Views
		</snap>
	</div><div class="button" onclick="location.href='settings.php'">
		<span>
			Settings
		</snap>
	</div>
</div>
