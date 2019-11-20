<?php
/* 
config.php allows us to place configuration 
information into our web application
*/

//include database credentials
include 'credentials.php';
define('DEBUG',TRUE); #we want to see all errors

//identifies unique page url
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//stores global data for the site
$config= new stdClass; 

//Here is our navigation
$config->nav1['index.php'] = 'Home';
$config->nav1['daily.php'] = 'Daily';
$config->nav1['db.php'] = 'Database';
$config->nav1['contact1.php'] = 'Contact Us';
$config->nav1['template.php'] = 'Template';
$config->nav1['db_list.php'] = 'Prodcue List';


//These are defualts
$config->slogan= 'Business Casual - The Revolution';
$config->banner= 'Company Name';

//Thses are page specific
switch (THIS_PAGE)
{
    case 'template.php':
        $config->title='Template';
    break;
        
    case 'contact1.php':
        $config->title='Contact';
        $config->slogan= 'Contact the Revolution!';
    break;
        
    default:
        $config->title= THIS_PAGE;
}

//Functions go at the bottom

function bcLinks($nav)
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


function myerror($myFile, $myLine, $errorMsg)
{
    if(defined('DEBUG') && DEBUG)
    {
       echo "Error in file: <b>" . $myFile . "</b> on line: <b>" . $myLine . "</b><br />";
       echo "Error Message: <b>" . $errorMsg . "</b><br />";
       die();
    }else{
		echo "I'm sorry, we have encountered an error.  Would you like to buy some socks?";
		die();
    }
}
