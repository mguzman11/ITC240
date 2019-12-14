<?php
require 'includes/config.php';
require 'includes/Pager.php'; #allows pagination 

$config->title = 'Produce List/View/Pager';
$config->loadhead .= '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';

get_header(); #header must appear before any HTML is printed by PHP
//include 'includes/header.php';
?>

<h3><b>Produce List</b></h3>

<?php 
$prev = '<i class="fa fa-chevron-circle-left"></i>';
$next = '<i class="fa fa-chevron-circle-right"></i>';

$sql = "select * from Produce";
//we connect to the db here
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);//or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));


//we extract the data here
$myPager = new Pager(10,'',$prev,$next,'');
$sql = $myPager->loadSQL($sql,$iConn);  #load SQL, pass in existing connection, add offset
$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0)
{//show records
echo $myPager->showNAV();//show pager if enough records 
	if($myPager->showTotal()==1){$itemz = "produce";}else{$itemz = "produce";}  //deal with plural
    echo '<p align="center">We have ' . $myPager->showTotal() . ' ' . $itemz . '!</p>';
	while($row = mysqli_fetch_assoc($result))
	{# process each row
         echo '<p align="center">
            <a href="db_view.php?id=' . (int)$row['ProduceID'] . '"><img src="img/produce' . (int)$row['ProduceID'] . '.jpg" style="max-width:50px" /> ' . $row['ProduceName'] . '</a>
            </p>';
	}
	//the showNAV() method defaults to a div, which blows up in our design
    echo $myPager->showNAV();//show pager if enough records 
    
    //the version below adds the optional bookends to remove the div design problem
    //echo $myPager->showNAV('<p align="center">','</p>');

}else{//inform there are no records
    echo '<p>There is currently no produce</p>';
}

//release web server resources
@mysqli_free_result($result);

//close connection to mysql
@mysqli_close($iConn);
?>
<?php get_footer();
?>