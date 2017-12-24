<html>
	<head>
		<link rel="shortcut icon" href="logo2.jpg" />
		<title>Healthy Food Delivery</title>
		<link rel="stylesheet" type="text/css" href="AdminPage.css">
	</head>
	
	<body>
        
		<div id="sidebar">
            <div id="name">Healthy Food Delivery</div>
            <a href="main.html"><img id="logo" src="logo2.jpg"/></a>

			<div id="navigation">
				<nav>
					<div class="element">Healthy Recipes</div>
					<div class="element">Weight Loss</div>
					<div class="element">Special Diets</div>
					<div class="element">Meal Plans</div>
				</nav>
			</div>
		</div>
		
		<div id="items">
			<?php
			$con = mysqli_connect("127.0.0.1", "root", "", "AdminPage");
			$sql = "select * from admin INNER JOIN foods ON admin.food_id = foods.id";
			$query = mysqli_query($con,$sql);
			$num = mysqli_num_rows($query);
			for($i = 0; $i<$num; $i++){
				$array = mysqli_fetch_array($query);
				$food_name = $array['name'];
				$price = $array['price'];
				$description = $array['description'];
				$photo = $array['image'];
                $photo2 = base64_encode($photo);
				print "<div class=\"item\">
						<img src=\"data:image;base64,".$photo2."\"/>
						<div  class=\"content\">
							<div class=\"app\">$food_name</div>
							<div class=\"text\">$description</div>
							<div class=\"price\"><p><mark>".$price."$</mark></p></div>
							<div>
								<button class=\"delete\">Delete</button>
								<button class=\"update\">Update</button>
							</div>
						</div>
					</div>";
			}
			?>
			<!-- <div class="item">
				<img src="http://images.media-allrecipes.com/userphotos/960x960/3879362.jpg"/>
				<div  class="content">
					<div class="app">ROASTED CHICKEN WITH PAN GRAVY</div>
					<div class="text">In this easy roast chicken recipe, onions, carrots and celery cook underneath and soak up the juices from the roasting bird. The delicious vegetables are then used to make easy, healthy gravy. Serve this dish with a big green salad with vinaigrette.</div>
					<div class="price"><p><mark>20.99$</mark></p></div>
					<div>
						<button class="delete">Delete</button>
						<button class="update">Update</button>
					</div>
				</div>
			</div> -->
		</div>
	</body>
</html>