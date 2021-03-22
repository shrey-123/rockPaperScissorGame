<?php
	$player = array();
	for($j=1; $j<5; $j++)
	{
		for($k=1; $k<5; $k++)	
		{
			$player[$j][$k] = 0;
		}
	}

	function checkResult($first,$second)
	{
		if($first==$second)
		{
			return 0;
		}
		else if($first == 'rock' && $second == 'paper')
		{
			return 0;
		}
		else if($first == 'rock' && $second == 'scissors')
		{
			return 1;
		}
		else if($first == 'paper' && $second == 'rock')
		{
			return 1;
		}
		else if($first == 'paper' && $second == 'scissors')
		{
			return 0;
		}
		else if($first == 'scissors' && $second == 'rock')
		{
			return 0;
		}
		else if($first == 'scissors' && $second == 'paper')
		{
			return 1;
		}
	}
?>
<!DOCTYPE html>	
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
	<?php
		for($i = 1;$i<51;$i++)
		{
			$a = array("rock","paper","scissors");
			for($c=1; $c<5; $c++){	
				$player_rand[$c] = $a[array_rand($a,1)];
			}
			echo '<h3><center>Round '.$i.'</center></h3>';
	?>
		<table class="table table-striped table-hovered table-bordered">
			<tr>
				<?php
					foreach($player_rand as $key => $val){
				?>
					<th>Player <?php echo $key?></th>
				<?php } ?>
			</tr>
			<tr>
				<?php
					foreach($player_rand as $val){
				?>
					<td><?php echo ucfirst($val)?></td>
				<?php } ?>
			</tr>
		</table>
		<table class="table table-striped table-hovered table-bordered">
			<tr align="center">
				<th colspan="5">Results</th>
			</tr>
	<?php
			echo '<tr>';
			echo '<td> Players <----> </td>';
			for($l=1; $l<5; $l++)
			{
				echo '<td> Player '.$l.'</td>';
			}
			echo '</tr>';
			for($j=1; $j<5; $j++)
			{
				echo '<tr>';
				echo '<td> Player '.$j.'</td>';
				for($k=1; $k<5; $k++)	
				{
					if($j==$k){
						echo '<td> - </td>';
					}else{
						$player[$j][$k] += checkResult($player_rand[$j],$player_rand[$k]);
						echo '<td> '.$player[$j][$k].' </td>';
					}
				}
				echo '</tr>';
			}
			echo '</table>';
	}
?>
	
</div>
</body>
</html>
