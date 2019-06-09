<?php

include '../includes/config.php';

function setLanguage()
{
    if(isset($_GET['l']))
    {
        if($_GET['l'] == 'pt')
        {
            require_once('langs/pt.php');
        }
        elseif($_GET['l'] == 'en')
        {
            require_once('langs/en.php');
        }
    }
    else
    {
        if($linguagempredefinida === PT)
        {
            require_once('langs/pt.php');
        }
        elseif($linguagempredefinida === EN)
        {
            require_once('langs/en.php');
        }
        else
        {
            require_once('langs/en.php'); // BECAUSE DONT HAVE LANGUAGE SO ENGLISH NEED TO BE DEFAULT!
        }
    }
}

setLanguage();

?>
