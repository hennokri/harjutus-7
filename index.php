<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html">
	<title>Harjutus7</title>
</head>
<body>
<?php 
	$count = 1;
	
	while ($count <= 10) {
			echo $count;
			$count += 1;
		}
	echo "<br>l2hme edasi";
?>
<?php 
	$count = 1;
	
	while ($count <= 100) {
			echo $count;
			$count += 1;
		}
	
?>

<h3>Infinite while loop</h3>

<?php
   /*$count = 1;

    while ($count <= 10) {
        echo $count; 
        $count += 1;
    }*/
?>
<h3> If statement in while loop </h3>
<?php
    $count = 1;

    while ($count <=10) {
        if ($count == 3) {
            echo "<script>alert('kolm');</script>";
        } elseif($count == 7) {
            echo "<script>alert('seitse');</script>";
            
        } else {
        	echo $count;
        }

        $count += 1;
    }
?>
<h2> For loop </h2>
<?php
    for ($count = 1; $count <= 20; $count += 1) {
       if ($count % 2 == 0) {
       	echo $count . ' on paarisarv.<br>';}
       	else {echo $count . ' on paarituarv.<br>';}
       }
        
    
?> 

<h2> Foreach loop </h2>
<?php
    $loomad = array("Kutsu", "Kiisu", "Kaelkirjak", "Kana", "Konn");
?>
<?php
	echo "<ul>";
    foreach ($loomad as $loomad) {
        echo "<li>" . $loomad . "</li>";

    };
    echo "</ul>";
?>

<?php
    $ained = array("Serveripoolsete veebirakenduste programmeerimine", "3D alused", "Sisuhaldussüsteeminde kasutamine",  "Veebikujundus", "Veebiarendus");
?>
<?php
	echo "<ol>";
    foreach ($ained as $aine) {
        echo "<li>" . $aine . "</li>";

    };
    echo "</ol>";
?>
<table border="1" bgcolor="red"> 
<tbody>
<tr> 
<td bgcolor="lightgray">First_name </td>
<td bgcolor="white">Kristi</td>
</tr>
<tr> 
<td bgcolor="lightgray">Last_name </td>
<td bgcolor="white">Henno</td>
</tr>
<tr> 
<td bgcolor="lightgray">E-mail </td>
<td bgcolor="white">hennokri@gmail.com</td>
</tr>
<tr> 
<td bgcolor="lightgray">Age </td>
<td bgcolor="white">25</td>
</tr>
</tbody>
</table>
</body>

</html>