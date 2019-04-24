<!-- The meta tags and the description have been individualised by page -->
<?php $this_title ='Arts & Crafts';?>
<?php $pg_description = '"Botticelli Arts & Crafts is a highstreet shop with all the supplies and needs for art."';?>
<?php $pg_keywords = '"Art Craft Painting Shop Botticelli High Street"'?>
<!-- the php includes are created in such a way to be the same for all the pages and can be edited separately from the main content -->
<?php include('includes/branding.inc.php'); ?>
<?php include('includes/header.inc.php'); ?>
<!-- Main -->
<main role = "main">
    <h1><? echo $this_title; ?></h1>
    <h2>We specialise in finding items for our clients from a simple brush for every day school to a paint set for a loved one.</h2>
    <h3>Ask at the shop for any product and if we don't have it in stock we will make sure to find it for you.</h3>
    <!-- Main container for the gallery -->
    <div class="artsCrafts">
        <img src="pics/sketch.jpg" alt="sketching">
        <img src="pics/crayons.jpg" alt="crayons art">
        <img src="pics/acrylic.jpg" alt="acryilics art">
        <img src="pics/watercolour.jpg" alt="watercolour art">
        <img src="pics/crafts.jpg" alt="oil in art">
        <img src="pics/knitting.jpg" alt="colourfull knitting">
        <img src="pics/pottery.jpg" alt="colorful pottery">
        <img src="pics/wood.jpg" alt="wooden spoons">
    </div>
</main>
<!-- Open Footer. The use of php includes makes it possible to apply the same content created on all pages as a standard -->
<?php include('includes/footer.inc.php'); ?>