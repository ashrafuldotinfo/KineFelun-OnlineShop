<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>My Application</h2>
	<p>Welcome {{session('user')->username}}</p>
	<a href="/category">Categories</a> | 
	<a href="/product">Products</a> | 
	<a href="/logout">Logout</a>
</body>
</html>
