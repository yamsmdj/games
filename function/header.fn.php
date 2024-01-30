<?php

function nav_item($lien,$title){
    $class = 'nav-item';
    if ($_SERVER['SCRIPT_NAME'] === $lien){
    // $class = $class . ' active';
        $class .= ' active';
     } 
     return <<<HTML
     <li class="$class">
        <a class="nav-link" href="$lien"> $title </a>
        </li>
HTML;
}