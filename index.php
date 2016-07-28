<?php 

//The width of the rows are fixed
$rows = 15;
$columns = 41;

?>

<head>
	<script type="text/javascript" src="js/script.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title></title>
</head>
<body>
<!-- 	<header><h1>Seating Chair</h1></header> -->
	<form class="right">
		Rows: <input type="text" name="amountOfRows">
	</form>
<div class="center">
	<!-- Rows -->
	<?php for ($i=0; $i < $rows; $i++) { ?>
	<div class="row">A
	<!-- Seats -->
		<?php for ($j=0; $j < $columns ; $j++) { $j = $j; ?>
		  <img src="" class="seat" id="myImage" onclick="changeImage(this)">
		<?php } ?>	
	</div>
	<?php } ?>
</div>

	

</body>
