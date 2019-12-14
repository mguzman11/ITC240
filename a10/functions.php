<?php
/*
    functions.php

    functions specific to the Clean theme

*/

/*
    makeLinks() will create navigation items from an array

*/
function makeLinks($nav)
{
    $myReturn = '';
    foreach($nav as $key => $value){
        
        if(THIS_PAGE == $key)
        {//current page! add active class
            $myReturn .= '
            <li class="nav-item">
                  <a class="nav-link active" href="' . $key . '">' . $value . '</a>
           </li>';
        
        }else{//add no formatting
            $myReturn .= '
            <li class="nav-item">
                  <a class="nav-link" href="' . $key . '">' . $value . '</a>
           </li>';
        
        }
        
    }
    
    return $myReturn;
}//end makeLinks