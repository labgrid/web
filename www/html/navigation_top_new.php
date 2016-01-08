<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
                <span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="./index.php">Lab Grid</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="dashboard.php">Dashboard</a></li>
				<li><a href="index.php">About</a></li>
				<?php
				include_once "../php-security/db_connect.php";
				include_once "../php-security/security_functions.php";
				sec_session_start();
				if (check_login($db_connection)) { ?><li>
					<a href="#" data-toggle="dropdown" class="dropdown-toggle">Your Account</a>
					<ul class="dropdown-menu">
						<li><a href="#">Active Jobs</a></li>
						<li><a href="#">Settings</a></li>
						<li><a href="logout.php">Logout</a></li>
					</ul>
				</li>
				<li><a href="submit.php">Submit A Job (Under Construction)</a></li>
				<?php
				} else {
					echo '<li><a href="#" data-toggle="modal" data-target="#login_modal">Login</a></li>';
				}
				?>
				<li><a href="#" data-toggle="modal" data-target="#contact_modal">Contact</a></li>
			</ul>
			<form class="navbar-form navbar-right" id="foo">
                <input type="text" class="form-control" placeholder="Search...">
            </form>
		</div>
	</div>
</nav>

<?php include "login_modal.php"; ?>
<?php include "contact_modal.php"; ?>
