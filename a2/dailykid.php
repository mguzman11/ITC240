<?php
//dailykid.php

$myDay= date ('l');


switch ($myDay)
{
    case 'Sunday': 
        $kid= 'Noah Maximillian Michael';
        $color= 'yellow';
        $image= 'noah.png';
        $info= "On this Sunday, we feature Noah. Noah is ten years old. He is the oldest grandchild in the family. He loves baseball, Roblox and reading.";
   
    break; 
    
        case 'Monday': 
        $kid= 'Jude Oliver James';
        $color= 'orange';
        $image= 'jude.png';
        $info= "On this Monday, we feature Jude. Jude is seven years old. He is very affectionate and is always thinking of others. He loves to play Roblox with his brothers Noah and Leo.";
        
    break;
        
        case 'Tuesday': 
        $kid= 'Elijah Andrew';
        $color= 'gold';
        $image= 'elijah.png';
        $info= "On this Tuesday, we feature Elijah. Elijah is six and half years old. He is the most organized kid and loves to help people in any way he can. He loves to do math. His favorite colors are gold and rainbow.";
    
    break;
    
        case 'Wednesday': 
        $kid= 'Leo Zachariah Dean';
        $color= 'blue';
        $image= 'leo.png';
        $info= "On this Wednesday, we feature Leo. Leo is six years old. He loves to skateboard and take chances. Leo is very clever and inquisitive. Even though he is Mr. Independent, he still loves to snuggle.";
        
    break;
    
        case 'Thursday': 
        $kid= 'Drew Benjamin';
        $color= 'red';
        $image= 'drew.png';
        $info= "On this Thursday we feature Drew. Drew is five and half years old and is the youngest grandson. His favorite food is cheese pizza and Z Bars. Drew is friendly and outgoing and makes friends wherever he goes. He loves the color red.";
        
    break;
    
        case 'Friday': 
        $kid= 'Ella Josephine';
        $color= 'purple';
        $image= 'ella.png';
        $info= "On this Friday, we feature Ella. Ella is four years old. She is the first granddaughter and has her grandpa wrapped around her finger! This girl is a charmer who loves to have girls' days with pedicures and lunch. But don't get me wrong, this girl is tough as nails and plays with the big boys!";
        
    break;
    
        case 'Saturday': 
        $kid= 'Fiona Jolene';
        $color= 'pink';
        $image= 'fiona.png';
        $info= "On this Saturday, we feature Fiona. Fiona is almost two years old. She is the youngest grandchild and the fifth and final kid in her family. She is a serious girl with a smile that can melt your heart. She likes to think of herself as one of the big kids!";
    break;
}
?>

<html>
<style>
body {
    background-color: <?=$color?>;}

h1   {
    color: black;
    text-align: center;
    padding: 1em;
    }

h2    {
    color: black;
    text-align: center;
    padding: 1em;
    }
    
p    {
    color: black;
    text-align: center;
    padding: 4em;
    font-size: 18; 
    }
    
.img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: auto;
}
    
</style>
    <body>
     <h1> Today is <?=$myDay?></h1>
        <h2>Today's child is <b><?=$kid?></b></h2>
        <img src="<?=$image?>" class="img"> 
        <p><?=$info?></p>
    
    
    </body>
<footer>
      <small>&copy; 2019, All Rights Reserved
      </small>
    </footer>
</html>
