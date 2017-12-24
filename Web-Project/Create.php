<?php
	if(isset($_POST["submit"])){
		$con = mysqli_connect("127.0.0.1", "root", "", "AdminPage");
		$name = addslashes($_POST["your_name"]);
		$surname = addslashes($_POST["surname"]); 
		$e_mail = addslashes($_POST["e-mail"]);
		$food_name = addslashes($_POST["food_name"]);
		$photo = addslashes(file_get_contents($_FILES["photo"]["tmp_name"]));
     	$price = addslashes($_POST["price"]);
		$description = addslashes($_POST["description"]);
		$sql = "INSERT INTO foods (name, description, price, image) VALUES ('$food_name', '$description', '$price', '$photo')";
		$query = mysqli_query($con, $sql);
		if ($query == TRUE) {
		    $sql = "SELECT MAX(id) FROM foods";
			$query = mysqli_query($con, $sql);
			$id = mysqli_fetch_array($query)[0];
			$sql = "INSERT INTO admin (name, surname, email, food_id) VALUES ('$name', '$surname', '$e_mail', '$id')";
			$query = mysqli_query($con,$sql);
			echo "Successfully Inserted <br/>";
		} else {
			echo mysqli_error();
		}
	}
?>