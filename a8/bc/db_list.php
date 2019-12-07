<?php
//db_list.php - shows a list of customer data
?>
<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>

<p><b>Produce List</b></p>
<?php
$sql = "select * from Produce";
//we connect to the db here
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

//we extract the data here
$result = mysqli_query($iConn,$sql);

if(mysqli_num_rows($result) > 0)
{//show records

    while($row = mysqli_fetch_assoc($result))
    {
        echo '<p>';
        echo 'ProduceName: <b>' . $row['ProduceName'] . '</b> ';
        echo 'Type: <b>' . $row['Type'] . '</b> ';
        echo 'Family: <b>' . $row['Family'] . '</b> ';
        echo 'Color: <b>' . $row['Color'] . '</b> ';
        
        echo '<a href="db_view.php?id=' . $row['ProduceID'] . '">' . $row['ProduceName'] . '</a>';
        
        echo '</p>';
    }    

}else{//inform there are no records
    echo '<p>There is currently no produce</p>';
}

//release web server resources
@mysqli_free_result($result);

//close connection to mysql
@mysqli_close($iConn);
?>
<?php include 'includes/footer.php';?>