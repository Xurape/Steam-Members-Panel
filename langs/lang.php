<?php

include '../includes/config.php';

function setLanguage()
{
	if(isset($_GET['l']))
    {
        if($linguagempredefinida == PT)
        {
            require_once('langs/pt.php');
        }
        elseif($linguagempredefinida == EN)
        {
            require_once('langs/en.php');
        }
        else
        {
            require_once('langs/en.php');
        }
    }
}

setLanguage();

?>