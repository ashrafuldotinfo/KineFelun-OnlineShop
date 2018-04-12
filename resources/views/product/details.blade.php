<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Product Details</h2>
	<a href="/product">Back to List</a> | 
	<a href="/product/{{$product->productId}}/edit">Edit</a>
	<br/><br/>
	<table>
		<tr>
			<td>PRODUCT ID:</td>
			<td>{{$product->productId}}</td>
		</tr>
		<tr>
			<td>PRODUCT NAME:</td>
			<td>{{$product->productName}}</td>
		</tr>
		<tr>
			<td>PRICE:</td>
			<td>{{$product->price}}</td>
		</tr>
		<tr>
			<td>QUANTITY:</td>
			<td>{{$product->quantity}}</td>
		</tr>
		<tr>
			<td>CATEGORY</td>
			<td>{{$product->category->categoryName}}</td>
		</tr>
	</table>

</body>
</html>