<?php

const DISTANCE = "far";

$users = [
	[
		"image" => "images/profile_image.png",
		"name" => "Jesse",
		"location" => "Assembly 3.0",
		"adress" => "San Francisco, CA",
		"post" => "Le work.",
		"timestamp" => "7m",
		"message" => "Le Work.",
		"distance" => 5000
	],
	[
		"image" => "images/profile_image.png",
		"name" => "Michal",
		"location" => "Voxer",
		"adress" => "San Francisco, CA",
		"timestamp" => "12m",
		"placeImage" => "https://media.cntraveler.com/photos/5a85c3c3b8ebbd42565cf888/4:5/w_767,c_limit/Place-Trocadero_2018_GettyImages-521062958.jpg",
		"distance" => 4500
	],
	[
		"image" => "images/profile_image.png",
		"name" => "Petr",
		"location" => "ROXY/NoD",
		"adress" => "Prague, Czech Republic",
		"timestamp" => "25m",
		"distance" => 3000
	],
	[
		"image" => "images/profile_image.png",
		"name" => "Jaroslav",
		"location" => "Brno hlavni nadrazi",
		"adress" => "Brno, Czech Republic",
		"timestamp" => "40m",
		"distance" => 3200
	],
	[
		"image" => "images/profile_image.png",
		"name" => "Jesse",
		"location" => "The Mill",
		"adress" => "San Francisco, CA",
		"timestamp" => "1h",
		"distance" => 5000
	]
];

function sortByOrder($a, $b) {
	if (DISTANCE == "far") {
		return $b['distance'] - $a['distance'];
	} else {
		return $a['distance'] - $b['distance'];
	}
}

usort($users, 'sortByOrder');
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<div id="container">
		<?php require_once("header.php"); ?>

		<?php foreach ($users as $user) : ?>
			<div class="wrapper">
				<img src="<?php echo $user['image']; ?>" class="profile-image">
				<strong><?php echo $user["name"]; ?></strong>
				<h2><?php echo $user["location"]; ?></h2>
				<p><?php echo $user["adress"]; ?></p>
				<span><?php echo $user["timestamp"]; ?></span>
				<img src="images/heart.png" class="heart">
				<?php if (isset($user["message"])) { ?>
					<h5><?php echo $user["message"] ?></h5>
				<?php } ?>

				<?php if (isset($user["placeImage"])) { ?>
					<img src="<?php echo $user['placeImage'] ?>" class="place-image">
					<img src="images/down.png" class="down">
				<?php } ?>
				<hr class="line">
			</div>
		<?php endforeach; ?>
	</div>

	<?php require_once("footer.php"); ?>

	<h3>Go to the format 375px X 667px</h3>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/index.js"></script>
</body>
</html>