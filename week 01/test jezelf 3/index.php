<?php
	$toDos = [
		[
			"beschrijving" => "Post screenshot to Dribbble",
			"urenWerk" => 55,
			"categorie" => "home"
		],
		[
			"beschrijving" => "Publish Website",
			"urenWerk" => 250,
			"categorie" => "work"
		],
		[
			"beschrijving" => "Launch Mac version",
			"urenWerk" => 60,
			"categorie" => "hobby"
		],
		[
			"beschrijving" => "Release iPhone Update",
			"urenWerk" => 600,
			"categorie" => "home"
		],
		[
			"beschrijving" => "Organise Launch Party",
			"urenWerk" => 300,
			"categorie" => "work"
		]
	];
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<?php 
		foreach ($toDos as $toDo): 

			if ($toDo["urenWerk"] <= 60) {
				$color = "green";
			} else if ($toDo["urenWerk"] <= 300) {
				$color = "orange";
			} else {
				$color = "red";
			}
	?>
		<p style="background-color: <?php echo $color; ?>">
			<?php echo $toDo["beschrijving"]; ?>
		</p>
	<?php endforeach; ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/index.js"></script>
</body>
</html>