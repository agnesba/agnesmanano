<?php
# A simple application to extract articles from a database using mysqli and print them out.
# For ease of understanding, this script uses the mysqli connection methods described in
# Head First PHP & MySQL and not the object oriented methods described in PHP Solutions 2nd Ed.

# This script does not rely on user input, the data comes only from the database and can be
# considered safe. No testing is necessary.

$host     = "localhost";        # Database hostname
$user     = "agnesman_artuser";           # Database username
$password = "0K3G+,W^$7DX-tfv";           # Database password
$name     = "agnesman_articles";           # Database name

# connect to the database or stop the script and give an error message
$conn = mysqli_connect($host, $user, $password, $name) or die ("Cannot connect to database.");

# build the query and assign it to a variable
# This query selects 5 columns from the articles table and orders them by date (newest first).
# LIMIT 10 means select only the most recent 10 articles.
$query = "SELECT article_id, headline, intro, author, published FROM articles ORDER BY published DESC LIMIT 10";

# run the query and assign the result to a variable or give an error message
$result = mysqli_query($conn, $query) or die ("Error querying database.");

# close the database connection
mysqli_close($conn);
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Strange Articles (PHP and MySQL example)</title>
		<link rel="stylesheet" href="style/base.css">
	</head>

	<body>
		<h1>Strange Articles</h1>
    	<h2>A simple application using PHP and MySQL</h2>
<?php
# step through each news article, one at a time
while ($row = mysqli_fetch_array($result))
{
	# assign each field to a variable
	$article_id = $row['article_id'];
	$headline = $row['headline'];
	$intro = $row['intro'];
	$author = $row['author'];
	$date = $row['published'];
	
	# convert mysql date to php timestamp
	$timestamp = strtotime($date);
	
	# format php timestamp
	$display_date = date('jS F Y', $timestamp);
	$display_time = date('g:ia', $timestamp);
	
	# print out the news article
	# we are adding a URL parameter to the link for article.php using the $article_id variable.
	echo "<article>\n";
	echo "<header>\n";
	echo "<h1>$headline</h1>\n";
	echo "<p class=\"date\">$display_date</p>\n";
	echo "</header>\n";
	echo "$intro\n";
	echo "<p><a href=\"article.php?id=$article_id\">Read more<span class=\"arrow\">&raquo;</span></a></p>\n";
	echo "<footer>\n<p class=\"date\">Published at $display_time by $author</p>\n</footer>\n";
	echo "</article>\n\n";
}
?>
		<footer>These articles are brought to you by PHP and MySQL (with HTML and CSS)</footer>
	</body>
</html>
