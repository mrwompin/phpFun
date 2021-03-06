<?php 
	//PHP INCLUDE STATEMENTS
		include 'transact.php';
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Money Table</title>
	<?PHP echo Trans::CSS?>
</head>

<body>
	<table>
		<tr id="t_header">
			<th colspan="2">Joe's Account Balance</th>
		</tr>

<!--THIS CODE IS TO AUTO UPDATE THE CURRENTBALANCE-->
		<?php
		$currentBalance = 55.75;
		$transaction = new Trans;
		$transLog = array(
			array("Purchase: Clothing", -40),
			array("ATM Deposit", 20),
			array("Check Number: 12345", -17.88),
			array("Purchase: Gas", -.55)
			);

		foreach ($transLog as $log) {
			$currentBalance = $transaction->makeTrans($log[0], $log[1], $currentBalance);	
		}
			echo <<<TABLE_END
			<tr id="available">
			<td class="label">Available Balance:</td>
			<td><?php echo sprintf("$%.2f",$currentBalance);?></td>
		</tr>
		</table>
TABLE_END
		?>

		
	</body>
</html>