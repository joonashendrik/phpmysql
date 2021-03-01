<?php

function print_nav($items)
{
    $nav = '';
    foreach ($items as $href => $menuitem) {
        
        $nav = $nav ."<a href='". $href ."'> ". $menuitem ."</a>". ' | ';

    }
    echo $nav;
}
