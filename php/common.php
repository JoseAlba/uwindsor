<?php
session_start();

function html5_header($title="", $cssFiles=array(), $jsFiles=array(), $uniqueLine="")
{
    echo <<<ZZEOF
    <!doctype html>
    <html lang="en" class="no-js">
    <head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="description" content="Website made for University of Windsor students"/>
        <meta name="author" content="Jose Alba">
		<meta name="keywords" content="HTML, CSS, XML, JavaScript, PHP, server side, paypal, Jose Alba">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0"/>
        
        <title>$title</title>
        $uniqueLine


ZZEOF;

    // foreach ($uniqueLine as $line)
    // echo <<<ZZEOF
    // $line

// ZZEOF;

    foreach ($cssFiles as $cssFile)
    echo <<<ZZEOF

        <link rel='stylesheet' type='text/css' href='$cssFile' />

ZZEOF;

    foreach ($jsFiles as $jsFile)
    echo <<<ZZEOF
        <script src='$jsFile' type='text/javascript'></script>
ZZEOF;

    
    echo "</head>";
}

function html5_js($jsFiles=array())
{
    foreach ($jsFiles as $jsFile)
        echo "<script src='$jsFile' type='text/javascript'></script>\n";
}

function getCurrentTime(){
    date_default_timezone_set('America/Toronto');
    $timestamp =  date("h:i:s", time());
}

function getCurrentYear(){
    date_default_timezone_set('America/Toronto');
    $timestamp =  date("d/m/Y", time());
}