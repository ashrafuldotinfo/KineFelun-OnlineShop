@extends('layouts.main')

@section('content')
	<h2>List of Categories</h2>
	<a href="{{route('home.index')}}">Back to Home</a> | 
	<a href="/category/create">Create New</a>
	<br/><br/>
	<form method="post" action="/category/search">
		{{csrf_field()}}
		<input type="text" name="searchText">
		<input type="submit" value="Search">
	</form>
	<br/>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>OPTION</th>
		</tr>
		@foreach($categories as $cat)
			<tr>
				<td>{{$cat->categoryId}}</td>
				<td>{{$cat->categoryName}}</td>
				<td>
					<a href="{{route('category.show', ['id' => $cat->categoryId])}}">Details</a> | 
					<a href="/category/{{$cat->categoryId}}/edit">Edit</a> | 
					<a href="/category/{{$cat->categoryId}}/delete">Delete</a>
				</td>
			</tr>
		@endforeach
	</table>
@endsection




@section('scripts')
	<script type="text/javascript" src="myscript.js"></script>
@endsection