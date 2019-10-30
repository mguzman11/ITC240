<?php
//adder.php
if (isset($_POST['num1']))
{
  	$num1 = $_POST['num1'];
  	$num2 = $_POST['num2'];
  	$myTotal = $num1 + $num2;
  	echo "<h2 align=center>You added <font color=blue>". $num1 ."</font> and ";
  	echo "<font color=blue>" . $num2 . "</font> and the answer is <font color=red>". $myTotal ."</font>!";
  	echo '<br><a href="">Reset page</a>';
}else{
echo '
   	<html>
   	<body>
   	<h1 align="center">Adder.php</h1>
   	<form action="">
   	Enter the first number:<input type="text" name="Num1"><br>
   	Enter the second number:<input type="text" name="num2"><br>
   	<input type="submit" value="Add Em!!">
   	</form>
   	</body>
   	</html>
';
}
/* Line    
    1. Missing . on line 9
    
    2. Missing ; on line 10
    
    3.  { is backwards on line 24
    
    4. The form element does not need an escape character on line 16
    
    5. Line 19 needs a closing "
    
    6. The variable $num2 on line 7 needs to be lower case to match the declared variable. 
    
    7. $myTotal needs a = not a -=. 
    
 */   
?>
