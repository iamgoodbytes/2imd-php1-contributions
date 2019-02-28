<?php

	$vanues = [
		[
			"image" => "https://dummyimage.com/200x200/000/fff",
			"date" => "Thu 18 Feb 2016",
			"artist" => "Kula Shaker",
			"extraArtist" => "+ Olivier Terwagne",
			"description" => "British psych-pop icon is hatching a comeback & a new LP!",
			"hour" => "20:00",
			"location" => "AB Club",
			"tickets" => "Sold out"
		],
		[
			"image" => "https://dummyimage.com/200x200/000/fff",
			"date" => "Thu 18 Feb 2016",
			"artist" => "Black Box Revelation",
			"extraArtist" => "+ Mo & Grazz",
			"description" => "Glorious return of Black Box to AB!",
			"hour" => "20:00",
			"location" => "AB Main Hall",
			"tickets" => "Sold out"
		],
		[
			"image" => "https://dummyimage.com/200x200/000/fff",
			"date" => "Thu 18 Feb 2016",
			"artist" => "screening: Pulp: A film about life, death & supermarkets",
			"description" => "Documentary about one of Britpop's most important bands",
			"hour" => "20:00",
			"location" => "Huis 23",
			"tickets" => "Full"
		]
	];

	if (isset($_GET["sort"])) {
		$like = $_GET["sort"];

		$result = array_filter($vanues, function ($item) use ($like) {
		    if (stripos($item['location'], $like) !== false) {
		    	return true;		    
		    }
		    return false;
		});

		if (!empty($result)) {
			$vanues = $result;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<h1>Filter by venue: <a href="?sort=AB Club">AB Club</a> - <a href="?sort=AB Main Hall">AB Main Hall</a> - <a href="?sort=Huis 23">Huis 23</a> - <a href="?sort=showAll">Show All</a></h1>

	<?php 
		foreach ($vanues as $vanue): 
	?>
		<div class="container">
			<img src="<?php echo $vanue['image'] ?>">
			<div class="inner">
				<span class="date"><?php echo $vanue["date"] ?></span>
				<h2><?php echo $vanue["artist"] ?></h2>
				<?php
					if (isset($vanue["extraArtist"])) {
						echo "<h3>" . $vanue['extraArtist'] . "</h3>";
					}
				?>
				<p><?php echo $vanue["description"] ?></p>
				<i class="far fa-clock"></i>
				<span class="extra"><?php echo $vanue["hour"] ?></span>
				<i class="fas fa-map-pin"></i>
				<span class="extra"><?php echo $vanue["location"] ?></span>
				<i class="fas fa-ticket-alt"></i>
				<span class="extra"><?php echo $vanue["tickets"] ?></span>
			</div>
		</div>
	<?php endforeach; ?>
</body>
</html>