<?php include 'includes/config.php';?>
<?php
if(isset($_GET['day'])){//day comes from link on page
    $day = $_GET['day'];
}else{//current day of week
    $day = date('l');
}

switch($day){
    case 'Sunday': 
        $kid= 'Noah Maximillian Michael';
        $image= 'img/noah.png';
        $info= "On this Sunday, we feature Noah. Noah is ten years old. He is the oldest grandchild in the family. He loves baseball, Roblox and reading.";
   
    break; 
    
        case 'Monday': 
        $kid= 'Jude Oliver James';
        $image= 'img/jude.png';
        $info= "On this Monday, we feature Jude. Jude is seven years old. He is very affectionate and is always thinking of others. He loves to play Roblox with his brothers Noah and Leo.";
        
    break;
        
        case 'Tuesday': 
        $kid= 'Elijah Andrew';
        $image= 'img/elijah.png';
        $info= "On this Tuesday, we feature Elijah. Elijah is six and half years old. He is the most organized kid and loves to help people in any way he can. He loves to do math. His favorite colors are gold and rainbow.";
    
    break;
    
        case 'Wednesday': 
        $kid= 'Leo Zachariah Dean';
        $image= 'img/leo.png';
        $info= "On this Wednesday, we feature Leo. Leo is six years old. He loves to skateboard and take chances. Leo is very clever and inquisitive. Even though he is Mr. Independent, he still loves to snuggle.";
        
    break;
    
        case 'Thursday': 
        $kid= 'Drew Benjamin';
        $image= 'img/drew.png';
        $info= "On this Thursday we feature Drew. Drew is five and half years old and is the youngest grandson. His favorite food is cheese pizza and Z Bars. Drew is friendly and outgoing and makes friends wherever he goes. He loves the color red.";
        
    break;
    
        case 'Friday': 
        $kid= 'Ella Josephine';
        $image= 'img/ella.png';
        $info= "On this Friday, we feature Ella. Ella is four years old. She is the first granddaughter and has her grandpa wrapped around her finger! This girl is a charmer who loves to have girls' days with pedicures and lunch. But don't get me wrong, this girl is tough as nails and plays with the big boys!";
        
    break;
    
        case 'Saturday': 
        $kid= 'Fiona Jolene';
        $image= 'img/fiona.png';
        $info= "On this Saturday, we feature Fiona. Fiona is almost two years old. She is the youngest grandchild and the fifth and final kid in her family. She is a serious girl with a smile that can melt your heart. She likes to think of herself as one of the big kids!";
    break;
}

?>
<?php get_header();?>
<h2> Daily Kid </h2>
    
        <h3>Today's child is <b><?=$kid?></b></h3>
        <img src="<?=$image?>"> 
        <p><?=$info?></p>
<p> Click below to check out the new kid for each day of the week </p>

<p> <a href="daily.php?day=Monday">Monday</a> </p>
<p> <a href="daily.php?day=Tuesday">Tuesday</a> </p>
<p> <a href="daily.php?day=Wednesday">Wednesday</a> </p>
<p> <a href="daily.php?day=Thursday">Thursday</a> </p>
<p> <a href="daily.php?day=Friday">Friday</a> </p>
<p> <a href="daily.php?day=Saturday">Saturday</a> </p>
<p> <a href="daily.php?day=Sunday">Sunday</a> </p>

<?php get_footer(); ?>