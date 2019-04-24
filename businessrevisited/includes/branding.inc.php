<?php
$pg = basename(substr($_SERVER['PHP_SELF'],0,strrpos($_SERVER['PHP_SELF'],'.')));
?>
    <?php $pg_description = '"Botticelli Arts & Crafts is a highstreet shop with all the supplies and needs for art."';?>
    <?php $pg_keywords = '"Art Craft Painting Shop School Supplies Botticelli"'?>
    <!DOCTYPE html>

    <html lang="en">
    <!-- Head of the documents with meta tags, stylesheet and icon -->

    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <title>
            <? echo $this_title; ?>
        </title>
        <meta name="description" content= <? echo $pg_description; ?> />
        <meta name="keywords" content= <? echo $pg_keywords; ?> />
        <link rel="shortcut icon" href="pics/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Chivo%7CLato%7COpen+Sans" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    </head>
<!-- Header and navigation. The two elements have been separeted in php includes and thus creating repeating elements which are the same in all the pages. The header was separated so as to be able to modifyl the navigation as easily as possible -->
         
    <navigation role="navigation">
        <ul>
            <li class="<?php if($pg=='botticelli'){?>active<?php }?>">
                <a href="botticelli.php" accesskey="A">Home</a>
            </li>
            <li class="<?php if($pg=='artsandcrafts'){?>active<?php }?>">
                <a href="artsandcrafts.php" accesskey="B">Arts and Craft</a>
            </li>
            <li class="<?php if($pg=='stationery'){?>active<?php }?>">
                <a href="stationery.php" accesskey="C">Stationery</a>
            </li>
            <li class="<?php if($pg=='aboutus'){?>active<?php }?>">
                <a href="aboutus.php" accesskey="D">About Us</a>
            </li>
        </ul>
    </navigation>
<body>
        
<!-- Body of the document. The elements have been changed and the details provided in the body include repetead content -->