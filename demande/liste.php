<!DOCTYPE html>
<html lang="en">
<head>
	<title>consultation des demandes</title>
</head>

<body>

<img src="C:\xamppo\htdocs\demande\img\cntr.jpg" width="280" height="125" alt="" >




<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<center><h1>Liste des demandes</h1></center>
<br>


<?php 
$conn = mysqli_connect("localhost", "root", "", "elearning");
  
if ($conn === false) {
    die("ERROR: Could not connect. "
                .mysqli_connect_error());
}
  
$sql = "SELECT * FROM demande";
if ($res = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($res) > 0) {
        echo "<center><table border='' width='100%' ></center>";
		echo "<tr bgcolor='steelblue'>";
      
        echo "<th>nom</th>";
        echo "<th>prenom</th>";
        echo "<th>email</th>";
		echo "<th>telephone</th>";
		echo "<th>etablissement</th>";
		echo "<th>description</th>";
	    echo "</tr>";
       
	   while ($row = mysqli_fetch_array($res)) {
            echo "<tr>";
            echo "<td>".$row['nom']."</td>";
            echo "<td>".$row['prenom']."</td>";
            echo "<td>".$row['email']."</td>";
			echo "<td>".$row['telephone']."</td>";
			echo "<td>".$row['etablissement']."</td>";
			echo "<td>".$row['description']."</td>";
			echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($res);
    }
    else {
        echo "No matching records are found.";
    }
}
else {
    echo "ERROR: Could not able to execute $sql. "
                                .mysqli_error($conn);
}
mysqli_close($conn);
?>