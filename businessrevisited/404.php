<!-- The meta tags and the description have been individualised by page -->
<?php $this_title ='About Us';?>
<?php $pg_description = '"Botticelli Arts & Crafts is a highstreet shop with all the supplies and needs for art."';?>
<?php $pg_keywords = '"Art Craft Painting Shop School Location Eltham Botticelli"'?>
<?php $link_address = 'index.php';?>
<!-- the php includes are created in such a way to be the same for all the pages and can be edited separately from the main content -->
<?php include('includes/branding.inc.php'); ?>
<?php include('includes/header.inc.php'); ?>
<!-- Main -->
<main role = "main">
    <!-- Content Starts with images and information -->
    <div class="homepage">
        <h1>Welcome to <? echo $this_title; ?> </h1>
        <h2>Well this is awkward, the page you were looking for could not be found.</h2>
        <h3>Most likely, the link you clicked is broken or maybe you typed something funny into the address bar. You could try looking for the page by going to the <? echo "<a href='$link_address'>Home Page</a>"; ?></h3>
        <p>Thank you for visiting you can find our latest workshops</p>
    </div>
</main>
<!-- Open Footer. The use of php includes makes it possible to apply the same content created on all pages as a standard -->
<?php include('includes/footer.inc.php'); ?>