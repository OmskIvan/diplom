<?php
    session_start();
    $link = new mysqli('localhost','root','','bed_win');
    include 'header.php';
    // $root =  $_SERVER["CONTEXT_DOCUMENT_ROOT"]."style";

    function loadStyle($file)
    {
        global $root;
        $url = ($file == 'index')? "style/nav_$file.css": "../../style/nav_$file.css"; 
        return "href='$url'";
    }

?>