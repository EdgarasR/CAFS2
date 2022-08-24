<h2>Username: <?php echo $_SESSION['user'];?></h2>
<h3>Email: <?php echo $_SESSION['email'];?></h3>
<h3>Location: <?php echo $_SESSION['location'];?></h3>
<h4>Last logged: <?php echo $timestamp;?></h4>

<a href="../public/logout.php" class="btn btn-info" role="button">Log out</a>