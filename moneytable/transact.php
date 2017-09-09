<?php 

class Trans {
	

	static $crntAmnt;
 const CSS = <<<STYLESHEET
	<style>
			table {
				width: 600px;
			}

			#t_header {
				font-weight: bold;
				text-align: center;
			}

			.transactions {
				background-color: ;
				width: 100%;

			}

			.description {
				width: 60%;
			}

			.charge {
				font-size: .75em;
				width: 40%;
				text-align: right;
			}

			tr.balance td{
				text-align: right;
				border-bottom: 1pt solid black;
				
			}
			
			#available {
				text-align: right;
				font-size: 1.5em;
			}

			#available .label {
				text-align: left;
			}
		</style>\n
STYLESHEET;

	public function makeTrans($desc, $trns, $crnt) {
		$trnsDesc = $desc;
		$trnsAmnt = formatVar($trns);
		$trnsAdded =  $crnt + $trns;
		$trnsResult = formatVar($trnsAdded);
		self::$crntAmnt = $trnsAdded;
		echo <<<EOT
<tr class="transactions">
			<td class="description">$trnsDesc</td>
			<td class="charge">$trnsAmnt</td>
		</tr>
		<tr class="balance">		
			<td colspan="2">$trnsResult</td>
		</tr>
EOT;
		return self::$crntAmnt;


	}	
}

 function formatVar($x) {

	return sprintf("$%.2f", $x);
}

?>