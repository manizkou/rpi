<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body>	
	<section>
		<a href="showPosts.php">Show POSTS</a>
	</section>
	<br><br>
	<section>
		<form action="api/post/create.php" method="POST">
		<label for="category_id">Select category</label>
		<select id="category_id" name="category_id">
			<option value="1">Technology</option>
			<option value="2">Gaming</option>
			<option value="3">Auto</option>
			<option value="4">Entertaintment</option>
			<option value="5">Books</option>
		</select>
		<br><br>
		<label for="title">Title</label>
		<input type="text" name="title" id="title">
		<br><br>
		<label for="body">Content</label>
		<input  id="body" type="text" name="body">
		<br><br>
		<label for="author">Author</label>
		<input type="text" name="author">
		<br><br>
		<input type="submit" name="">

	</form>
	</section>

</body>
</html>