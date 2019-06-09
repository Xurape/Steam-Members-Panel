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
        require_once('langs/pt.php'); 
    }
}

setLanguage();

?>