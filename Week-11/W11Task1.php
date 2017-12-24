<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.red{
			border:2px solid black;
			border-radius: 10px;
			width: 400px;
			display: flex;
			flex-direction: row;
		}
		.red2{
			margin-left: 40px;
		}
		img{
			margin-left: 5px;
			margin-top: 3px;
		}
	</style>
</head>
<body>
<?php
$con=mysqli_connect("127.0.0.1","root","","project");
$sql="select * from cars";
$query=mysqli_query($con,$sql);
$num=mysqli_num_rows($query);
for ($i=0; $i <$num ; $i++) { 
	$result=mysqli_fetch_array($query);
	$img=$result['image'];
	$img2=base64_encode($img);
	$maker=$result['maker'];
	$model=$result['model'];
	$price=$result['price'];
	print "<div class=\"red\">
	 <img src=\"data:image;base64,".$img2."\" width=150 height=100/>
	 <div class=\"red2\">
	 <p> ".$maker." ".$model."</p>
	 <p> Year: 2011 </p>
	 <p> Price: ".$price."$</p>
	 </div>
	 </div><br/>";
}
?>
</body>
</html>