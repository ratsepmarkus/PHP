<?php

function print_nav($items)
{
    $nav = '';
    foreach ($items as $href => $menuItem) {
        $nav = $nav . "<a href='" . $href . "'>" . $menuItem . "</a> | ";
    }
    echo $nav;
}
