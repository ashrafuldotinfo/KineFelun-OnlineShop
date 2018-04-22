<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
	<h2>Create Product</h2>
	<a href="/product">Back to List</a>
	<br/><br/>
	<form method="post" action="/product">
		{{csrf_field()}}
		<table>
			<tr>
				<td>PRODUCT NAME:</td>
				<td><input type="text" name="pname" value="{{old('pname')}}"></td>
			</tr>
			<tr>
				<td>PRICE:</td>
				<td><input type="text" name="price" value="{{old('price')}}"></td>
			</tr>
			<tr>
				<td>QUANTITY:</td>
				<td><input type="text" name="quantity" value="{{old('quantity')}}"></td>
			</tr>
			<tr>
				<td>Description:</td>
				<td><textarea name="description" value="{{old('description')}}" row="4" cols="17"></textarea></td>
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
				<td><input type="submit" value="Save"></td>
			</tr>
		</table>
	</form>

	@if($errors->any())
		<ul>
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	@endif

</body>
</html>