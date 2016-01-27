<html>
<head>
<style>
td {
	padding: 10px;
	text-align: center;
}
</style>	
</head>
<body>

<?php

echo "<table>";
for ($i = 1; $i < 11; $i++)
{
	echo "<tr>";
	for ($j = 1; $j < 11; $j++)
	{
		echo "<td>".$j*$i."</td>";
	}
	echo "</tr>";
}
echo "</table>";

?>

</body>