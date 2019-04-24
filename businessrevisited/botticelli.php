<!-- The meta tags and the description have been individualised by page -->
<?php $this_title ='Botticelli&#39;s';?>
<?php $pg_description = '"Botticelli Arts & Crafts is a highstreet shop with all the supplies and needs for art."';?>
<?php $pg_keywords = '"Art Craft Painting Shop School Supplies Botticelli"'?>
<!-- the php includes are created in such a way to be the same for all the pages and can be edited separately from the main content -->
<?php include('includes/branding.inc.php'); ?>
<?php include('includes/header.inc.php'); ?>
<!-- Main -->
<main role = "main">
    <!-- Content Starts with images and information -->
    <h1>Welcome to <? echo $this_title; ?></h1>
    <h2>The one and only craft stop in Eltham. We pride ourselves of providing all the necessities and non necessities to make your life colourful</h2>
    <h3>Discover our range</h3>
    <img id="range" src="pics/range.gif" alt="range of material">
    <h3> A little inspirational quote for the day</h3>
    <img id="quotes" src="pics/inspirationalquote.gif" alt="inspirational daily quote">
    <h3> Come and visit us in shop</h3>
    <div class="homepage">
        <div id="open-hours" role = "application">
        </div>
    </div>
</main>
<script src="js/open-hours.js"></script>
<script>
    const hours = {
        "Monday": {
            start: 1000,
            end: 1800
        },
        "Tuesday": {
            start: 1000,
            end: 1800
        },
        "Wednesday": {
            start: 1000,
            end: 1900
        },
        "Thursday": {
            start: 1000,
            end: 1800
        },
        "Friday": {
            start: 1000,
            end: 1700
        },
        "Saturday": {
            start: 1100,
            end: 1700
        },
        "Sunday": {}
    }
    OpenHours.generateTime(hours)

</script>
<!-- Open Footer. The use of php includes makes it possible to apply the same content created on all pages as a standard -->
<?php include('includes/footer.inc.php'); ?>
