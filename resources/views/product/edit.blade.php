<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Edit Product</h2>
	<a href="/product">Back to List</a>
	<br/><br/>
	<form method="post" action="/product/{{$product->productId}}">
		{{csrf_field()}}
		<input type="hidden" name="_method" value="put">
		<table>
			<tr>
				<td>PRODUCT ID:</td>
				<td>{{$product->productId}}</td>
			</tr>
			<tr>
				<td>PRODUCT NAME:</td>
				<td><input type="text" name="pname" value="{{$product->productName}}"></td>
			</tr>
			<tr>
				<td>PRICE:</td>
				<td><input type="text" name="price" value="{{$product->price}}"></td>
			</tr>
			<tr>
				<td>QUANTITY:</td>
				<td><input type="text" name="quantity" value="{{$product->quantity}}"></td>
			</tr>
			<tr>
				<td>CATEGORY:</td>
				<td>
					<select name="cat">
						@foreach($categories as $cat)
							<option value="{{$cat->categoryId}}">{{$cat->categoryName}}</option>
						@endforeach
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Update"></td>
			</tr>
		</table>
	</form>

</body>
</html>