<?php
	include 'testing.php';
	$currentBalance = 55.75;
	$transaction = new transaction;
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Money Table</title>
	<?PHP echo $transaction->css?>
</head>

<body>
	<table>
		<tr id="t_header">
			<th colspan="2">Joe's Account Balance</th>
		</tr>
<!--THIS BIT OF CODE WORKS:
		<?php //echo $transaction->makeEntry("Purchase: Clothing Store",-40,$currentBalance); $currentBalance += -40;?>
		<?php //echo $transaction->makeEntry("ATM Deposite",20,$currentBalance); $currentBalance += 20;?>
		<?php //echo $transaction->makeEntry("Check Number: 12345",-($currentBalance/2),$currentBalance); $currentBalance += -($currentBalance/2);?>
		<?php //echo $transaction->makeEntry("Purchase: Gas Station",-.55,$currentBalance); $currentBalance += -.55;?>
		<?php //echo $transaction->makeEntry("Purchase groceries",-10,$currentBalance); $currentBalance += -10;?>
		<?php //echo $transaction->makeEntry("ATM Deposit",80,$currentBalance); $currentBalance += 80;?>
-->
<!--THIS CODE IS TO AUTO UPDATE THE CURRENTBALANCE-->
		
		<?php $transaction->makeEntry("Purchase: Cothing Store",-40,$currentBalance);$currentBalance += -40; ?>

		<?php $transaction->makeEntry("ATM Deposit",20,$currentBalance);$currentBalance += 20; ?>

		<?php $transaction->makeEntry("Check Number: 12345",-($currentBalance/2),$currentBalance);$currentBalance += -($currentBalance/2); ?>
		
		<?php $transaction->makeEntry("Purchase: Gas",-.55,$currentBalance); $currentBalance += -.55; ?>
		

		<tr id="available">
			<td class="label">Available Balance:</td>
			<td><?php echo sprintf("$%.2f",$currentBalance);?></td>
		</tr>
	</table>
</body>
</html>