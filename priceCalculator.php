<?php
$book_prices = array(25, 10.99, 13.50, 33, 50);
$totalPrice = 0;

?>


<!DOCTYPE html>
<html>
	<head>
		<title>Price Calculator</title>
	</head>
	<body>
	<h1>Price Calculator</h1>
	<?php 
		foreach ($book_prices as $currentPrice) {
			echo "<h3>" . "The running total for the books so far is: $ " . $totalPrice . "</h3>";
			$totalPrice = $totalPrice + $currentPrice;
			}
			echo "<h3>" . "The total price for all the books is: $" . $totalPrice . "</h3>";
	?>
	</body>
</html>

          