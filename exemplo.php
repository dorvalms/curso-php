<?php	
	echo "ola, mundo";
/* declaração de variáveis
*/
	$php = "7.2" ;
	echo "<p>";
	echo $php;
	echo "</p>";
	$item1= "leite";
	$item2= "sabão";
	$item3= "pão";
	$item4= "banana";
	$item5= "macarrão";

	echo "<ul>";
		echo "<li>". $item1 . "</li>";
		echo "<li>". $item2 . "</li>";
		echo "<li>". $item3 . "</li>";
		echo "<li>". $item4 . "</li>";
		echo "<li>". $item5 . "</li>";
	echo"</ul>";	
?>
<ul>
  <li><?php echo $item1; ?></li>
  <li><?php echo $item2; ?></li>
  <li><?php echo $item3; ?></li>
  <li><?php echo $item4; ?></li>
  <li><?php echo $item5; ?></li>
</ul>

