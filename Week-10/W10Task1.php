<!DOCTYPE html>
<html>
<head>
	<title>Car | Upgrade</title>
</head>
<body>
	<div class="main">

		<div class="maker"><?php echo $selectOption=$_GET["maker"];?><br></div>
		<div class="price"><?php  echo $selectOption=$_GET["price"];?><br></div>
	<div>
		<div class="condition"><?php echo $selectOption=$_GET["condition"]; ?><br></div>
		<div class="type"><?php echo $selectOption=$_GET["type"]; ?><br></div>
	</div>
		<div class="attributes">
			<?php 
				if (isset($_GET['attribute'])) {
					$name = $_GET['attribute'];
				    foreach ($name as $attribute){
				        echo $attribute.", ";
				    }
				} 
			?>
		<br></div>

	</div>
	
</body>
<style type="text/css">
	.attributes{
		margin-top: 5px;
		margin-left: 10px;

	}
	.main{
		width: 30vw;
		height: 17vh;
		border: 2px solid blue;
		border-radius: 7px;
	}
	.price{
		display: flex;
		float: right;
		font-size: 30px;
		margin-right: 40px;
		margin-top: 5px;
	}
	.type{
		display: flex;
		float: right;
		font-size: 25px;
		text-decoration: underline;
		margin-right: 30px;

	}

	.maker{
		margin-left: 5px;
		display: inline-block;
		font-weight: bold;
		font-size: 40px;
	}
	.condition{
		display: inline-block;
		margin-left: 5px;
		text-align: center;
		color: white;
		border: 1px solid grey;
		border-radius: 4px;
		background-color: grey;
		width: 60px;
		height: 20px;
		margin-top: 5px;

	}
</style>

</html>