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
        elseif($_GET['l'] == 'es')
        {
            require_once('langs/es.php');
        }
        elseif($_GET['l'] == 'fr')
        {
            require_once('langs/fr.php');
        }
        elseif($_GET['l'] == 'ru')
        {
            require_once('langs/ru.php');
        }
    }
    elseif($linguagempredefinida)
    {
        if($linguagempredefinida == PT)
        {
            require_once('langs/pt.php');
        }
        elseif($linguagempredefinida == EN)
        {
            require_once('langs/en.php');
        }
        elseif($linguagempredefinida == ES)
        {
            require_once('langs/es.php');
        }
        elseif($linguagempredefinida == FR)
        {
            require_once('langs/fr.php');
        }
        elseif($linguagempredefinida == RU)
        {
            require_once('langs/ru.php');
        }
    }
    else
    {
        require_once('langs/pt.php'); // DEFAULT
    }
}

setLanguage();

?>
