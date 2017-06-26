<html>
<head>
<title>
recipe book
</title>
<body>
	
<?php	$fo=opendir ("./book/");
	while ($of = readdir ($fo))
	{	if ($of != "."&&$of !="..")
		{	echo "<h1>".$of."</h1>";
			$sml = simplexml_load_file ('book/'.$of);
			echo "name of recipe:";
			echo "<br />";
			echo $sml->title."<br /><br />";
			echo "equipment needed: ";echo "<br />";
			$lms = $sml->equipment;
			foreach ($lms as $mxl)
			{echo $mxl . "<br/>";}echo "<br />";
			echo "ingredents needed:"; echo "<br />";
			echo $sml->ingredients->caption."<br />";
			$msl = $sml->ingredients->items->item;
			foreach ($msl as $xml)
			{echo $xml . "<br />";}echo "<br />";
			echo "cooking procedure:<br/>";
			echo $sml->procedures."<br />";
	}	}
	closedir ($fo);?></body></html>
