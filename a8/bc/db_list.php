<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>

<h3>Produce Data</h3>
<?php
$sql = "select * from Produce";

$iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));
if (mysqli_num_rows($result) > 0)//at least one record!
{//show results
	while ($row = mysqli_fetch_assoc($result))
    {
	   echo "<p>";
	   echo "ProduceName: <b>" . $row['ProduceName'] . "</b><br />";
	   echo "Type: <b>" . $row['Type'] . "</b><br />";
	   echo "Family: <b>" . $row['Family'] . "</b><br />";
	   echo "Color: <b>" . $row['Color'] . "</b><br />";
        
        echo '<a href="db_view.php?id=' . $row['ProduceID'] . '">See ' . $row['ProduceName'] . '</a>';
	   echo "</p>";
    }
}else{//no records
	echo '<div align="center">What! No produce?  There must be a mistake!!</div>';
}

@mysqli_free_result($result); #releases web server memory
@mysqli_close($iConn); #close connection to database
?>
<?php include 'includes/footer.php'; ?>