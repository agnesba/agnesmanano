<?php
# A simple application to extract a single article from a database using mysqli and print it out.
# For ease of understanding, this script uses the mysqli connection methods described in
# Head First PHP & MySQL and not the object oriented methods described in PHP Solutions 2nd Ed.
# This application contains an example of input validation in order to prevent SQL injection.

# The value of $_GET, taken from the URL parameter is unsafe because it is user input. It has to be validated.
# Validate input: if id is set (has a value) and the data type is an integer, it seems to be OK, so assign
# the value to a variable ($article). If it doesn't pass this test, issue a 404 error, exit and print a message.
if (isset($_GET['id']) && filter_var($_GET['id'], FILTER_VALIDATE_INT)) {
    $article=$_GET['id'];
}else{
	header('HTTP/1.0 404 Not Found');
	exit("<h1>Not Found</h1>\n<p>The submitted data is not valid.</p>");
}

# If we're still in the script, all is OK, so proceed.
# assign host, username, password and database name to variables
# assign host, username, password and database name to variables
$host     = "localhost";        # Database hostname
$user     = "agnesman_artuser";           # Database username
$password = "0K3G+,W^$7DX-tfv";           # Database password
$name     = "agnesman_articles";           # Database name

# connect to the database or stop the script and give an error message
$conn = mysqli_connect($host, $user, $password, $name) or die ("Cannot connect to database.");

# build the query and assign it to a variable
# This query uses a WHERE clause to select just one row, determined by the value of $article.
$query = "SELECT article_id, headline, article, author, published FROM articles WHERE article_id = $article";

# run the query and assign the result to a variable or give an error message
$result = mysqli_query($conn, $query) or die ("Error querying database.");

# close the database connection
mysqli_close($conn);

# only one row in the result so don't need while
$row = mysqli_fetch_array($result);

# Check that id points to a real article - if $row doesn't have a value, we know there's a problem.
# if that article doesn't exist, issue a 404 error, exit and print a message.
if (!$row) {
	header('HTTP/1.0 404 Not Found');
	exit("<h1>Not Found</h1>\n<p>The requested article does not exist.</p>");
}

# If all the tests have been passed and we've reached this point, all is OK.
# assign each field to a variable
$article_id = $row['article_id'];
$headline = $row['headline'];
$article = $row['article'];
$author = $row['author'];
$date = $row['published'];
	
# convert mysql date to php timestamp
$timestamp = strtotime($date);
	
# format php timestamp
$display_date = date('jS F Y', $timestamp);
$display_time = date('g:ia', $timestamp);
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><? echo $headline; ?> | Strange Articles</title>
		<link rel="stylesheet" href="style/base.css">
	</head>

	<body>
		<h1>Strange Articles</h1>
    	<h2>A simple application using PHP and MySQL</h2>
<?php
# print out the news article
echo "<article>\n";
echo "<header>\n";
echo "<h1>$headline</h1>\n";
echo "</header>\n";
echo "<h2>by $author</h2>\n";
echo "$article\n";
echo "<p><a href=\"index.php\"><span class=\"arrow\">&laquo;</span>Back to articles homepage</a></p>\n";
echo "<footer>\n<p class=\"date\">Published: $display_date at $display_time</p>\n</footer>\n";
echo "</article>\n\n";
?>
		<footer>This article is brought to you by PHP and MySQL (with HTML and CSS)</footer>
	</body>
</html>
