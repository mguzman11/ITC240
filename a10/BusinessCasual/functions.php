<?php
/* 

    functions.php
    
    These are the functions for the Business Casual Theme
    
    */
    
    function makeLinks($nav)
{
   $myReturn = '';
    foreach($nav as $url => $text){
        if(THIS_PAGE == $url){//current page
            $myReturn .= '
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="' . $url . '">' . $text . '</a>
            </li>
            ';
        }else{//all other pages
            $myReturn .= '
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="' . $url . '">' . $text . '</a>
            </li>
            ';
        }//end if

    }//end foreach
 
    return $myReturn;
}//end bcLinks()

?>