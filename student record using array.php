<!DOCTYPE html>
<html>
<head>
	<title>Student's Information</title>
	<style type="text/css">
		body{
			background-color: aqua;
		}
		table,tr,td{
			font-size: 25px;
			border-radius: 3px;
		}
	</style>
</head>
<body>
	<center>
		<h1>Students Record</h1>
		<?php
		  $record = array(
	  	array("121","Mahudoom Naina","II",98),
	  	array("122","Maha Mathi","II",98),
	  	array("123","Kapil","II",95),
	  	array("124","Mithun","II",90),
	  	array("125","Ranjith","II",95)

	  );
	  echo "<table border=1>";
	  echo "<tr>";
	  echo "<th>ENo.</th><th>Name.</th><th>Sem</th><th>Marks</th>";
	  echo "</tr>";

	  for($i=0;$i<5;$i++){
	  	echo "<tr>";
	  	for($j=0;$j<4;$j++){
	  		echo "<td>";
	  		echo $record[$i][$j];
	  		echo "</td>";
	  	}
	  	echo "</tr>";
	  }
	  echo "</table>";



		?>
	</center>

</body>
</html>