<?php
/*
    functions.php

    Includes code specific to this theme, Brick

*/

/*
function to create navigation from 
as associative array

*/
function makeLinks($nav1){
    
    global $config;
    $myReturn = '';
    foreach($nav1 as $url => $text){
        
        $url = $config->virtual_path . $url; //add virtual path
        if(THIS_PAGE == $url)
        {//current page - add highlight
              $myReturn .= '
            <li class="nav-item active px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="' . $url . '">' . $text . '</a>
            </li>
            '; 
        }else{//no highlight
             $myReturn .= '
            <li class="nav-item px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="' . $url . '">' . $text . '</a>
            </li>
            '; 
        }
    }
    
    return $myReturn;

}//end makeLinks()
            
?>
        
        
        
        