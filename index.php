<?php include 'database.php'; ?>
<?php
	//Create select query 
	$query = "SELECT * FROM shouts ORDER BY id DESC";
	$shouts = mysqli_query($con, $query); //Pass connection to database && Pass the query
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset = 'utf-8' />
		<title> SHOUT IT!</title>
		<link rel="stylesheet" href = 'css/style.css' type = 'text/css'/>
	</head>

	<body>
		<div id="container">
			<header>
				<h1>Shout It - Post Board </h1>
			</header>
			
			<body>
				<div id = "shouts">
					<ul>
						<?php while($row = mysqli_fetch_assoc($shouts)) : ?> 
						<li class="shout"><span><?php echo $row["time"]?>    -    </span> <strong><?php echo $row["user"]?> </strong> - <?php echo $row["message"]?>  </li>
					<?php endwhile; ?>
					</ul>
					
				</div>
				
				<div id="input">
					<?php if(isset($_GET['error'])) : ?>
						<div class='error'><?php echo $_GET['error'] ?>< </div>
					<?php endif; ?>
					<form method = "post" action = "process.php" ><!--Method is what to do, action is where to post it -->
						<input type="text" name="user" placeholder = "Enter Your Name" />
						<input type="text" name="message" placeholder="Enter A Message"/>
						<br>
						<input class="shout-btn" type="submit" name ="submit" value="Shout It Out" />
						
					</form>
				</div>
			</body>
		</div>
	</html>