<!-- The meta tags and the description have been individualised by page -->
<?php $this_title ='About Us';?>
<?php $pg_description = '"Botticelli Arts & Crafts is a highstreet shop with all the supplies and needs for art."';?>
<?php $pg_keywords = '"Art Craft Painting Shop School Location Eltham Botticelli"'?>
<!-- the php includes are created in such a way to be the same for all the pages and can be edited separately from the main content -->
<?php include('includes/branding.inc.php'); ?>
<?php include('includes/header.inc.php'); ?>
<!-- Main -->
<main role = "main">
    <h1><? echo $this_title; ?></h1>
    <p>Starting as a small business on the high street in 2004, Botticelli has createad a space for everyone interested in arts. Evolving from a small connoisseurship store begun by Claire Adams, Botticelli is now the unmissable stop in art, crafts and stationery. At Botticelli's you will find all kinds of materials and colours from basics to high end, all you need to do is ask.</p>
    <h2>Come and Visit Us</h2>
    <h3>Click on Map to create your Itinerary</h3>
    <!-- Responsive Iframe -->
    <div class="maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2486.4072624758255!2d0.053844915654600214!3d51.450678622670054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a972e0cddd97%3A0x16ec637c75228ac0!2sEltham+High+St%2C+London+SE9+1BJ!5e0!3m2!1sen!2suk!4v1547850013236" width="1200" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</main>
<!-- Open Footer. The use of php includes makes it possible to apply the same content created on all pages as a standard -->
<?php include('includes/footer.inc.php'); ?>